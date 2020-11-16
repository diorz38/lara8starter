<?php

namespace Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Main\Entities\CalonPemilih;
use App\Models\User;
use Request;
use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\Validator;
use Exception;

class CalonPemilihsController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the calon pemilihs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $nama_desa = config('global.desa.nama');
        // return $settings = app('settings');
        $calonPemilihs = CalonPemilih::whereNotIn('status',['1','7'])->with('user')->paginate(25);

        // return $calonPemilihs;
        return view('main::calon_pemilih.index', compact('calonPemilihs','nama_desa'));
    }
    public function cari(req $request)
	{
		$cari = $request->cari;

        $calonPemilihs = CalonPemilih::where('nama','like',"%".$cari."%")
        ->orWhere('nik','like',"%".$cari."%")
        ->paginate();

        $nama_desa = config('global.desa.nama');

        return view('main::calon_pemilih.index', compact('calonPemilihs','nama_desa'));

    }

    public function livewire()
    {
        $nama_desa = config('global.desa.nama');
        return view('main::livewire.home', compact('nama_desa'));
    }

    /**
     * Show the form for creating a new calon pemilih.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();

        return view('main::calon_pemilih.create', compact('users'));
    }

    /**
     * Store a new calon pemilih in the storage.
     *
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'no_tps' => 'nullable|string|min:1|max:11',
            'no_dps' => 'nullable|string|min:1|max:11',
            'nama' => 'required|string|min:3',
            'jkel' => 'required',
            'tempat_lahir' => 'required|string|min:1',
            'tgl_lahir' => 'required',
            'status_kawin' => 'nullable',
            'nik' => 'required|string|min:16|max:16',
            'dusun' => 'required|string|min:5',
            'rt' => 'required|string|min:1|max:3',
            'rw' => 'required|string|min:1|max:3',
            'syarat' => 'required|array',
            'status' => 'required|string|min:1|max:191',
        ];

        $data = $request::all();
        $validator = Validator::make($data, $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            return back()->withInput()->withErrors($validator);

        } else {

            $calonPemilih = CalonPemilih::create($data);
            // return $data;
            $calonPemilih->update($data);
            return redirect()->route('calon_pemilihs.calon_pemilih.index')->with('success_message', 'Perubahan Data Calon Pemilih berhasil disimpan');
        }

    }

    /**
     * Display the specified calon pemilih.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $calonPemilih = CalonPemilih::with('user')->findOrFail($id);

        return view('main::calon_pemilih.show', compact('calonPemilih'));
    }

    /**
     * Show the form for editing the specified calon pemilih.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $calonPemilih = CalonPemilih::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('main::calon_pemilih.edit', compact('calonPemilih','users'));
    }

    /**
     * Update the specified calon pemilih in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'no_tps' => 'nullable|string|min:1|max:11',
            'no_dps' => 'nullable|string|min:1|max:11',
            'nama' => 'required|string|min:3',
            'jkel' => 'required',
            'tempat_lahir' => 'required|string|min:1',
            'tgl_lahir' => 'required',
            'status_kawin' => 'nullable',
            'nik' => 'required|string|min:16|max:16',
            'dusun' => 'required|string|min:5',
            'rt' => 'required|string|min:1|max:3',
            'rw' => 'required|string|min:1|max:3',
            'syarat' => 'nullable|array',
            'status' => 'required|string|min:1|max:191',
        ];

        $data = $request::all();
        $validator = Validator::make($data, $rules);

        // check if the validator failed -----------------------
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            return back()->withInput()->withErrors($validator);

        } else {
            $calonPemilih = CalonPemilih::findOrFail($id);
            $calonPemilih->update($data);
            return redirect()->route('calon_pemilihs.calon_pemilih.index')->with('success_message', 'Perubahan Data Calon Pemilih berhasil disimpan');
        }
    }

    /**
     * Remove the specified calon pemilih from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $calonPemilih = CalonPemilih::findOrFail($id);
            $calonPemilih->delete();

            return redirect()->route('calon_pemilihs.calon_pemilih.index')
                ->with('success_message', 'Calon Pemilih was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'no_tps' => 'nullable|string|min:0|max:11',
            'no_dps' => 'nullable|string|min:0|max:11',
            'nama' => 'required|string|min:1|max:37',
            'jkel' => 'required',
            'tempat_lahir' => 'required|string|min:1|max:18',
            'tgl_lahir' => 'required|date_format:Y-m-d H:i:s',
            'status_kawin' => 'required',
            'nik' => 'required|string|min:1|max:16',
            'dusun' => 'required|string|min:1|max:16',
            'rt' => 'required|string|min:1|max:3',
            'rw' => 'required|string|min:1|max:3',
            'desa' => 'required|string|min:1|max:25',
            'syarat' => 'required|array',
            'status' => 'required',
        ];
        $data = Validator::make($request::all(), $rules);

        return $data;
    }

}

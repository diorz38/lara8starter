<?php

namespace Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Main\Entities\CalonPemilih;
use App\Models\User;
use Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Input;
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
        $calonPemilihs = CalonPemilih::whereNotIn('status',['1','7'])->with('user')->simplepaginate(25);

        // return $calonPemilihs;
        return view('main::calon_pemilih.index', compact('calonPemilihs','nama_desa'));
    }

    public function livewire()
    {
        return view('main::livewire.home');
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
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            CalonPemilih::create($data);

            return redirect()->route('calon_pemilihs.calon_pemilih.index')
                ->with('success_message', 'Calon Pemilih was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
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
            // $data = $request->only(['user_id', 'no_tps', 'no_dps', 'nama', 'jkel', 'tempat_lahir', 'tgl_lahir', 'status_kawin', 'nik', 'dusun', 'rt', 'rw', 'syarat', 'status']);
            // return $data;
            $calonPemilih = CalonPemilih::findOrFail($id);
            // return $data;
            $calonPemilih->update($data);
            return redirect()->route('calon_pemilihs.calon_pemilih.index')->with('success_message', 'Perubahan Data Calon Pemilih berhasil disimpan');
        }        //     $calonPemilih->update($data);

        //     return redirect()->route('calon_pemilihs.calon_pemilih.index')
        //         ->with('success_message', 'Calon Pemilih was successfully updated.');
        // } catch (Exception $exception) {

        //     return back()->withInput()
        //         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
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


        $data = $request->validate($rules);




        return $data;
    }

}

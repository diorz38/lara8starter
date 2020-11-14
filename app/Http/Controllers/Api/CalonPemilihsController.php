<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Models\CalonPemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class CalonPemilihsController extends Controller
{

    /**
     * Display a listing of the assets.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $calonPemilihs = CalonPemilih::with('user')->paginate(25);

        $data = $calonPemilihs->transform(function ($calonPemilih) {
            return $this->transform($calonPemilih);
        });

        return $this->successResponse(
            'Calon Pemilihs were successfully retrieved.',
            $data,
            [
                'links' => [
                    'first' => $calonPemilihs->url(1),
                    'last' => $calonPemilihs->url($calonPemilihs->lastPage()),
                    'prev' => $calonPemilihs->previousPageUrl(),
                    'next' => $calonPemilihs->nextPageUrl(),
                ],
                'meta' =>
                [
                    'current_page' => $calonPemilihs->currentPage(),
                    'from' => $calonPemilihs->firstItem(),
                    'last_page' => $calonPemilihs->lastPage(),
                    'path' => $calonPemilihs->resolveCurrentPath(),
                    'per_page' => $calonPemilihs->perPage(),
                    'to' => $calonPemilihs->lastItem(),
                    'total' => $calonPemilihs->total(),
                ],
            ]
        );
    }

    /**
     * Store a new calon pemilih in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = $this->getValidator($request);

            if ($validator->fails()) {
                return $this->errorResponse($validator->errors()->all());
            }

            $data = $this->getData($request);
            
            $calonPemilih = CalonPemilih::create($data);

            return $this->successResponse(
			    'Calon Pemilih was successfully added.',
			    $this->transform($calonPemilih)
			);
        } catch (Exception $exception) {
            return $this->errorResponse('Unexpected error occurred while trying to process your request.');
        }
    }

    /**
     * Display the specified calon pemilih.
     *
     * @param int $id
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $calonPemilih = CalonPemilih::with('user')->findOrFail($id);

        return $this->successResponse(
		    'Calon Pemilih was successfully retrieved.',
		    $this->transform($calonPemilih)
		);
    }

    /**
     * Update the specified calon pemilih in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        try {
            $validator = $this->getValidator($request);

            if ($validator->fails()) {
                return $this->errorResponse($validator->errors()->all());
            }

            $data = $this->getData($request);
            
            $calonPemilih = CalonPemilih::findOrFail($id);
            $calonPemilih->update($data);

            return $this->successResponse(
			    'Calon Pemilih was successfully updated.',
			    $this->transform($calonPemilih)
			);
        } catch (Exception $exception) {
            return $this->errorResponse('Unexpected error occurred while trying to process your request.');
        }
    }

    /**
     * Remove the specified calon pemilih from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $calonPemilih = CalonPemilih::findOrFail($id);
            $calonPemilih->delete();

            return $this->successResponse(
			    'Calon Pemilih was successfully deleted.',
			    $this->transform($calonPemilih)
			);
        } catch (Exception $exception) {
            return $this->errorResponse('Unexpected error occurred while trying to process your request.');
        }
    }
    
    /**
     * Gets a new validator instance with the defined rules.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Support\Facades\Validator
     */
    protected function getValidator(Request $request)
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

        return Validator::make($request->all(), $rules);
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

    /**
     * Transform the giving calon pemilih to public friendly array
     *
     * @param App\Models\CalonPemilih $calonPemilih
     *
     * @return array
     */
    protected function transform(CalonPemilih $calonPemilih)
    {
        return [
            'id' => $calonPemilih->id,
            'user_id' => optional($calonPemilih->user)->name,
            'no_tps' => $calonPemilih->no_tps,
            'no_dps' => $calonPemilih->no_dps,
            'nama' => $calonPemilih->nama,
            'jkel' => $calonPemilih->jkel,
            'tempat_lahir' => $calonPemilih->tempat_lahir,
            'tgl_lahir' => $calonPemilih->tgl_lahir,
            'status_kawin' => $calonPemilih->status_kawin,
            'nik' => $calonPemilih->nik,
            'dusun' => $calonPemilih->dusun,
            'rt' => $calonPemilih->rt,
            'rw' => $calonPemilih->rw,
            'desa' => $calonPemilih->desa,
            'syarat' => implode('; ', $calonPemilih->syarat),
            'status' => $calonPemilih->status,
        ];
    }


}

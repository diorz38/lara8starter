<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Main\Entities\CalonPemilih;
use App\Models\User;

class Pemilih extends Component
{
    use WithPagination;

    public $search;
    // public $name, $email, $user_id;
    public $pemilih_id, $user_id, $no_tps, $no_dps, $nama, $jkel, $tempat_lahir, $tgl_lahir, $status_kawin, $nik, $dusun, $rt, $rw, $desa, $status;
    public $syarat = [];
    public $updateMode = false;
    public $nama_desa;

    protected $queryString = ['search'];

    public function render()
    {
        // $this->users = CalonPemilih::all();
        // $this->users = User::all();
        // $this->voters = CalonPemilih::whereNotIn('status',['1','3','7'])->with('user')->paginate(10);
        return view('main::livewire.pemilih',[
            'users' => User::paginate(10),
            'nama_desa' => config('global.desa.nama'),
            'calonPemilih' => CalonPemilih::where('nama', 'like', '%'.$this->search.'%')->orWhere('nik', 'LIKE', '%'.$this->search.'%')->simplepaginate(10),
        ]);
    }

    private function resetInputFields(){
        $this->user_id = '';
        $this->no_tps = '';
        $this->no_dps = '';
        $this->nama = '';
        $this->jkel = '';
        $this->tempat_lahir = '';
        $this->tgl_lahir = '';
        $this->status_kawin = '';
        $this->nik = '';
        $this->dusun = '';
        $this->rt = '';
        $this->rw = '';
        $this->desa = '';
        $this->syarat = [];
        $this->status = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'user_id' => 'required',
            'no_tps' => 'nullable|string|min:1|max:2',
            'no_dps' => 'nullable',
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
            'status' => 'required|string|min:1|max:1',
        ]);

        CalonPemilih::create($validatedData);

        session()->flash('message', 'Calon Pemilih Tambahan berhasil disimpan.');

        $this->resetInputFields();

        $this->emit('pemilihStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $calonPemilih = CalonPemilih::where('id',$id)->first();
        $this->pemilih_id = $id;
        $this->user_id = \Auth::user()->id;
        $this->no_tps = $calonPemilih->no_tps;
        $this->no_dps = $calonPemilih->no_dps;
        $this->nama = $calonPemilih->nama;
        $this->jkel = $calonPemilih->jkel;
        $this->tempat_lahir = $calonPemilih->tempat_lahir;
        $this->tgl_lahir = $calonPemilih->tgl_lahir;
        $this->status_kawin = $calonPemilih->status_kawin;
        $this->nik = $calonPemilih->nik;
        $this->dusun = $calonPemilih->dusun;
        $this->rt = $calonPemilih->rt;
        $this->rw = $calonPemilih->rw;
        $this->desa = $calonPemilih->desa;
        $this->syarat = $calonPemilih->syarat;
        $this->status = $calonPemilih->status;

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedData = $this->validate([
            'user_id' => 'required',
            'no_tps' => 'nullable|string|min:1|max:2',
            'no_dps' => 'nullable',
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
            'status' => 'required|string|min:1|max:1',

        ]);

        // dd($validatedData);
        if ($this->pemilih_id) {
            $calonPemilih = CalonPemilih::find($this->pemilih_id);
            // CalonPemilih::update($validatedData);
            $calonPemilih->update([
                'user_id' => \Auth::user()->id,
                'no_tps' => $this->no_tps,
                'no_dps' => $this->no_dps,
                'nama' => $this->nama,
                'jkel' => $this->jkel,
                'tempat_lahir' => $this->tempat_lahir,
                'tgl_lahir' => $this->tgl_lahir,
                'status_kawin' => $this->status_kawin,
                'nik' => $this->nik,
                'dusun' => $this->dusun,
                'rt' => $this->rt,
                'rw' => $this->rw,
                'desa' => $this->desa,
                'syarat' => $this->syarat,
                'status' => $this->status,

            ]);
            $this->updateMode = false;
            session()->flash('message', 'Data Calon Pemilih berhasil diperbaharui.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            CalonPemilih::where('id',$id)->delete();
            session()->flash('message', 'Data Calon Pemilih berhasil dihapus.');
        }
    }
}

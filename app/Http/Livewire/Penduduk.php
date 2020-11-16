<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sampledata;
use Modules\Main\Entities\CalonPemilih;

class Penduduk extends Component
{
    use WithPagination;

	public $first_name, $last_name, $gender, $data_id;
    public $pemilih_id, $user_id, $no_tps, $no_dps, $nama, $jkel, $tempat_lahir, $tgl_lahir, $status_kawin, $nik, $dusun, $rt, $rw, $desa, $status;
    public $syarat = [];

    public function render()
    {
    	// $this->sampledata = Sampledata::paginate(10);
    	// $this->calonpemilih = CalonPemilih::all();

        return view('livewire.posts.posts', [
            'calonpemilih' => CalonPemilih::simplepaginate(10),
            'sampledata' => Sampledata::all(),
        ]);
    }

    public function resetInputFields()
    {
    	$this->first_name = '';
    	$this->last_name = '';
        $this->gender = '';

    }
    public function resetPendudukFields()
    {
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
    	$validation = $this->validate([
    		'first_name'		=>	'required',
    		'last_name'			=>	'required',
    		'gender'			=>	'required'
    	]);

    	Sampledata::create($validation);

    	session()->flash('message', 'Data Created Successfully.');

    	$this->resetInputFields();

    	$this->emit('userStore');
    }

    public function edit($id)
    {
        $data = Sampledata::findOrFail($id);
        $this->data_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->gender = $data->gender;
    }

    public function update()
    {
        $validate = $this->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'gender'        =>  'required'
        ]);

        $data = Sampledata::find($this->data_id);

        $data->update([
            'first_name'       =>   $this->first_name,
            'last_name'         =>  $this->last_name,
            'gender'            =>  $this->gender
        ]);

        session()->flash('message', 'Data Updated Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function delete($id)
    {
        Sampledata::find($id)->delete();
        session()->flash('message', 'Data Deleted Successfully.');
    }
}

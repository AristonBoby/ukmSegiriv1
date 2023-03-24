<?php

namespace App\Http\Livewire\Pendaftaran;

use Livewire\Component;

class FormInput extends Component
{   public $nama;
    public $tmpLahir;
    public $tglLahir;
    public $jenkel;
    public $kepalaKeluarga;
    public $noKk;
    public $nik;
    public $alamat;

    protected $rules = ([
        'nama'              =>  'required||max:60',
        'tmpLahir'          =>  'required',
        'tglLahir'          =>  'required',
        'jenkel'            =>  'required',
        'kepalaKeluarga'    =>  'required',
        'noKk'              =>  'required',
        'nik'               =>  'required',
        'alamat'            =>  'required',
    ]);

    public $messages = ([
        'nama.required'             => 'Nama wajib diisi',
        'nama.max'                  => 'Maksimal panjang 60 karakter',
        'tmpLahir.required'         => 'Tempat lahir wajib diisi',
        'tglLahir.required'         => 'Tempat lahir wajib diisi',
        'jenkel.required'           => 'Jenis Kelamin wajib diisi',
        'kepalaKeluarga.required'   => 'Nama kepala Keluarga wajib diisi',
        'noKk.required'             => 'Nomor Kartu Keluarga',
        'nik.required'              => 'NIK wajib diisi',
        'alamat.required'           => 'Alamat wajib diisi',
    ]);
    public function render()
    {
        return view('livewire.pendaftaran.form-input');
    }



    public function store()
    {
        $this->validate();
    }
}

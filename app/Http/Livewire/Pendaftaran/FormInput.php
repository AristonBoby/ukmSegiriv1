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

    protected $rules = ([
        'nama'      => 'required',
        'tmpLahir'  => 'required',
    ]);

    protected $message = [
        'nama.require'  => 'Nama wajib diisi'
    ];
    public function render()
    {
        return view('livewire.pendaftaran.form-input');
    }



    public function store()
    {
        $this->validate();
    }
}

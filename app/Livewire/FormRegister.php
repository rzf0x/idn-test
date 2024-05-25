<?php

namespace App\Livewire;

use App\Models\CabangIdn;
use App\Models\Santri;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormRegister extends Component
{
    use WithFileUploads;

    public $cabangIdnId;
    public $programIdn;
    public $username;
    public $password;
    public $namaSantri;
    public $jenisKelamin;
    public $buktiTransfer;
    public $alertMessage = '';
    public $cabangSelected = false;
    public $cabang;

    protected $rules = [
        'cabangIdnId' => 'required',
        'password' => 'required|min:8',
        'namaSantri' => 'required',
        'jenisKelamin' => 'required',
        'buktiTransfer' => 'required|image|max:1024|mimes:jpg,jpeg,png',
    ];

    public function render()
    {
        $cabangIdns = CabangIdn::all();
        $programIdns = ['SMP', 'SMK TKJ', 'SMK RPL', 'SMK DKV'];

        $this->cabangSelected = !is_null($this->cabangIdnId);

        return view('livewire.form-register', compact('cabangIdns', 'programIdns'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function daftar()
    {
        $validatedData = $this->validate();

        Santri::create([
            'nama_santri' => $validatedData['namaSantri'],
            'password' => bcrypt($validatedData['password']),
            'jenis_kelamin' => $validatedData['jenisKelamin'],
            'cabang_idn_id' => $validatedData['cabangIdnId'],
            'program_idn' => $this->programIdn,
            'bukti_transfer' => $this->buktiTransfer->store('bukti_transfer', 'public'),
        ]);

        $this->reset(['username', 'password', 'namaSantri', 'jenisKelamin', 'buktiTransfer']);

        $this->alertMessage = 'Pendaftaran berhasil!';
    }
}

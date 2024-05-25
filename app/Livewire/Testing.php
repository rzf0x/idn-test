<?php

namespace App\Livewire;

use App\Models\CabangIdn;
use Livewire\Component;

class Testing extends Component
{
    public $cabangIdnId;
    public $kuota;
    public $showKuota = false;
    public function mount()
    {
        $this->cabangIdnId = CabangIdn::first()->id;
        $this->loadKuota();
    }

    public function updatedCabangIdnId($value)
    {
        $this->loadKuota();
    }

    public function loadKuota()
    {
        $cabang = CabangIdn::find($this->cabangIdnId);
        if ($cabang) {
            $this->kuota = [
                'nama_cabang' => $cabang->nama_cabang,
                'kuota_tkj' => $cabang->kuota_tkj,
                'kuota_rpl' => $cabang->kuota_rpl,
                'kuota_dkv' => $cabang->kuota_dkv,
                'kuota_smp' => $cabang->kuota_smp,
            ];
            $this->showKuota = true;
        } else {
            $this->showKuota = false;
        }
    }

    public function render()
    {
        $cabangIdns = CabangIdn::all();
        return view('livewire.testing', compact('cabangIdns'));
    }
}

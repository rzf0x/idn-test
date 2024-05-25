<?php

namespace App\Livewire;

use App\Models\CabangIdn;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class KuotaCabang extends Component
{
    public $cabangIdnId;
    public $kuota;

    public function mount()
    {
        $this->cabangIdnId = CabangIdn::first()->id;
        $this->loadKuota();
        Log::info('Mounted KuotaCabang component with cabangIdnId: ' . $this->cabangIdnId);
    }

    public function updatedCabangIdnId($value)
    {
        $this->loadKuota();
    }

    private function loadKuota()
    {
        $cabang = CabangIdn::find($this->cabangIdnId);
        $this->kuota = [
            'nama_cabang' => $cabang->nama_cabang,
            'kuota_tkj' => $cabang->kuota_tkj,
            'kuota_rpl' => $cabang->kuota_rpl,
            'kuota_dkv' => $cabang->kuota_dkv,
            'kuota_smp' => $cabang->kuota_smp,
        ];
    }

    public function render()
    {
        $cabangIdns = CabangIdn::all();
        $this->loadKuota();
        Log::info('Rendering KuotaCabang component with kuota: ' . json_encode($this->kuota));
        return view('livewire.kuota-cabang', compact('cabangIdns'));
    }
}

<div>
    <div class="login-brand">
        <h1 class="text-danger">Form Daftar Santri <br><span class="text-primary">IDN Boarding School</span></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <label for="cabang_idn_id" class="block text-sm font-medium text-gray-700">Pilih Cabang IDN:</label>
                <select wire:model="cabangIdnId" wire:change="loadKuota" class="form-select">
                    @foreach ($cabangIdns as $cabang)
                        <option value="{{ $cabang->id }}">{{ $cabang->nama_cabang }}</option>
                    @endforeach
                </select>
            </div>

            <div x-data="{ 'showKuota': {{ $showKuota ? 'true' : 'false' }} }" x-show="showKuota" class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Sisa Kuota Pada Cabang -
                    {{ $kuota['nama_cabang'] ?? 'Pilih Cabang' }}</h2>
                <ul>
                    <li>Kuota TKJ: {{ $kuota['kuota_tkj'] ?? 'Data Tidak Ada' }}</li>
                    <li>Kuota RPL: {{ $kuota['kuota_rpl'] ?? 'Data Tidak Ada' }}</li>
                    <li>Kuota DKV: {{ $kuota['kuota_dkv'] ?? 'Data Tidak Ada' }}</li>
                    <li>Kuota SMP: {{ $kuota['kuota_smp'] ?? 'Data Tidak Ada' }}</li>
                </ul>
            </div>

            <div>
                <a href="/form-register" class="btn btn-primary">
                    Daftar sekarang!
                </a>
            </div>
        </div>
    </div>

</div>

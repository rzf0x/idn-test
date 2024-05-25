<div>
    <div class="mb-4">
        <label for="cabang_idn_id" class="block text-sm font-medium text-gray-700">Pilih Cabang IDN:</label>
        <select wire:model="cabangIdnId"
            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            @foreach ($cabangIdns as $cabang)
                <option value="{{ $cabang->id }}">{{ $cabang->nama_cabang }}</option>
            @endforeach
        </select>
    </div>

    <div class="card bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Sisa Kuota - {{ $kuota['nama_cabang'] }}</h2>
        <ul>
            <li>Kuota TKJ: {{ $kuota['kuota_tkj'] ?? 'N/A' }}</li>
            <li>Kuota RPL: {{ $kuota['kuota_rpl'] }}</li>
            <li>Kuota DKV: {{ $kuota['kuota_dkv'] }}</li>
            <li>Kuota SMP: {{ $kuota['kuota_smp'] }}</li>
        </ul>
    </div>
</div>

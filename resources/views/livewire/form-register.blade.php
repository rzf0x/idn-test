<div>
    <div class="card">
        <div class="card-header">
            <h3>Form Daftar Santri Baru IDN Boarding School</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="daftar" class="form-group row">
                <!-- Field Username (Email) -->
                <div class="mb-4 col-lg-6">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username :</label>
                    <input wire:model.defer="username" type="username" required class="w-100 form-control">
                    @error('username')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Field Password -->
                <div class="mb-4 col-lg-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input wire:model.defer="password" type="password" required class="w-100 form-control">
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Field Nama Santri -->
                <div class="mb-4 col-lg-6">
                    <label for="nama_santri" class="block text-sm font-medium text-gray-700">Nama Santri:</label>
                    <input wire:model.defer="namaSantri" type="text" required class="w-100 form-control">
                    @error('namaSantri')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Field Jenis Kelamin -->
                <div class="mb-4 col-lg-6">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                    <br>
                    <select wire:model.defer="jenisKelamin" required class="form-control">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenisKelamin')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div x-data="{ cabangId: null }" class="mb-4 col-lg-6">
                    <!-- Field Cabang IDN -->
                    <label for="cabang_idn_id" class="">Pilih Cabang IDN :</label>
                    <br>
                    <select wire:model="cabangIdnId" x-model="cabangId" @change="$wire.set('cabangIdnId', cabangId)"
                        required class="form-control">
                        <option value="">-- Pilih Cabang --</option>
                        @foreach ($cabangIdns as $cabang)
                            <option value="{{ $cabang->id }}">{{ $cabang->nama_cabang }}</option>
                        @endforeach
                    </select>
                    @error('cabangIdnId')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <!-- Field Program IDN -->
                    <template x-if="cabangId">
                        <div class="mb-4 mt-3">
                            <label for="program_idn" class="block text-sm font-medium text-gray-700">Pilih Program
                                IDN:</label>
                            <select wire:model="programIdn" required class="form-control">
                                <option value="">Pilih Program</option>
                                @foreach ($programIdns as $program)
                                    <option value="{{ $program }}">{{ $program }}</option>
                                @endforeach
                            </select>
                            @error('programIdn')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </template>
                </div>

                <div x-data="{ imagePreview: '' }" class="mb-4 col-lg-6">
                    <!-- Field Bukti Transfer -->
                    <label for="bukti_transfer" class="block text-sm font-medium text-gray-700">Upload Bukti
                        Transfer:</label>
                    <input wire:model="buktiTransfer" type="file" accept="image/*" required
                        class="w-100 form-control" @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                    @error('buktiTransfer')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    <template x-if="imagePreview">
                        <img x-bind:src="imagePreview" class="mt-2" style="max-width: 50%; height: auto;" />
                    </template>
                </div>


                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
            </form>
        </div>
    </div>
</div>

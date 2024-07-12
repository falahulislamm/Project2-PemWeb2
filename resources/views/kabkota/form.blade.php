<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola KabKota</x-slot> 
<x-slot name="card_title">Form Kelola KabKota</x-slot>
<x-slot name="breadcrumb_active">KabKota</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<form action="{{ route('kabkota.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama KabKota</label>
        <input type="text" name="nama" id="nama" value="{{ $kabkota->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="latitude" value="{{ $kabkota->latitude }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="longitude" value="{{ $kabkota->longitude }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="provinsi">Provinsi</label>
        <div class="row container">
        <select name="provinsi_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_provinsi as $provinsi)
            <option value="{{ $provinsi->id }}" {{ $kabkota->provinsi_id==$provinsi->id ? 'selected': ''}}>
                {{ $provinsi->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ $kabkota->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('kabkota.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>
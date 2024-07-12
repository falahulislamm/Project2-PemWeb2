<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola UMKM</x-slot> 
<x-slot name="card_title">Form Kelola UMKM</x-slot>
<x-slot name="breadcrumb_active">UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<form action="{{ route('umkm.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama UMKM</label>
        <input type="text" name="nama" id="nama" value="{{ $umkm->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="modal">Modal</label>
        <input type="text" name="modal" id="modal" value="{{ $umkm->modal}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pemilik">Pemilik</label>
        <input type="text" name="pemilik" id="pemilik" value="{{ $umkm->pemilik}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $umkm->alamat}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" value="{{ $umkm->website}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $umkm->email}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kabkota">KabKota</label>
        <div class="row container">
        <select name="kabkota_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_kabkota as $kabkota)
            <option value="{{ $kabkota->id }}" {{ $umkm->kabkota_id==$kabkota->id ? 'selected': ''}}>
                {{ $kabkota->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating" value="{{ $umkm->rating}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kategori_umkm">Kategori</label>
        <div class="row container">
        <select name="kategori_umkm_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_kategori_umkm as $kategori_umkm)
            <option value="{{ $kategori_umkm->id }}" {{ $umkm->kategori_umkm_id==$kategori_umkm->id ? 'selected': ''}}>
                {{ $kategori_umkm->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="pembina">Pembina</label>
        <div class="row container">
        <select name="pembina_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_pembina as $pembina)
            <option value="{{ $pembina->id }}" {{ $umkm->pembina_id==$pembina->id ? 'selected': ''}}>
                {{ $pembina->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ $umkm->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('umkm.show') }}" class="btn btn-success mr-2">Batal</a>
    
</form>
</x-layout>
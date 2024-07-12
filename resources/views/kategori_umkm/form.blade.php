<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Kategori UMKM</x-slot> 
<x-slot name="card_title">Form Kelola Kategori UMKM</x-slot> 
<x-slot name="breadcrumb_active">Kategori UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<form action="{{ route('kategori_umkm.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kategori_umkm">Kategori UMKM</label>
        <input type="text" name="nama" id="nama" value="{{ $kategori_umkm->nama }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $kategori_umkm->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('kategori_umkm.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>
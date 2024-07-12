<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail UMKM</x-slot> 
<x-slot name="card_title">Detail UMKM :: {{ $umkm->id }} -  {{ $umkm->nama }}</x-slot>
<x-slot name="breadcrumb_active">UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">ID</th><td>{{ $umkm->id }}</td></tr>
    <tr><th>Nama umkm</th><td>{{ $umkm->nama }}</td></tr>
    <tr><th>Modal</th><td>{{ $umkm->modal }}</td></tr>
    <tr><th>Pemilik</th><td>{{ $umkm->pemilik }}</td></tr>
    <tr><th>Alamat</th><td>{{ $umkm->alamat }}</td></tr>
    <tr><th>Website</th><td>{{ $umkm->website }}</td></tr>
    <tr><th>Email</th><td>{{ $umkm->email }}</td></tr>
    <tr><th>KabKota</th><td>{{ $umkm->kabkota->nama }}</td></tr>
    <tr><th>Rating</th><td>{{ $umkm->rating }}</td></tr>
    <tr><th>Kategori</th><td>{{ $umkm->kategori_umkm->nama }}</td></tr>
    <tr><th>Pembina</th><td>{{ $umkm->pembina->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('umkm.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>

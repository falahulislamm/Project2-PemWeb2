<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Kategori UMKM</x-slot> 
<x-slot name="card_title">Detail Kategori UMKM :: {{ $kategori_umkm->id }} -  {{ $kategori_umkm->nama }}</x-slot> 
<x-slot name="breadcrumb_active">Kategori UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">ID</th><td>{{ $kategori_umkm->id }}</td></tr>
    <tr><th>Kategori UMKM</th><td>{{ $kategori_umkm->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('kategori_umkm.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>

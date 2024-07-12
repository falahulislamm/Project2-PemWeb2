<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Provinsi</x-slot> 
<x-slot name="card_title">Detail Provinsi :: {{ $provinsi->id }} -  {{ $provinsi->nama }}</x-slot>
<x-slot name="breadcrumb_active">Provinsi</x-slot> 
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Id Provinsi</th><td>{{ $provinsi->id }}</td></tr>
    <tr><th>Provinsi</th><td>{{ $provinsi->nama }}</td></tr>
    <tr><th>Ibu Kota</th><td>{{ $provinsi->ibukota }}</td></tr>
    <tr><th>Latitude</th><td>{{ $provinsi->latitude }}</td></tr>
    <tr><th>Longitude</th><td>{{ $provinsi->longitude }}</td></tr>
</table>
<div>
    <a href="{{ route('provinsi.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>

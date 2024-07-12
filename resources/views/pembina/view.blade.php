<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Pembina</x-slot> 
<x-slot name="card_title">Detail Pembina :: {{ $pembina->id }} -  {{ $pembina->nama }}</x-slot>
<x-slot name="breadcrumb_active">Pembina</x-slot> 
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">ID Pembina</th><td>{{ $pembina->id }}</td></tr>
    <tr><th>Nama Pembina</th><td>{{ $pembina->nama }}</td></tr>
    <tr><th>Gender</th><td>{{ $pembina->gender }}</td></tr>
    <tr><th>Tanggal Lahir</th><td>{{ $pembina->tgl_lahir }}</td></tr>
    <tr><th>Tempat Lahir</th><td>{{ $pembina->tmp_lahir }}</td></tr>
    <tr><th>Keahlian</th><td>{{ $pembina->keahlian }}</td></tr>
</table>
<div>
    <a href="{{ route('pembina.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>

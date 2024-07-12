<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Provinsi</x-slot> 
<x-slot name="card_title">Daftar Provinsi</x-slot>
<x-slot name="breadcrumb_active">Provinsi</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>

<h2 class="text-center">Data Provinsi</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('provinsi.create') }}"><button class="btn btn-primary mb-1"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Provinsi</th>
            <th>Ibu Kota</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th class="col-4">Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_provinsi as $provinsi)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $provinsi->nama }}</td>
            <td>{{ $provinsi->ibukota }}</td>
            <td>{{ $provinsi->latitude }}</td>
            <td>{{ $provinsi->longitude }}</td>
            <td>
                <form action="{{ route('provinsi.destroy', $provinsi->id) }}" method="post">
                <a href="{{ route('provinsi.view', $provinsi->id) }}" class="btn btn-primary">View</a>
                @if(Auth::user()->role=='administrator')
                <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>
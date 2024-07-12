<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data KabKota</x-slot> 
<x-slot name="card_title">Daftar KabKota</x-slot>
<x-slot name="breadcrumb_active">KabKota</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>

<h2 class="text-center">Data KabKota</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('kabkota.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama KabKota</th>
            <th>Latitude</th>  
            <th>Longitude</th>
            <th>Provinsi</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_kabkota as $kabkota)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $kabkota->id }}</td>
            <td>{{ $kabkota->nama }}</td>
            <td>{{ $kabkota->latitude }}</td>
            <td>{{ $kabkota->longitude }}</td>
            <td>{{ $kabkota->provinsi->nama }}</td>
            <td>
               <form action="{{ route('kabkota.destroy', $kabkota->id) }}" method="post">
               <a href="{{ route('kabkota.view', $kabkota->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               @if(Auth::user()->role=='administrator')
               <a href="{{ route('kabkota.edit', $kabkota->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               @endif
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>
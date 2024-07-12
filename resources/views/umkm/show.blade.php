<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data UMKM</x-slot> 
<x-slot name="card_title">Daftar UMKM Aktif</x-slot>
<x-slot name="breadcrumb_active">UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>

<h2 class="text-center">Data UMKM</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('umkm.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama UMKM</th>  
            <th>Modal</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>Website</th>
            <th>Email</th>
            <th>KabKota</th>
            <th>Rating</th>
            <th>Kategori</th>
            <th>Pembina</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_umkm as $umkm)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $umkm->id }}</td>
            <td>{{ strtoupper($umkm->nama) }}</td>
            <td>{{ $umkm->modal }}</td>
            <td>{{ $umkm->pemilik }}</td>
            <td>{{ $umkm->alamat }}</td>
            <td>{{ $umkm->website }}</td>
            <td>{{ $umkm->email }}</td>
            <td>{{ $umkm->kabkota->nama }}</td>
            <td>{{ $umkm->rating }}</td>
            <td>{{ $umkm->kategori_umkm->nama }}</td>
            <td>{{ $umkm->pembina->nama }}</td>
            <td>
               <form action="{{ route('umkm.destroy', $umkm->id) }}" method="post">
               <a href="{{ route('umkm.view', $umkm->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               @if(Auth::user()->role=='administrator')
               <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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
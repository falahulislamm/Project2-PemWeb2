<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Kategori UMKM</x-slot> 
<x-slot name="card_title">Daftar Kategori UMKM</x-slot>
<x-slot name="breadcrumb_active">Kategori UMKM</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>

<h2 class="text-center">Data Kategori UMKM</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('kategori_umkm.create') }}"><button class="btn btn-primary mb-1"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>  
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_kategori_umkm as $kategori_umkm)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $kategori_umkm->nama }}</td>
            <td>
                <form action="{{ route('kategori_umkm.destroy', $kategori_umkm->id) }}" method="post">
                <a href="{{ route('kategori_umkm.view', $kategori_umkm->id) }}" class="btn btn-primary">View</a>
                @if(Auth::user()->role=='administrator')
                <a href="{{ route('kategori_umkm.edit', $kategori_umkm->id) }}" class="btn btn-warning">Edit</a>
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
<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Pembina</x-slot> 
<x-slot name="card_title">Daftar Pembina</x-slot>
<x-slot name="breadcrumb_active">Pembina</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>

<h2 class="text-center">Data Pembina</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('pembina.create') }}"><button class="btn btn-primary mb-1"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pembina</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Keahlian</th>
            <th class="col-4">Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_pembina as $pembina)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pembina->nama }}</td>
            <td>{{ $pembina->gender }}</td>
            <td>{{ $pembina->tgl_lahir }}</td>
            <td>{{ $pembina->tmp_lahir }}</td>
            <td>{{ $pembina->keahlian }}</td>
            <td>
                <form action="{{ route('pembina.destroy', $pembina->id) }}" method="post">
                <a href="{{ route('pembina.view', $pembina->id) }}" class="btn btn-primary">View</a>
                @if(Auth::user()->role=='administrator')
                <a href="{{ route('pembina.edit', $pembina->id) }}" class="btn btn-warning">Edit</a>
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
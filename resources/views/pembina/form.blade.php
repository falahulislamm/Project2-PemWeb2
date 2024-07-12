<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Pembina</x-slot> 
<x-slot name="card_title">Form Kelola Pembina</x-slot>
<x-slot name="breadcrumb_active">Pembina</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<form action="{{ route('pembina.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="pembina">Nama Pembina</label>
        <input type="text" name="nama" id="nama" value="{{ $pembina->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender" class="mr-2">Jenis Kelamin</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" {{ $pembina->gender=='L' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" {{ $pembina->gender=='P' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $pembina->tgl_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tmp_lahir">Tempat Lahir</label>
        <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $pembina->tmp_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="keahlian">Keahlian</label>
        <input type="text" name="keahlian" id="keahlian" value="{{ $pembina->keahlian }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $pembina->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('pembina.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>
<x-layout>
<x-slot name="title">Halaman profil</x-slot> 
<x-slot name="card_title">Profilku</x-slot>
<x-slot name="breadcrumb_active">Profile</x-slot>
<x-slot name="card_footer">@Direktori UMKM</x-slot>
<div class="card-body">
<div class="container">
    <h4 class="text-center mt-4">Selamat Datang Di Website Direktori UMKM<br />Projek Laravel</h4>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
        <div class="card">
            <div class="card-body bg-primary rounded">
                <h5 class="text-center mb-4">Informasi Profil</h5>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/profil.jfif') }}" class="img-fluid rounded" alt="Profile Image">
                    </div>
                    <div class="col-md-8 mt-5">
                            <strong>Nama :</strong> {{ strtoupper(Auth::user()->name) ?? "" }}
                            <br>
                            <strong>Role :</strong> {{ Auth::user()->role }}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</x-layout>
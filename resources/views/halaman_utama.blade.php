@extends('components.layout_kalender')
@section('slot')


    <div class="card-body">
        <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Direktori UMKM</b> <br><i>Projek 2 - Pemrograman Web 2</i></h4>
        <br><br>
        @auth
        <fieldset>
                        <legend style="color: black; font-weight: bold;">Hello!</legend>
                        <article style="text-align: justify; color: black;">
                        @if(Auth::user()->role=='administrator')
                        @if (Auth::check())
                            <span style="font-size: 150%;">S</span>elamat datang {{ strtoupper(Auth::user()->name) ?? "" }} di Dashboard Admin Direktori UMKM. Di sini, Anda memiliki kontrol penuh untuk mengelola dan memperbarui informasi yang terkait dengan direktori UMKM. . Gunakan fitur-fitur canggih yang tersedia untuk melakukan analisis performa UMKM dan mengoptimalkan strategi pasar. Kami berharap dashboard ini membantu Anda menjalankan UMKM dengan lebih efisien dan sukses.
                        </article>
                        @endif
                        @endif

                        <article style="text-align: justify; color: black;">
                        @if(Auth::user()->role=='umkm')
                        @if (Auth::check())
                            <span style="font-size: 150%;">S</span>elamat datang {{ strtoupper(Auth::user()->name) ?? "" }} di Dashboard UMKM. Dashboard ini dirancang untuk membantu Anda menjangkau lebih banyak pelanggan potensial, meningkatkan eksposur bisnis, dan membangun kepercayaan dengan memberikan informasi yang jelas dan terperinci tentang apa yang Anda tawarkan. Jelajahi menu dan fitur yang tersedia untuk memaksimalkan manfaat dari kehadiran Anda dalam direktori UMKM ini.
                        </article>
                        @endif
                        @endif
        </fieldset>
        @endauth

        <!-- KALENDER -->

        <fieldset class="mb-3 mt-5">
            <legend style="color: black; font-weight: bold;">Calendar</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="calendar calendar-first" id="calendar_first" style="max-width: 750px;">
                        <div class="calendar_header">
                            <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                            <h2></h2>
                            <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="calendar_weekdays rounded" style="max-width: 750px;"></div>
                        <div class="calendar_content rounded" style="background-color: rgb(188, 197, 194); max-width: 750px;"></div>
                    </div>
                </div>
            </div>

        </fieldset>
        <!-- KALENDER -->
    </div>
@endsection

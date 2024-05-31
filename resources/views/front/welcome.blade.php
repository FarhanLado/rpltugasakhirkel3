@extends('layouts.front')

@section('title', 'Mari Kita Saling Berbagi')

@push('css')
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        main {
            text-align: center;
            padding: 20px;
        }
        
        .hero, .second-hero {
            margin: 20px 0;
        }
        
        .hero h1, .second-hero h2 {
            font-size: 2.5em;
        }
        
        .hero p, .second-hero p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .hero .main-button, .second-hero .main-button {
            display: inline-block;
            margin-top: 15px;
        }

        .hero .main-button a, .second-hero .main-button a {
            text-decoration: none;
            color: black; /* Ubah warna tulisan menjadi hitam */
        }
        
        .funds {
            margin: 40px 0;
        }

        .funds h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .funds-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .fund-item {
            text-align: left;
            max-width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .fund-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .fund-item p, .fund-item h3 {
            margin: 10px 0;
        }

        .fund-item button {
            display: block;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .fund-item button a {
            color: white;
            text-decoration: none;
        }

        .fund-item button:hover {
            background-color: #0056b3;
        }
    </style>
@endpush

@section('content')
<main>
    <section class="hero">
        <h1>GALANG DANA</h1>
        <p>Bersatu Mengulurkan Tangan Untuk Kemanusiaan</p>
        <button class="main-button"><a href="{{ url('Galang Dana 1.html') }}">Galang Dana Sekarang</a></button>
    </section>

    <section class="funds">
        <h2>DANA TERSALURKAN</h2>
        <p>Gabung bersama kami dan bantu lebih banyak orang</p>
        <div class="funds-container">
            <div class="fund-item">
                <img src="{{ asset('img/freepik-flood.jpg') }}" alt="Bencana Banjir">
                <p>Terkumpul: 1jt | Goal: 100jt</p>
                <h3>Donasi Bencana Banjir Nusantara</h3>
                <p>Intensitas hujan yang tinggi mengakibatkan bencana banjir di beberapa daerah di Indonesia. Mari bersama mengulurkan tangan untuk meringankan kesulitan daripada saudara sebangsa yang tertimpa musibah.</p>
                <button><a href="{{ url('Donation.html') }}">Donasi Sekarang</a></button>
            </div>
            <div class="fund-item">
                <img src="{{ asset('img/freepik-earthquake.jpg') }}" alt="Bencana Gempa Bumi">
                <p>Terkumpul: 500k | Goal: 50jt</p>
                <h3>Aksi Cepat Bencana Gempa Bumi</h3>
                <p>Gempa Bumi bergerak menyapu pemukiman warga. Dilakukan proses evakuasi dan penyaluran bantuan untuk korban bencana. Mari bersama bergerak untuk membantu sesama.</p>
                <button><a href="{{ url('Donation.html') }}">Donasi Sekarang</a></button>
            </div>
            <div class="fund-item">
                <img src="{{ asset('img/freepik-burning.jpg') }}" alt="Bencana Kebakaran">
                <p>Terkumpul: 1jt | Goal: 20jt</p>
                <h3>Peduli Kebakaran</h3>
                <p>Terjadi kebakaran hebat di pemukiman padat penduduk. Api melahap dengan cepat dan menyambar beberapa rumah warga. Mari ringankan beban korban terdampak dengan berdonasi.</p>
                <button><a href="{{ url('Donation.html') }}">Donasi Sekarang</a></button>
            </div>
        </div>
    </section>

    <section class="second-hero">
        <h2>GALANG DANA</h2>
        <p>Bantu Sesama Berbagi Bahagia</p>
        <button class="main-button"><a href="{{ url('Galang Dana 1.html') }}">Galang Dana Sekarang</a></button>
    </section>
</main>
@endsection

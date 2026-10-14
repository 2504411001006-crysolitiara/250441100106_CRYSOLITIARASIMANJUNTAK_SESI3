@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    <section class="hero">

        <div class="hero-text">

            <p class="hero-label">SELAMAT DATANG DI</p>

            <h2>KENDARAAN Tiara</h2>

            <p class="hero-description">
                Temukan berbagai koleksi kendaraan yang menarik dan
                menambah wawasan. Jelajahi kendaraan favoritmu
                dan nikmati pengalaman penyewaan yang menyenangkan.
            </p>

            <a href="{{ route('buku.index') }}" class="btn">
                Jelajahi Koleksi Kendaraan
            </a>

        </div>
@endsection
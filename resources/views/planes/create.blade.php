<!-- create.blade.php -->
@extends('layouts.app')

@section('title', 'Tambah Data Pesawat')

@section('content')
    <section class="home-section">
        <div class="text">Tambah Data Pesawat</div>
        <div class="form-container">
            <form action="{{ route('planes.store') }}" method="post">
                @csrf
                <label for="nama_pesawat">Nama Pesawat:</label>
                <input type="text" id="nama_pesawat" name="nama_pesawat" required>
                
                <label for="kapasitas">Kapasitas:</label>
                <input type="number" id="kapasitas" name="kapasitas">
                
                <label for="jenis_pesawat">Jenis Pesawat:</label>
                <input type="text" id="jenis_pesawat" name="jenis_pesawat">
                
                <label for="tanggal_pembuatan">Tanggal Pembuatan:</label>
                <input type="date" id="tanggal_pembuatan" name="tanggal_pembuatan">
                
                <label for="nomor_registrasi">Nomor Registrasi:</label>
                <input type="text" id="nomor_registrasi" name="nomor_registrasi">
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Edit Plane')

@section('content')
    <section class="home-section">
        <div class="text">Edit Data Pesawat</div>
        <div class="form-container">
            <form action="{{ route('planes.update', $plane->id_pesawat) }}" method="post">
                @csrf
                @method('PUT')
                <label for="nama_pesawat">Nama Pesawat:</label><br>
                <input type="text" id="nama_pesawat" name="nama_pesawat" value="{{ $plane->nama_pesawat }}"><br>

                <label for="kapasitas">Kapasitas:</label><br>
                <input type="text" id="kapasitas" name="kapasitas" value="{{ $plane->kapasitas }}"><br>

                <label for="jenis_pesawat">Jenis Pesawat:</label><br>
                <input type="text" id="jenis_pesawat" name="jenis_pesawat" value="{{ $plane->jenis_pesawat }}"><br>

                <label for="tanggal_pembuatan">Tanggal Pembuatan:</label><br>
                <input type="text" id="tanggal_pembuatan" name="tanggal_pembuatan" value="{{ $plane->tanggal_pembuatan }}"><br>

                <label for="nomor_registrasi">Nomor Registrasi:</label><br>
                <input type="text" id="nomor_registrasi" name="nomor_registrasi" value="{{ $plane->nomor_registrasi }}"><br><br>

                <input type="submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </section>
@endsection

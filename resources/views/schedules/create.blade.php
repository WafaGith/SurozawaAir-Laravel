<!-- create.blade.php -->
@extends('layouts.app')

@section('title', 'Tambah Data Schedule')

@section('content')
<section class="home-section">
    <div class="text">Tambah Data Schedule</div>
    <div class="form-container">
        <form action="{{ route('schedules.store') }}"method="post">
            @csrf
            <label for="id_pesawat">ID Pesawat</label>
            <select id="id_pesawat" name="id_pesawat" required>
                @foreach($planes as $plane)
                    <option value="{{ $plane->id_pesawat }}">{{ $plane->id_pesawat }} - {{ $plane->id_pesawat }}</option>
                @endforeach
            </select>

            <label for="tanggal_keberangkatan">Tanggal Keberangkatan:</label>
            <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan">

            <label for="waktu_keberangkatan">Waktu Keberangkatan:</label>
            <input type="text" id="waktu_keberangkatan" name="waktu_keberangkatan">

            <label for="bandara_asal">Bandara Asal:</label>
            <input type="text" id="bandara_asal" name="bandara_asal">

            <label for="bandara_tujuan">Bandara Tujuan:</label>
            <input type="text" id="bandara_tujuan" name="bandara_tujuan">

            <button type="submit">Submit</button>
        </form>
    </div>
</section>
@endsection
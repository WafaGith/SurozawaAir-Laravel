@extends('layouts.app')

@section('title', 'Edit Data Schedule')

@section('content')
<section class="home-section">
    <div class="text">Edit Data Schedule</div>
    <div class="form-container">
        <form action="{{ route('schedules.update', $schedules->id_schedule) }}" method="post">
            @csrf
            @method('PUT')

            <label for="id_pesawat">ID Pesawat:</label>
            <select id="id_pesawat" name="id_pesawat" required>
                @foreach($planes as $plane)
                    <option value="{{ $plane->id_pesawat }}" {{ $plane->id_pesawat == $schedules->id_pesawat ? 'selected' : '' }}>{{ $plane->id_pesawat }} - {{ $plane->nama_pesawat }}</option>
                @endforeach
            </select>

            <label for="tanggal_keberangkatan">Tanggal Keberangkatan:</label>
            <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan" value="{{ $schedules->tanggal_keberangkatan }}" required>

            <label for="waktu_keberangkatan">Waktu Keberangkatan:</label>
            <input type="text" id="waktu_keberangkatan" name="waktu_keberangkatan" value="{{ $schedules->waktu_keberangkatan }}" required>

            <label for="bandara_asal">Bandara Asal:</label>
            <input type="text" id="bandara_asal" name="bandara_asal" value="{{ $schedules->bandara_asal }}" required>

            <label for="bandara_tujuan">Bandara Tujuan:</label>
            <input type="text" id="bandara_tujuan" name="bandara_tujuan" value="{{ $schedules->bandara_tujuan }}" required>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
@endsection

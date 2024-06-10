@extends('layouts.app')
@section('title', 'Schedules Data')
@section('content')
<section class="home-section">
        <div class="text">Schedules Data</div>
        <div class="table-container">
            <a href="{{ route('schedules.create') }}" class="btn btn-success">Tambah Data</a>
            <a href="{{ route('cetak') }}" class="btn btn-warning">Cetak Data</a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Schedule</th>
                        <th>ID Pesawat</th>
                        <th>Tanggal Keberangkatan</th>
                        <th>Waktu Keberangkatan</th>
                        <th>Bandara Asal</th>
                        <th>Bandara Tujuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($schedules as $schedule)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $schedule->id_schedule }}</td>
                            <td>{{ $schedule->id_pesawat }}</td>
                            <td>{{ $schedule->tanggal_keberangkatan }}</td>
                            <td>{{ $schedule->waktu_keberangkatan }}</td>
                            <td>{{ $schedule->bandara_asal }}</td>
                            <td>{{ $schedule->bandara_tujuan }}</td>
                            <td>
                            <a href="{{ route('schedules.edit', $schedule->id_schedule) }}"  style="display:inline-block;">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                <form action="{{ route('schedules.destroy', $schedule->id_schedule) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" style="text-align:center;">No data found!</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
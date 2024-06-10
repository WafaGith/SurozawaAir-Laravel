@extends('layouts.app')
@section('title', 'Planes Data')
@section('content')
<section class="home-section">
        <div class="text">Plane Data</div>
        <div class="table-container">
            <a href="{{ route('planes.create') }}" class="btn btn-success">Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pesawat</th>
                        <th>Nama Pesawat</th>
                        <th>Kapasitas</th>
                        <th>Jenis Pesawat</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Nomor Registrasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($planes as $plane)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $plane->id_pesawat }}</td>
                            <td>{{ $plane->nama_pesawat }}</td>
                            <td>{{ $plane->kapasitas }}</td>
                            <td>{{ $plane->jenis_pesawat }}</td>
                            <td>{{ $plane->tanggal_pembuatan }}</td>
                            <td>{{ $plane->nomor_registrasi }}</td>
                            <td>
                                <form action="{{ route('planes.edit', $plane->id_pesawat) }}" method="GET" style="display:inline-block;">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>

                                <form action="{{ route('planes.destroy', $plane->id_pesawat) }}" method="POST" style="display:inline-block;">
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
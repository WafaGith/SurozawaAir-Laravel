@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="widgets">
        <div class="widget">
            <i class='bx bxs-plane widget-icon'></i>
            <h3>Pesawat Aktif</h3>
            <div class="widget-content">
                <p>Pesawat Aktif : 4</p>
                <p>Total Pesawat : 6</p>
            </div>
        </div>
        <div class="widget">
            <i class='bx bx-bell widget-icon'></i>
            <h3>Penerbangan Terbaru</h3>
            <div class="widget-content" style="padding-left: 20px;">
                @if(isset($schedules) && !$schedules->isEmpty())
                    <ul>
                        @foreach ($schedules->take(2) as $schedule)
                            <li>{{ $schedule->bandara_asal }} ke {{ $schedule->bandara_tujuan }} pada tanggal {{ $schedule->tanggal_keberangkatan }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Tidak ada penerbangan terbaru</p>
                @endif
            </div>
        </div>
        <div class="widget">
            <i class='bx bx-task widget-icon'></i>
            <h3>Total Penerbangan</h3>
            <div class="widget-content">
                <p>Total Penerbangan: 11</p>
            </div>
        </div>
    </div>
</section>
@endsection

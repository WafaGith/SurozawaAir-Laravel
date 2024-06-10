<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jadwal</title>
    <style>
        .table-container {
            overflow-x: auto;
            margin-bottom: 20px;
        }

        .table-data {
            width: 100%; /* Mengurangi lebar tabel */
            border-collapse: collapse;
            font-size: 12px; /* Mengurangi ukuran font */
            border: 1px solid #000;
        }

        .table-data th,
        .table-data td {
            padding: 10px; /* Mengurangi padding */
            text-align: center;
            border: 1px solid #000;
        }

        .table-data th {
            background-color: #3572EF;
            color: #fff; /* Ubah warna teks ke putih */
        }

        .table-data tr:nth-child(even) {
            background-color: #ecf9f5;
        }

        .table-data tr:nth-child(odd) {
            background-color: #fdfdfd;
        }

        .table-data tr:hover {
            background-color: #e1f7f3;
        }

        @media screen and (max-width: 600px) {
            .table-data {
                border: 0;
            }

            .table-data thead {
                display: none;
            }

            .table-data td {
                display: block;
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .table-data td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                background-color: #f7f7f7;
            }

            .table-data td:first-child {
                padding-top: 6px; /* Mengurangi padding atas */
            }

            .table-data td:not(:first-child) {
                border-top: 1px solid #000;
            }
        }
    </style>
</head>

<body>
    <div style="text-align: center; border-bottom: 2px solid #000; padding-bottom: 10px; margin-bottom: 0;">
        <h3 style="margin-top: 5px;">Surozawa Airlines</h3>
        <p>Jln. Raya Karanglo Km.2 Malang, Jawa Timur, 65145, Indonesia.</p>
        <p>Telp: (123) 456-7890 | Email: info@surozawaairlines.com</p>
    </div>
    <center>
        <h3>Data Jadwal Penerbangan</h3>
    </center>
    <div class="table-container">
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Schedule</th>
                    <th>ID Pesawat</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Waktu Keberangkatan</th>
                    <th>Bandara Asal</th>
                    <th>Bandara Tujuan</th>
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
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center;">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>

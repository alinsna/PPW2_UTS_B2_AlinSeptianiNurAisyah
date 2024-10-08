@extends('layouts.pemainmu.main')

@section('title', 'Daftar Pemain MU')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data Buku -->
            @foreach ($data_pemainmu as $index => $pemainmu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pemainmu->nama_pemain }}</td>
                    <td>{{ $pemainmu->no_punggung }}</td>
                    <td>{{ $pemainmu->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layout.main')

@section('content')
    <h1>Mahasiswa</h1>
    <table>
        <tr>    
            <th>NPM</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tanggal lahir</th>
            <th>Tempat lahir</th>
            <th>Asal SMA</th>
            <th>Prodi</th>
        </tr>
    @foreach ($mahasiswa as $item)
        <tr>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jk }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ $item->asal_sma }}</td>
            <td>{{ $item->prodi->nama }}</td>
        </tr>
    @endforeach
    </table>
@endsection
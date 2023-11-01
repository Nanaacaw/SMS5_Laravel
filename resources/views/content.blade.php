@extends('template')
@section('title')
<h1>Biodata </h1>
@section('content')
<table class="table table-striped-columns">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>

            <th scope="col">TTL</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>

    {{-- foreach --}}
    {{-- @foreach ($biodatas as $biodata)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$biodata['nama']}}</td>
        <td>{{$biodata['jk']}}</td>
        <td>{{$biodata['ttl']}}</td>
        <td>{{$biodata['alamat']}}</td>
    </tr>
    @endforeach --}}

    @forelse ($biodatas as $biodata)
    <tbody>
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$biodata['nama']}}</td>
            <td>{{$biodata['jk']}}</td>
            <td>{{$biodata['ttl']}}</td>
            <td>{{$biodata['alamat']}}</td>
        </tr>

        @empty
        <h1>Data tidak ditemukan</h1>
        @endforelse
    </tbody>
</table>

@endsection
@extends('form.master')
@section('title')
<header>
    <h2>Hasil Form</h2>
</header>
@endsection
@section('content')
<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $nama}}</td>
    </tr>
    <tr>
        <td>NPM</td>
        <td>{{ $npm }}</td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>{{ $nilai}}</td>
    </tr>
</table>
<a href="/input" class="btn btn-primary">Kembali</a>
@endsection
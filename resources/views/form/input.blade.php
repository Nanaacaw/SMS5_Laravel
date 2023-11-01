@extends('form.master')
@section('title')
<h2>
    Forms
</h2>
@endsection
@section('content')
<form action="/result" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input name="nama" type="text" class="form-control" id="nama" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="inputNpm">NPM</label>
        <input name="npm" type="text" class="form-control" id="inputNpm" placeholder="NPM">
    </div>
    <div class="form-group">
        <label for="inputNilai">Nilai</label>
        <input name="nilai" type="text" class="form-control" id="inputNilai" placeholder="Enter your nilai">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
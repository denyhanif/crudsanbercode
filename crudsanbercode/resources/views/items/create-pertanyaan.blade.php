@extends('adminlte.master')

@section('title', 'Create Pertanyaan')

@section('content')
    <div class="container pt-3">
        <h1 class="mb-3">Buat Pertanyaan</h1>
        <form method="POST" action="/pertanyaan">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <input type="text" class="form-control" id="isi" name="isi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
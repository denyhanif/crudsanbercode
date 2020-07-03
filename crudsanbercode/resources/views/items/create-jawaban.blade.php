@extends('adminlte.master')

@section('title', 'Jawaban Page')

@section('content')
    <div class="container pt-3">
        <h1>{{$pertanyaan->judul}}</h1>
        <p>{{$pertanyaan->isi}}</p>
        <form method="POST" action="/jawaban/{{$pertanyaan->id}}">
            @csrf
            <div class="form-group">
                <label for="isi">Jawab :</label>
                <textarea class="form-control" id="isi" name="isi" style="resize: none;" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
        </form>
        <h2 class="mt-5 mb-3">Jawaban yang serupa : </h2>
        <hr>
        <div class="media-body">
            @foreach ($jawaban as $j)
                <h5 class="mt-0">{{$j->isi}}</h5>
                <hr>
            @endforeach
        </div>
    </div>
    @endsection
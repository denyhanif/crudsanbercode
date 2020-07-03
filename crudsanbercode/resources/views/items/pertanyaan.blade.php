@extends('adminlte.master')

@section('title', 'Pertanyaan')

@section('content')
  <div class="container pt-3">
    <h1>Daftar Pertanyaan</h1>
    <div class="text-right">
      <a href="/pertanyaan/create" class="stretched-link">Punya pertanyaan ? Tanyakan disini</a>
    </div>
    <hr>
    @foreach ($data as $key => $d)
      <div class="media position-relative">
        <div class="media-body">
          <h5 class="mt-0">{{$d->judul}}</h5>
          <p>{{$d->isi}}</p>
          <a href="/jawaban/{{$d->id}}" class="stretched-link">Lihat Jawaban</a>
        </div>
      </div>
      <hr>
      @endforeach
  </div>
  @endsection
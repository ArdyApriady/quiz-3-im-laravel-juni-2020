@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-2">
            <h4 class= "h4 text-gray-900">Judul: {{$artikel->judul}} </h4>
            <p class="text-gray-800">Slug: {{$artikel->slug}}</p>
            <hr>
            <p class="m-3">{{$artikel->isi}}</p>
            @php
                $tags = explode(",",$artikel->tag);
            @endphp
            @foreach ($tags as $tag)
                <a href="#" class="btn btn-success btn-icon-split px-1">{{$tag}}</a>
            @endforeach
        </div>
      </div>
    </div>
</div>
@endsection
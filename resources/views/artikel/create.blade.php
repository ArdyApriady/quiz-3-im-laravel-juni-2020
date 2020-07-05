@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Buat Artikel!</h1>
                </div>
                <form class="user" action="/artikel/" method="POST" >
                    @csrf
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user @error('judul') is-invalid @enderror" value="{{old('judul')}}" name="judul" id="judul`" aria-describedby="title" placeholder="Enter Judul..">
                  </div>
                  <div class="form-group">
                   <textarea name="isi" class="form-control @error('isi') is-invalid @enderror"  id="isi" cols="30" rows="10" placeholder="isi" >{{old('isi')}}</textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user @error('tag') is-invalid @enderror" value="{{old('tag')}}" name="tag" id="tag" placeholder="content, tips, trik, etc..">
                  </div>
                  
                  <hr>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Post
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
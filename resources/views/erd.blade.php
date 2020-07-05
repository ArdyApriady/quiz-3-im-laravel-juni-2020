@extends('layouts.master')
@section('content')
<div class="row  justify-content-center py-4 ">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg p-5">
          <div class="card-body p-0">
            <h4 class="h4 text-gray-900">ERD Portal Blog <a href="/artikel"  class="btn btn-icon-split btn-info px-2"><span>go to Tabel Data Artikel</span></a></h4>
            <hr>
            <img src="{{asset('img/portal-blog.png')}}" alt="erd">
          </div>
        </div>
    </div>
</div>    
    
@endsection
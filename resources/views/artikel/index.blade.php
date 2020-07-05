@extends('layouts.master')
@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tables</h1>
 <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
 @if (session('status'))
 <script>
  Swal.fire({
      title: 'Berhasil!',
      text: '{{session('status')}}',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endif
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
   <div class="card-header py-3">
     <h6 class="m-0 font-weight-bold text-primary">Tabel Data Atikel <a href="/artikel/create"  class="btn btn-icon-split btn-info px-2"><span> Add Artikel</span></a></h6>
   </div>
   <div class="card-body">
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
           <tr>
             <th>Id User</th>
             <th>Judul</th>
             <th>Isi</th>
             <th>Slug</th>
             <th>Tag</th>
             <th>Action</th>
           </tr>
         </thead>
         <tbody>
             @foreach ($artikel as $item)
             <tr>
                 <td>{{$item->users_id}}</td>
                 <td>{{$item->judul}}</td>
                 <td>{{$item->isi}}</td>
                 <td>{{$item->slug}}</td>
                 <td>{{$item->tag}}</td>
                 <td>
                    <div class="container d-flex">
                        <a href="/artikel/{{$item->id}}/edit"><button class="btn-sm btn-warning btn-icon-split px-2">Edit</button></a>
                        <a href="/artikel/{{$item->id}}"><button class="btn-sm btn-default btn-icon-split px-2">Detail</button></a>
                        <form action="/artikel/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-sm btn-danger btn-icon-split px-2"><i class="fas fa-times"></i></button>
                      </form>
                    </div>
                 </td>
            </tr>
            @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
@endsection
@push('script')
<script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('sbadmin2/js/demo/datatables-demo.js')}}"></script>

@endpush
@push('script-swal')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endpush
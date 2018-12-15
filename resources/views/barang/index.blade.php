@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

  } );
</script>

@stop
@extends('layouts.admin')
@section('content')
<div class="row">

  <div class="col-lg-6">
    <br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="{{ route('barang.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah barang</a>
  </div>
  <div class="col-lg-12">
    @if (Session::has('message'))
    <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
    @endif
  </div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">

      <div class="card-body">
        <h4 class="card-title">Data Barang</h4>
        
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>Kode Barang</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($barangs as $data)
              <tr>
                <td class="py-1">
                  {{$data->kode_barang}}</td>
                  <td>
                  <img src="{{asset('assets/img/barang/'.$data->gambar)}}" width="78" height="78"></td>
                  <td>{{$data->nama_barang}}</td>
                  <td>{!!$data->deskripsi!!}</td>
                  <td>{{$data->harga}}</td>
                  <td>{{$data->stok}}</td>
                  <td>{{$data->kategoris->nama_kategori}}</td>
                 <td> {{$data->slug}}</td>
                  <td>
                 <div class="btn-group dropdown">

              <a class="btn btn-warning" href="{{ route('barang.edit',$data->id) }}">Edit</a>&nbsp&nbsp&nbsp&nbsp
              <form method="post" action="{{ route('barang.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <button onclick="return konfirmasi()"type="submit" class="btn btn-danger">Delete</button>
                <script>
                  function konfirmasi(){
                    tanya = confirm("Yakin ingin menghapus data?");
                    if(tanya == true) return true;
                    else return false;
                  }
                </script>
              </form>
            </div>
        </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{--  {!! $barangs->links() !!} --}}
    </div>
  </div>
</div>
</div>
@endsection
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
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="{{ route('cart.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah Cart</a>
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
        <script  src="{{ asset('assets/dist/js/sweetalert.min.js')}}"></script>
        @include('sweet::alert')
        
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Nama User</th>
                <th>Subtotal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($carts as $data)
              <tr>
                
                 <td>{{$data->barangs->nama_barang}}</td>
                 <td>{{$data->jumlah}}</td>
                 <td>{{$data->users->name}}</td>
                 <td>{{$data->subtotal}}</td>
                
                <td>
                 <div class="btn-group dropdown">

              <a class="btn btn-warning" href="{{ route('cart.edit',$data->id) }}">Edit</a>&nbsp&nbsp&nbsp&nbsp
              <form method="post" action="{{ route('cart.destroy',$data->id) }}">
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
      {{--  {!! $carts->links() !!} --}}
    </div>
  </div>
</div>
</div>
@endsection
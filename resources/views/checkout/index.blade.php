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
        <h4 class="card-title">Data CheckOut</h4>
        <script  src="{{ asset('assets/dist/js/sweetalert.min.js')}}"></script>
        @include('sweet::alert')
        
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th>Country</th>
                <th>Address</th>
                <th>Town/City</th>
                <th>District</th>
                <th>Post Code</th>
                <th>Notes</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($checkouts as $data)
              <tr>
                  <td>{{$data->first_name}}</td>
                  <td>{{$data->last_name}}</td>
                  <td>{{$data->company_name}}</td>
                  <td>{{$data->phone_number}}</td>
                  <td>{{$data->email_address}}</td>
                  <td>{{$data->country}}</td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->town}}</td>
                  <td>{{$data->district}}</td>
                  <td>{{$data->post_code}}</td>
                  <td>{{$data->notes}}</td>
                  <td>
                 <div class="btn-group dropdown">

              <a class="btn btn-warning" href="{{ route('checkout.edit',$data->id) }}">Edit</a>&nbsp&nbsp&nbsp&nbsp
              <form method="post" action="{{ route('checkout.destroy',$data->id) }}">
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
      {{--  {!! $checkouts->links() !!} --}}
    </div>
  </div>
</div>
</div>
@endsection
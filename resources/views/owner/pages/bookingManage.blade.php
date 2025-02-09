@extends('owner.layout.index')
@section('content')
@section('title','bookingManage')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Booking management</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama user</th>
                        <th>nama lapangan</th>
                        <th>status</th>
                        <th>payment status</th>
                    
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama user</th>
                        <th>nama lapangan</th>
                        <th>status</th>
                        <th>payment status</th>
                      
                      
                    </tr>
                </tfoot>
                <tbody>
                    {{-- @foreach ($users as $user) --}}
                    <tr>
                        <td scope="row" style="width: 3%;">1</td>
                        <td>rasya</td>
                        <td>pursenif</td>
                        <td>
                            <span class="badge badge-warning badge-sm" >pending</span>
                            <span class="badge badge-success badge-sm" >confirmed</span>
                            <span class="badge badge-danger badge-sm" >cancel</span>
                        </td>
                        <td><span class="badge badge-success badge-sm" >Paid</span>
                            <span class="badge badge-danger badge-sm" >Pending</span>
                        </td>
                       
                       
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
    
          {{-- <div class="mb-3 mr-1">
            {{$users->links('pagination::tailwind')}}
          </div> --}}

        </div>
    </div>
</div>
@endsection
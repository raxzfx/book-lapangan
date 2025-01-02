@extends('admin.layout.index')
@section('title','bookingManage')
@section('content')
<h1>Booking Manage</h1>


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
                         
                        
                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width: 3%;">no</th>
                            <th>nama user</th>
                            <th>nama lapangan</th>
                            <th>status</th>
                         
                          
                          
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($booking as $book)
                        <tr>
                            <td scope="row" style="width: 3%;">{{$loop->iteration}}</td>
                            <td>{{$book->nama_pemesan}}</td>
                            <td>{{$book->lapangan->nama_lapangan}}</td>
                            <td>
                                @if ($book->status === "pending")
                                        <span class="badge badge-warning badge-sm" >pending</span>
                                @elseif($book->status === 'confirmed')
                                  <span class="badge badge-success badge-sm" >confirmed</span>
                                  @elseif ($book->status === 'cancelled')
                                 <span class="badge badge-danger badge-sm" >cancel</span>
                                @endif         
                            </td>
                           
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
              {{-- <div class="mb-3 mr-1">
                {{$users->links('pagination::tailwind')}}
              </div> --}}

            </div>
        </div>
    </div>
@endsection
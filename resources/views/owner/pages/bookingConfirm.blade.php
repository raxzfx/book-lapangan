@extends('owner.layout.index')
@section('content')
@section('title','Booking confirm')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Booking confirm</h6>
    </div>
    <div class="card-body">
        <!-- Pencarian Form -->
        <form action="{{ route('owner.pages.search') }}" method="GET" class="mb-3">
            <div class="form-row">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama pemesan atau kode booking" value="{{ request()->search }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary ">Cari</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama user</th>
                        <th>nama lapangan</th>
                        <th>kode booking</th>
                        <th>total harga</th>
                        <th>status</th>
                        <th>konfirmasi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama user</th>
                        <th>nama lapangan</th>
                        <th>kode booking</th>
                        <th>total harga</th>
                        <th>status</th>
                        <th>konfirmasi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($booking as $book)
                    <tr>
                        <td scope="row" style="width: 3%;">{{$loop->iteration}}</td>
                        <td>{{$book->nama_pemesan}}</td>
                        <td>{{$book->Lapangan->nama_lapangan}}</td>
                        <td>{{$book->kode_booking}}</td>
                        <td>
                            @if($book->lapangan)
                            Rp {{ number_format($book->lapangan->harga_perjam * $book->durasi, 0, ',', '.') }}
                            @else
                            Harga tidak tersedia
                            @endif
                        </td>
                        <td>
                            @if ($book->status === 'pending')
                                 <span class="badge badge-warning badge-sm">pending</span>
                            @elseif ($book->status === 'confirmed')
                               <span class="badge badge-success badge-sm">confirmed</span>
                            @elseif ($book->status === 'cancelled')
                                <span class="badge badge-danger badge-sm">cancel</span>
                            @endif
                        </td>
                        <td>
                            @if($book->status === 'pending')
                            <form action="{{ route('owner.form.confirm', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">confirm</button>
                            </form>
                            <form action="{{ route('owner.form.cancel', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                            </form>
                            @else
                                @if($book->status === 'confirmed')
                                    <button class="btn btn-success btn-sm" disabled>Confirmed</button>
                                    <button class="btn btn-danger btn-sm" disabled>Cancelled</button>
                                @elseif($book->status === 'cancelled')
                                    <button class="btn btn-success btn-sm" disabled>Confirmed</button>
                                    <button class="btn btn-danger btn-sm" disabled>Cancelled</button>
                                @endif
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

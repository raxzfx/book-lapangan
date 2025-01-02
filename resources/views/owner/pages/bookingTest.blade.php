@extends('owner.layout.index')
@section('title', 'BookingTest')
@section('content')
<a href="{{route('owner.form.createTestBooking')}}" class="btn btn-primary btn-icon-split mb-2 ">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">add data</span>
</a>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Booking test</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama pemesan</th>
                        <th>nama lapangan</th>
                        <th>durasi</th>
                        <th>tanggal booking</th>
                        <th>waktu mulai</th>
                        <th>waktu selesai</th>
                        <th>harga</th>
                        <th>kode booking</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>nama pemesan</th>
                        <th>nama lapangan</th>
                        <th>durasi</th>
                        <th>tanggal booking</th>
                        <th>waktu mulai</th>
                        <th>waktu selesai</th>
                        <th>harga</th>
                        <th>kode booking</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($booking as $book)
                    <tr>
                        <td scope="row" style="width: 3%;">{{$loop->iteration}}</td>
                        <td>{{$book->nama_pemesan}}</td>
                        <td>
                            @if($book->Lapangan)
                            {{$book->Lapangan->nama_lapangan}}
                        @else
                            Nama lapangan tidak tersedia
                        @endif
                        </td>
                        <td>
                            {{$book->durasi}}
                            jam
                        </td>
                        <td>
                            {{$book->tanggal_booking}}
                        </td>
                        <td>
                            {{$book->waktu_mulai}}
                        </td>
                        <td>
                             {{$book->waktu_selesai}}
                        </td>
                        <td> Rp.
                            @if($book->lapangan)
                                {{ number_format($book->total_harga, 0, ',', '.') }}
                            @else
                                Harga tidak tersedia
                            @endif
                        </td>
                       <td>
                        {{$book->kode_booking}}
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
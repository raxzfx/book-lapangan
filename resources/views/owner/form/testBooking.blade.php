@extends('owner.layout.index')
@section('title','test booking')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css">

<h1>test booking</h1>       

<!-- Menampilkan pesan error jika ada -->
@if(session('error'))
    <div class="card bg-danger text-white mb-3">
        <div class="card-body">
           {{ session('error') }}
        </div>
    </div>
@endif

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class="g-3 needs-validation" action="{{route('owner.form.storeTestBooking')}}" method="POST" novalidate>

            @csrf


            


            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">Nama Pemesan</label>
              <input type="text" class="form-control" id="validationCustom01" value="" name="nama_pemesan" required>
              
              <div class="valid-feedback">
                Success!
              </div>
              <div class="invalid-feedback">
                Silakan masukkan nama Anda terlebih dahulu!
              </div>
            </div>

            <div class="col-md-12 mb-2">
                <label for="kategori_lapangan" class="form-label">Nama Lapangan</label>
                <select class="form-control" id="kategori_lapangan" name="lapangan_id" required>
                  <option value="" disabled selected>Pilih lapangan yang Anda inginkan</option>
                  @foreach($lapang as $lapang)
                    <option value="{{$lapang->id}}">{{$lapang->nama_lapangan}}</option>
                  @endforeach
                </select>
                <div class="valid-feedback">
                  Success!
                </div>
                <div class="invalid-feedback">
                  Silakan pilih kategori lapangan!
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <label for="kategori_lapangan" class="form-label">Durasi</label>
                <select class="form-control" id="kategori_lapangan" name="durasi" required>
                  <option value="" disabled selected>Pilih durasi yang Anda inginkan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <div class="valid-feedback">
                  Success!
                </div>
                <div class="invalid-feedback">
                  Silakan pilih durasi yang Anda inginkan!
                </div>
            </div>

            <!-- Tanggal Booking -->
            <div class="col-md-12 mb-2">
                <label for="tanggal_booking" class="form-label">Tanggal Booking</label>
                <input type="text" class="form-control" id="tanggal_booking" name="tanggal_booking" placeholder="Pilih Tanggal" required>
                <div class="valid-feedback">
                  Success!
                </div>
                <div class="invalid-feedback">
                  Silakan pilih tanggal booking!
                </div>
            </div>

            <!-- Waktu Mulai -->
            <div class="col-md-12 mb-2">
                <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" required>
                <div class="valid-feedback">
                  Success!
                </div>
                <div class="invalid-feedback">
                  Silakan pilih waktu mulai!
                </div>
            </div>

            <!-- Waktu Selesai -->
            <div class="col-md-12 mb-2">
                <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" required>
                <div class="valid-feedback">
                  Success!
                </div>
                <div class="invalid-feedback">
                  Silakan pilih waktu selesai!
                </div>
            </div>

          

            <div class="col-12 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>

<!-- Datepicker Initialization -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#tanggal_booking", {
        dateFormat: "Y-m-d", // Format tanggal: YYYY-MM-DD
    });
</script>


<script src="{{asset('js/formValidate.js')}}"></script>
@endsection

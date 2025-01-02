@extends('admin.layout.index')
@section('title','add user')
@section('content')
<h1>add lapangan</h1>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class=" g-3 needs-validation" action="{{route('admin.form.storeLapangan')}}" method="POST" enctype="multipart/form-data" novalidate>

            @csrf
            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">nama lapangan</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama_lapangan" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
                silahkan masukan nama anda terlebih dahulu!
              </div>
            </div>

             <!-- Kategori Lapangan - Dropdown -->
            <div class="col-md-12 mb-2">
              <label for="kategori_lapangan" class="form-label">Kategori Lapangan</label>
              <select class="form-control" id="kategori_lapangan" name="kategori_lapangan" required>
                <option value="" disabled selected>Pilih kategori lapangan</option>
                @foreach($kategoris as $kate)
                  <option value="{{$kate->id}}">{{$kate->kategori}}</option>
                @endforeach
              </select>
              <div class="valid-feedback">
                Success!
              </div>
              <div class="invalid-feedback">
                Silakan pilih kategori lapangan!
              </div>
            </div>
               <!-- Tambahan Form untuk Upload Gambar -->
               <div class="col-md-12 mb-2">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                <div class="valid-feedback">Success!</div>
                <div class="invalid-feedback">Silakan unggah gambar!</div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">kota</label>
              <input type="text" class="form-control" id="validationCustom01" name="kota" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
                silahkan masukan nama anda terlebih dahulu!
              </div>
            </div>

            <div class="col-md-12 mb-2 ">
              <label for="validationCustomUsername" class="form-label">lokasi</label>
              <div class="input-group has-validation"> 
                <textarea class="form-control" name="lokasi" aria-label="With textarea"></textarea>
                <div class="valid-feedback">
                    success!
                  </div>
                <div class="invalid-feedback">
                 silahkan masukan no telp anda!
                </div>
              </div>
            </div>

            <div class="col-md-12 mb-2 ">
              <label for="validationCustomUsername" class="form-label">deskripsi</label>
              <div class="input-group has-validation"> 
                <textarea class="form-control" name="deskripsi" aria-label="With textarea"></textarea>
                <div class="valid-feedback">
                    success!
                  </div>
                <div class="invalid-feedback">
                 silahkan masukan no telp anda!
                </div>
              </div>
            </div>

            <div class="col-md-12 mb-2 ">
              <label for="validationCustomUsername" class="form-label">harga perjam</label>
              <div class="input-group has-validation"> 
             <input type="text" class="form-control" id="harga_perjam" name="harga_perjam" required>

                <div class="valid-feedback">
                    success!
                  </div>
                <div class="invalid-feedback">
                 silahkan masukan no telp anda!
                </div>
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
<script src="{{asset('js/formValidate.js')}}"></script>
@endsection
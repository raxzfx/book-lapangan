@extends('admin.layout.index')
@section('title','add user')
@section('content')
<h1>edit lapangan</h1>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class=" g-3 needs-validation" action="{{route('admin.form.updateLapangan',$lapang->id)}}" method="POST" enctype="multipart/form-data" novalidate>

            @csrf
            @method('PUT')
            
            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">nama lapangan</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama_lapangan" value="{{$lapang->nama_lapangan}}" required>
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
                <option value="" disabled>Pilih kategori lapangan</option>
                @foreach($kategori as $kate)
                  <option value="{{ $kate->id }}" {{ $lapang->kategori_id == $kate->id ? 'selected' : '' }}>
                    {{ $kate->kategori }}
                  </option>
                @endforeach
              </select>
              <div class="valid-feedback">
                Success!
              </div>
              <div class="invalid-feedback">
                Silakan pilih kategori lapangan!
              </div>
            </div>

               <!-- Menampilkan gambar lama -->
            <div class="col-md-12 mb-2">
              <label for="image" class="form-label">Gambar</label>
              <div>
                  <img src="{{ asset('uploads/lapangan/' . $lapang->image) }}" alt="Image" style="width: 150px; height: 100px;">
              </div>
              <div>
                  <input type="file" class="form-control mt-2" id="image" name="image" accept="image/*">
                  <div class="valid-feedback">
                      Success!
                  </div>
                  <div class="invalid-feedback">
                      Silakan unggah gambar baru jika diperlukan!
                  </div>
              </div>
          </div>


            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">kota</label>
              <input type="text" class="form-control" id="validationCustom01" name="kota" value="{{$lapang->kota}}" required>
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
                <textarea class="form-control" name="lokasi"  aria-label="With textarea" required >{{ $lapang->lokasi }}</textarea>
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
                <textarea class="form-control" name="deskripsi" aria-label="With textarea">{{$lapang->deskripsi}}</textarea>
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
                <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="harga_perjam" value="{{$lapang->harga_perjam}}" required>
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
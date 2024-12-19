@extends('admin.layout.index')
@section('title','add owner lapang')
@section('content')
<h1>edit owner lapangan</h1>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class=" g-3 needs-validation" action="{{route('admin.form.updateOwner',$ownerLapangs->id)}}" method="POST"  novalidate>

            @csrf
            @method('PUT')

            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">nama</label>
              <input type="text" class="form-control" id="validationCustom01" value="{{$ownerLapangs->nama}}" name="nama" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
                silahkan masukan nama anda terlebih dahulu!
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <label for="validationCustom02" class="form-label">email</label>
              <input type="email" class="form-control" id="validationCustom02" value="{{$ownerLapangs->email}}" name="email" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
               silahkan masukan email anda!
              </div>
            </div>
            <div class="col-md-12 mb-2 ">
              <label for="validationCustomUsername" class="form-label">no telp</label>
              <div class="input-group has-validation">
                
                <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{$ownerLapangs->no_telp}}" name="no_telp" required>
                <div class="valid-feedback">
                    success!
                  </div>
                <div class="invalid-feedback">
                 silahkan masukan no telp anda!
                </div>
              </div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="kategori_lapangan" class="form-label">Lapangan</label>
              <select class="form-control" id="kategori_lapangan" name="nama_lapangan" required>
                <option value="" disabled selected>Pilih lapangan</option>
                @foreach($lapangan as $lapang)
                  <option value="{{$lapang->id}}" {{$ownerLapangs->nama_lapangan == $lapang->id ? 'selected' : ''}}>
                    {{$lapang->nama_lapangan}}
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
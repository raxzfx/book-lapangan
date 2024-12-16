@extends('admin.layout.index')
@section('title','add user')
@section('content')
<h1>edit fasilitas lapangan</h1>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class=" g-3 needs-validation" action="{{route('admin.form.updateFasilitas',[$fasilitas->id])}}" method="POST"  novalidate>

            @csrf
            @method('PUT')

            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">fasilitas</label>
              <input type="text" class="form-control" id="validationCustom01" value="{{$fasilitas->fasilitas}}" name="fasilitas" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
                silahkan masukan nama anda terlebih dahulu!
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
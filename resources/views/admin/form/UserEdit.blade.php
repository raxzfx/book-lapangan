@extends('admin.layout.index')
@section('title','add user')
@section('content')
<h1>edit user</h1>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  
    <div class="card-body">
        <form class=" g-3 needs-validation" action="{{route('admin.form.update', $user->id)}}" method="POST"  novalidate>

            @csrf
            @method('put')

            <div class="col-md-12 mb-2">
              <label for="validationCustom01" class="form-label">nama</label>
              <input type="text" class="form-control" id="validationCustom01" value="{{$user->name}}" name="name" required>
              <div class="valid-feedback">
                success!
              </div>
              <div class="invalid-feedback">
                silahkan masukan nama anda terlebih dahulu!
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <label for="validationCustom02" class="form-label">email</label>
              <input type="email" class="form-control" id="validationCustom02" value="{{$user->email}}" name="email" required>
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
                
                <input type="number" class="form-control" id="validationCustomUsername" value="{{$user->no_telp}}" aria-describedby="inputGroupPrepend" name="no_telp" required>
                <div class="valid-feedback">
                    success!
                  </div>
                <div class="invalid-feedback">
                 silahkan masukan no telp anda!
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="owner_lapang" {{ $user->role === 'owner_lapang' ? 'selected' : '' }}>Owner Lapang</option>
                </select>
                <div class="valid-feedback">
                 success!
                </div>
                <div class="invalid-feedback">
               silahkan pilih role yang tepat!
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
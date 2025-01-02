@extends('admin.layout.index')
@section('title','users')
@section('content')
<h1 class="mb-3">user</h1>

<!--add data-->    
<a href="{{route('admin.form.create')}}" class="btn btn-primary btn-icon-split mb-2 ">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">add data</span>
</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 3%;">no</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>role</th>
                            <th>action</th>
                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width: 3%;">no</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>role</th>
                            <th>action</th>
                          
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td scope="row" style="width: 3%;">{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td> 
                                <!--edit-->
                                <a href="{{route('admin.form.UserEdit',$user->id)}}" class="btn btn-success btn-circle ">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!--delete-->
                                <form action="{{ route('admin.form.UserDelete', $user->id) }}" method="POST" class="form-delete d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-circle btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
           
                {{$users->links('')}}
             

            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Menangani tombol delete dengan SweetAlert2
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah form submit langsung
    
                // Menampilkan konfirmasi dengan SweetAlert2
                Swal.fire({
                    title: "Apa kamu yakin?",
                    text: "Kamu akan menghapus data ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Delete!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika user mengonfirmasi, submit form untuk menghapus data
                        this.closest('form').submit(); // Menyubmit form
                    }
                });
            });
        });
    
    </script>
    @endpush
    
@endsection
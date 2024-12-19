@extends('admin.layout.index')
@section('title','fasilitas')
@section('content')
<h1>fasilitas</h1>
<!--add data-->    
<a href="{{route('admin.form.createFasilitas')}}" class="btn btn-primary btn-icon-split mb-2 ">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">add data</span>
</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data fasilitas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 3%;">no</th>
                            <th>fasilitas</th>
                            <th>action</th>
                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width: 3%;">no</th>
                            <th>fasilitas</th>
                            <th>action</th>
                          
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ( $fasilitas as $item )

                        <tr>
                            <td style="width: 3%;">{{$loop->iteration}}</td>
                            <td>{{$item->fasilitas}}</td>
                            <td> 
                                <!--edit-->
                                <a href="{{route('admin.form.editFasilitas', $item->id)}}" class="btn btn-success btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!--delete-->
                                <form action="{{ route('admin.form.deleteFasilitas', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-circle btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                        </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

                {{ $fasilitas->links() }}

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
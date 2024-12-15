@extends('admin.layout.index')
@section('title','lapangan')
@section('content')
<h1>lapangan</h1>
<!--add data-->    
<a href="#" class="btn btn-primary btn-icon-split mb-2 ">
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
                            <th>no</th>
                            <th>nama lapangan</th>
                            <th>kategori</th>
                            <th>fasilitas</th>
                            <th>lokasi</th>
                            <th>harga/jam</th>
                            <th>action</th>
                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>no</th>
                            <th>nama lapangan</th>
                            <th>kategori</th>
                            <th>fasilitas</th>
                            <th>lokasi</th>
                            <th>harga/jam</th>
                            <th>action</th>
                          
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>raul ajajajajararararararararar</td>
                            <td>raul@gmail.com</td>
                            <td>0808080808</td>
                            <td>bandung</td>
                            <td>500.000</td>
                            <td> 
                                <!--edit-->
                                <a href="#" class="btn btn-success btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!--delete-->
                                  <a href="#" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
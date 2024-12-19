@extends('admin.layout.index')
@section('title','dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>


     <!-- Content Row -->
     <div class="row">

        <!-- Card 1: Jumlah User -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               <a href="{{route('admin.pages.users')}}" class="text-primary text-decoration-none">jumlah user</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Card 2: Jumlah Lapangan -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                             <a href="{{route('admin.pages.lapangan')}}" class="text-success text-decoration-none">jumlah lapangan</a>   </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-futbol fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Card 3: Jumlah Owner Lapang -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               <a href="{{route('admin.pages.ownerLapang')}}" class="text-warning text-decoration-none"> jumlah owner Lapang</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Content Row -->
@endsection
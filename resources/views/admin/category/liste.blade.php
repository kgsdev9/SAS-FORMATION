@extends('admin.master.master')

@section('admin')

<div class="main-content">

    <div class="page-content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between gy-3">
                                <div class="col-lg-3">
                                    <div class="search-box" >
                                        <input type="text" class="form-control search" placeholder="Search for job categories...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="d-md-flex text-nowrap gap-2">
                                        <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i>Nouvelle Catégorie </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
            @foreach ($category as $value )
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center py-4">
                            <lord-icon src="{{asset('assets/images/avatar/avatar-17.jpg')}}" trigger="hover" colors="primary:#405189" target="div" style="width:50px;height:50px"></lord-icon>
                            <a href="#!" class="stretched-link">
                                <h5 class="mt-4">{{$value->name}}</h5>
                            </a>
                            <p class="text-muted mb-0">Nombre de Formation  {{count($value->courses)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        </div>


    </div>

</div>

@endsection

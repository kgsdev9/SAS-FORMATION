
@extends('admin.master.master')

@section('admin')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Bienvenue Admin </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau </a></li>
                                <li class="breadcrumb-item active">De Gestion </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="d-flex flex-column h-100">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Formation  </p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{count($courses)}}">0</span></h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                             {{-- <img src="{{asset('assets/images/avatar/avatar-11.jpg')}}" alt="" style="height: 40px;"> --}}
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!--end col-->
                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Formateur </p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{$teachers}}">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Catégories</p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{$categories}}">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Utilisateurs </p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{$users}}">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Coupons </p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{$coupons}}">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!--end col-->
                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card-animate overflow-hidden">
                                    <div class="position-absolute start-0" style="z-index: 0;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                            <style>
                                                .s0 {
                                                    opacity: .05;
                                                    fill: var(--vz-success)
                                                }
                                            </style>
                                            <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                        </svg>
                                    </div>
                                    <div class="card-body" style="z-index:1 ;">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Commande </p>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="{{$orders}}">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Liste des cours </h4>
                            <div class="flex-shrink-0">
                                <a href="{{route('courses.index')}}" class="btn btn-soft-primary btn-sm">Consulter d'autres cours<i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered table-hover align-middle table-nowrap mb-0" id="example">
                                    <tbody>
                                        @forelse ($teacherRecently as $value )
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs me-2 flex-shrink-0">
                                                        <div class="avatar-title bg-soft-secondary rounded">
                                                            <img src="assets/images/companies/img-1.png" alt="" height="16">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-0">{{$value->title}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                {{-- <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> --}}
                                                {{$value->prix}} €
                                            </td>
                                            <td>
                                                    @if($value->published=== 0)
                                                    <span class="badge badge-soft-warning text-uppercase">non publié</span>
                                                    @elseif($value->published===1)
                                                    <span class="badge badge-soft-success text-uppercase"> publié</span>
                                                    @endif
                                                {{-- <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                    </li>
                                                </ul> --}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin.course.show', $value->id)}}" target="_blank" class="btn btn-link btn-sm">Voir Plus  <i class="ri-arrow-right-line align-bottom"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <span>Aucun formateur recemment ajoutés</span>
                                        @endforelse



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div> <!-- .card-->
                </div><!--end col-->
            </div><!--end row-->




            <div class="row">
                <div class="col-xxl-8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent utilisateurs </h4>
                            {{-- <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-info btn-sm">
                                    <i class="ri-file-list-3-line align-bottom"></i> Generate Report
                                </button>
                            </div> --}}
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0" id="example">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">Nom d'utilisateur</th>
                                            <th scope="col">Email </th>
                                            <th scope="col">Daté de création</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allUsers as $value )
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                <span class="text-success">{{$value->email}}</span>
                                            </td>
                                            <td>{{$value->created_at}}</td>
                                        </tr><!-- end tr -->
                                        @endforeach
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .card-->
                </div> <!-- .col-->
                <!-- end col -->
            </div> <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> KGS DEV
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                     UNE PRODUCTION DE KGS DEV TECHNOLOGIE
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


@endsection

@extends('layout.layout')

@section('content')

<main>

    <section class="py-4 py-lg-6 bg-primary">
      <div class="container">
        <div class="row">
          <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
            <div class="d-lg-flex align-items-center justify-content-between">
              <!-- Content -->
              <div class="mb-4 mb-lg-0">
                <h1 class="text-white mb-1">Nouvel Fomation </h1>
                <p class="mb-0 text-white lead">
                  Renseignez breivement le cours
                </p>
              </div>
              <div>
                <a href="#" class="btn btn-white">Retour au cours </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Content -->
    <section class="pb-12">
      <div class="container">
        <div id="courseForm" class="bs-stepper">
          <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
              <!-- Stepper Button -->

              <!-- Stepper content -->
              <div class="bs-stepper-content mt-5">
                <div class="card card-bordered shadow-none mb-3  ">

                    <!-- Card body -->
                    <div class="card-body p-6">
                      <div class="mb-4">
                        <h2 class="mb-0">FORMULAIRE D'ENREGISTREMENT </h2>

                      </div>
                      <!-- row -->

                      <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <div class="mb-4 col-12 col-md-12">
                          <!-- label -->
            <label class="form-label" for="lname">Title de la formation  <span class="text-danger">*</span></label>
                          <!-- input -->
                          <input type="text" id="lname" class="form-control" placeholder="APPRENDRE LARAVEL " name="title" value="{{old('title')}}">
                        </div>

                        <div class="mb-4 col-12 col-md-12">
                          <!-- label -->
                          <label class="form-label" for="email">Prix  <span class="text-danger">*</span></label>
                          <!-- input -->
                          <input type="number" id="email" class="form-control" placeholder="450" name="prix" value="">
                          <!-- label -->
                        </div>
                        <div class="mb-4 col-12 col-md-12">
                          <!-- label -->
                          <label class="form-label" for="phone">Catégories <span class="text-danger">*</span></label>
                          <!-- input group -->
                          <div class="input-group mb-1">
                                <select name="category_id" id="" class="form-control">

                                    @foreach($categoryAll as $value )
                                    <option value="{{$value->id}}"> {{$value->name}}</option>
                                    @endforeach


                                </select>

                          </div>
                          <!-- text -->
                        </div>


                        <div class="mb-4 col-12 col-md-12">
                            <!-- label -->
                            <label class="form-label" for="phone">Niveau <span class="text-danger">*</span></label>
                            <!-- input group -->
                            <div class="input-group mb-1">
                                  <select name="level_id" id="" class="form-control">

                                      @foreach($levelAll as $value )
                                      <option value="{{$value->id}}"> {{$value->name}}</option>
                                      @endforeach


                                  </select>

                            </div>
                            <!-- text -->
                          </div>

                          <div class="mb-4 col-12 col-md-12">
                            <!-- label -->
                            <label class="form-label" for="phone">Demo de la formation  <span class="text-danger">*</span></label>
                            <!-- input group -->
                            <div class="input-group mb-1">
                               <input type="text" class="form-control" name="url_video" value="{{old('url_video')}}">
                            </div>

                          </div>

                        <div class="mb-4 col-12 col-md-12">
                          <!-- radio -->
                          <label class="form-label" for="resume">Image de la formation  </label>
                          <div class="input-group mb-1">
                            <input type="file" name="image" class="form-control" id="resume">
                            <label class="input-group-text" for="resume">Télecharger</label>
                          </div>
                          <!-- text -->
                          <span class="fs-6">Upoader une image qui permettra de décrire la formation  </span>
                        </div>

                        <div class="mb-4 col-12 col-md-12">
                          <!-- label -->
                          <label class="form-label" for="lname">Décrivez  briévement la formation   <span class="text-danger">*</span></label>
                          <!-- input -->
                      <textarea name="description" class="form-control" id="" cols="30" rows="5"> </textarea>
                        </div>


                        <div class="mb-4 col-12 col-md-12">
                            <!-- label -->
                            <label class="form-label" for="email">Tags  <span class="text-danger">*</span></label>

                            <select name="tags[]" multiple id="" class="form-control">
                                <option value="">Select Tags </option>
                            </select>

                          </div>




                        <div class="col-12">
                          <!-- Button -->
                          <button class="btn btn-primary" type="submit">
                        Enregistrer la formation
                          </button>
                        </div>
                      </div>
                  </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection


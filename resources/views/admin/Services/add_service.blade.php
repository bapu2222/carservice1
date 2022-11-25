@extends('global.master')
@section('customCss')
    <style>
        .select2-container--default .select2-selection--single {
            height: 40px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 39px !important;
        }
    </style>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add services</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error </strong> {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card card-info">

                @if(isset($services->id))
                    <form action="{{route('services.update',['service'=>$services->id])}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @else
                            <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @endif
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="categories_id" value="1">
                                    <div class="form-group d-none">
                                        <label>Minimal</label>
                                        <select name="categories_id1"
                                                class=" form-control select2bs4"
                                                style="width: 100%;" aria-hidden="true">
                                            <option value="">Select Categories</option>
                                            @foreach ($categ as $c)
                                                <option value="{{ $c->id}}"
                                                        {{(isset($services->categories_id) &&  $services->categories_id == $c->id) ? " selected='selected'": "" }}>
                                                    {{$c->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="service_name">Service Name</label>
                                        <input type="text" class="form-control" id="service_name" name="name"
                                               placeholder="Name"
                                               value="{{isset($services->name) ? $services->name : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="service_description"> Service Description</label>
                                        <input type="text" class="form-control" id="service_description"
                                               name="description"
                                               placeholder=" Service Description"
                                               value="{{isset($services->description) ? $services->description : ''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="service_type"> Service Type</label>

                                        <select name="service_type"
                                                class=" form-control select2bs4"
                                                style="width: 100%;" aria-hidden="true">
                                            <option value="">Select Service Type</option>
                                            @foreach ($service_Types as $key => $service_Type)
                                                <option value="{{$key}}"
                                                        {{(isset($services->type) &&  $services->type == $key) ? " selected='selected'": "" }}>
                                                    {{$service_Type}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="service_price"> Service Price</label>
                                        <input type="text" class="form-control" id="service_price"
                                               name="price"
                                               placeholder="Service Price"
                                               value="{{isset($services->price) ? $services->price : ''}}">
                                    </div>


                                    <div class="form-group">
                                        <label for="service_image">Service Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="services_image" class="custom-file-input"
                                                       id="service_image">
                                                <label class="custom-file-label" for="service_image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                    @if(isset($services->services_image))
                                        <a data-fancybox="gallery"
                                           href="{{'/img/servicesPhoto/'.$services->services_image}}">
                                            <img class="rounded"
                                                 src="{{'/img/servicesPhoto/'.$services->services_image}}"
                                                 width="100px"/>
                                        </a>
                                    @endif
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit"
                                            class="btn btn-info">{{isset($services->id) ?'Edit':'Add'}}</button>
                                    <a href="{{ route('services.index') }}">
                                        <button class="btn btn-default float-right">Cancel</button>
                                    </a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
            </div>
        </div>
    </div>
@stop
@section('customScript')
    <script>
        $(function () {
            $('.select2bs4').select2();

            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                textContent: 'center',
                showConfirmButton: false,
                timer: 4000
            });

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            toastr.error('{{$error}}');
            @endforeach
            @endif

        });
    </script>

@stop

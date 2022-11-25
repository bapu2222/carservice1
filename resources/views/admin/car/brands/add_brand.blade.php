@extends('global.master')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Add Brand</h1>
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

                @if($editMode == 'on')
                    <form action="{{route('brand.update',['brand'=>$brand->id])}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @else
                            <form action="{{route('brand.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @method('POST')
                                @endif
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="brand_name">Brand Name</label>

                                        <input type="text" class="form-control" id="category_name"
                                               name="name"
                                               placeholder="Name"
                                               value="{{isset($brand->name) ? $brand->name : ''}}">
                                    </div>


                                    <div class="form-group">
                                        <label>Car Models</label>
                                        <select class="car-models" id="car-model-id" multiple=""
                                                data-placeholder="Select a State"
                                                name="car_models[]"
                                                style="width: 100%;">
                                            @foreach($models as $name => $id)
                                                <option value="{{$id}}">{{$name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">
                                        {{isset($brand->id) ? 'Edit':'Add'}}

                                    </button>
                                    <a href="{{ route('brand.index') }}">
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
            $('.car-models').select2({
                tags: true,
            });

            @if($editMode == 'on')
            $('.car-models').select2({
                tags: true,
            }).val({{$modelName}}).change();
                    @endif

            var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    textContent: 'center',
                    showConfirmButton: false,
                    timer: 5000
                });

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            toastr.error('{{$error}}');
            @endforeach
            @endif


        })
    </script>

@stop

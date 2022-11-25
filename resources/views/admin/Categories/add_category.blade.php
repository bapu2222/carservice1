@extends('global.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Category</h1>
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
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                </div>
                @if(isset($categories->id))
                    <form action="{{route('categories.update',['category'=>$categories->id])}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @else
                            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @endif
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>

                                        <input type="text" class="form-control" id="category_name" name="name"
                                               placeholder="Name"
                                               value="{{isset($categories->name) ? $categories->name : ''}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="category_image">Category
                                            Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="categories_image" class="custom-file-input"
                                                       id="category_image">
                                                <label class="custom-file-label" for="category_image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                    @if(isset($categories->categories_image))
                                        <a data-fancybox="gallery"
                                           href="{{'/img/categoriesPhoto/'.$categories->categories_image}}">
                                            <img class="rounded"
                                                 src="{{'/img/categoriesPhoto/'.$categories->categories_image}}"
                                                 width="100px"/>
                                        </a>
                                    @endif
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Save</button>
                                    <a href="{{ route('categories.index') }}">
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

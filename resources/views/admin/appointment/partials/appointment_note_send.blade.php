<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Send Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['method'=>'post', 'route' => ['appointment.note'],'id' => 'appointment-accept-note', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                <div class="row">
                    <div class="col-md-5">
                        {!! Form::label('name',"Service Name", ['class' => 'form-label']) !!}
                        {!! Form::text('name[]', null, ['class' => 'form-control-sm form-control', 'id' =>'name', 'placeholder' => "Enter Service Name"]) !!}
                    </div>
                    <div class="col-md-5">
                        {!! Form::label('price',"Price", ['class' => 'form-label']) !!}
                        {!! Form::text('price[]', null, ['class' => 'form-control-sm form-control', 'id' =>'name', 'placeholder' => "Enter price"]) !!}
                    </div>
                </div>
                <div  class="insert-data">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::label('message',"Message", ['class' => 'form-label']) !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control-sm form-control', 'id' =>'name', 'placeholder' => "Enter Custom Messages",'rows'=>"4"]) !!}
                    </div>
                </div>
                {!! Form::hidden('id','',['id'=>"selected_id"]) !!}
                <button type="button" class="btn btn-outline-dark btn-sm mt-2 add-item">Add</button>

                {!! Form::close() !!}
            </div>
            <div class="master-data d-none">
            <div class="row">
                <div class="col-md-5">
                    {!! Form::label('name',"Service Name", ['class' => 'form-label']) !!}
                    {!! Form::text('name[]', null, ['class' => 'form-control-sm form-control', 'id' =>'name', 'placeholder' => "Enter Service Name"]) !!}
                </div>
                <div class="col-md-5">
                    {!! Form::label('price',"Price", ['class' => 'form-label']) !!}
                    {!! Form::text('price[]', null, ['class' => 'form-control-sm form-control', 'id' =>'name', 'placeholder' => "Enter price"]) !!}
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-outline-dark btn-sm remove-item" style="margin-top: 32px">Remove</button>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save-note">Save changes</button>
            </div>
        </div>
    </div>
</div>
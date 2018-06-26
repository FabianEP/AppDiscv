@extends('layouts.menuapp')

@section('title', '| Add User')

@section('headercontent')
    <h2><i class='fa fa-user-plus'></i> Add User</h2>
    <ol class="breadcrumb">
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a>Security</a>
        </li>
        <li class="active">
            <strong>Add User</strong>
        </li>
    </ol>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class='fa fa-user-plus'></i> Add User <small></small></h5>
                </div>
                <div class="ibox-content">
                    {{ Form::open(array('url' => 'security/users', 'class' => 'form-horizontal')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('name', '', array('class' => 'form-control')) }}
                        </div>
                    </div>
                    
                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::email('email', '', array('class' => 'form-control')) }}
                        </div>
                    </div>
                
                    <div class="hr-line-dashed"></div>
                    
                    <div class='form-group'>
                        <label class="col-sm-2 control-label">Roles<br/>
                        <small class="text-navy">Custom elements</small></label>
                        
                        <div class="col-sm-10">
                            @foreach ($roles as $role)
                                <div class="i-checks">
                                    <label> 
                                        {{ Form::checkbox('roles[]',  $role->id ) }}
                                        <i></i> {{ Form::label($role->name, ucfirst($role->name)) }}
                                    </label>
                                </div>                    
                            @endforeach
                        </div>
                    </div>
                
                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}<br>
                        <div class="col-sm-10">
                            {{ Form::password('password', array('class' => 'form-control')) }}
                        </div>
                    </div>
                
                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        {{ Form::label('password', 'Confirm Password', array('class' => 'col-sm-2 control-label')) }}<br>
                        <div class="col-sm-10">
                            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <!-- <button class="btn btn-white" type="submit">Cancel</button> -->
                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jsscript')
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js')}} "></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection
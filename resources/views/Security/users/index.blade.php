@extends('layouts.menuapp')

@section('title', '| Users')

@section('headercontent')
    <h2><i class="fa fa-users"></i> User Administration</h2>
    <ol class="breadcrumb">
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a>Security</a>
        </li>
        <li class="active">
            <strong>User Administration</strong>
        </li>
    </ol>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><i class="fa fa-users"></i> User Administration</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-2">
                            <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
                    </div>
                </div>
                <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date/Time Added</th>
                            <th>User Roles</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
        
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                            <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
        
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                    </tfoot>
                </table>    
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('jsscript')
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- FooTable -->
    <script src="{{ asset('js/plugins/footable/footable.all.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js')}} "></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
@endsection
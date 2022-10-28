@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            @can('user-create')
            <a class="btn btn-sm btn-success" href="{{ route('users.create') }}"> Create New User</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
        <tr>
           <td>{{ ++$i }}</td>
           <td><label for="">{{ $user->name }}</label></td>
           <td><label for="">{{ $user->email }}</label></td>
           <td><label class="badge badge-success">{{ $v }}</label></td>
           <td>
            <a class="btn btn-sm btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
             {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                 {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
             {!! Form::close() !!}
         </td>
        </tr>
        @endforeach
      @endif
  
  </tr>
 @endforeach
</table>


{!! $data->render() !!}


@endsection
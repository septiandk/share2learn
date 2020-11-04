@extends('admin.index')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-12">
 <h3>Guru </h3>
 <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Guru </li>
      </ol>
 <div class="panel panel-default">
 <div class="panel-body">
 <form action="{{route('crudguru.store')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 <div class="form-group{{ $errors->has('namaguru') ? ' has-error' : '' }}">
 <input type="text" name="namaguru" class="form-control" placeholder="Nama Guru">
 {!! $errors->first('namaguru', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
 <input type="text" name="status" class="form-control" placeholder="status">
 {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
 <input type="text" name="description" class="form-control" placeholder="Description">
 {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
 </div>
  <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }}">
<input type="file" name="filename" accept="image/gif, image/jpeg, image/png, image/ico">
 {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
 </div>
 
  <h3>Create Login Guru </h3>
   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email@gmail.com" required>
 {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
 </div>
 
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <input id="password" type="password" class="form-control" name="password"  placeholder="Enter Your Password" required>
 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
 </div>
 
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         <input id="password-confirm" type="password" class="form-control" placeholder="ReEnter Your Password" name="password_confirmation" required>
 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
 </div>
  
 <div class="form-group">
 <input type="submit" class="btn btn-primary" value="Simpan">
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>

@endsection

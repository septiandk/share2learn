@extends('admin.index')
@section('content')
<div class="container">
 <div class="col-md-12">
 <h3> Courses </h3>
 <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Courses</li>
      </ol>
 <div class="panel panel-default">
 <div class="panel-body">
 <form action="{{route('messages.updatepelajaran', $cruds->id)}}" method="post">
 <input name="_method" type="hidden" value="PATCH">
 {{csrf_field()}}
 <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
 <input type="text" name="subject" class="form-control" placeholder="Nama Courses">
 {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group{{ $errors->has('icon_path') ? ' has-error' : '' }}">
<input type="file" name="icon_path" accept="image/gif, image/jpeg, image/png, image/ico">
 {!! $errors->first('icon_path', '<p class="help-block">:message</p>') !!}
 </div>
  <div class="form-group{{ $errors->has('color_scheme') ? ' has-error' : '' }}">
 <input type="color" name="color_scheme" class="form-control" value="#ff0000">
 {!! $errors->first('color_scheme', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group">
 <input type="submit" class="btn btn-primary" value="Simpan">
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection

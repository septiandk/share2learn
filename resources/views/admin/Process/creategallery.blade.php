@extends('admin.index')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-12">
 <h3> Gallery </h3>
 <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gallery</li>
      </ol>
 <div class="panel panel-default">
 <div class="panel-body">
 <form action="{{route('crudgallery.store')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 <div class="form-group{{ $errors->has('courses') ? ' has-error' : '' }}">
 <input type="text" name="courses" class="form-control" placeholder="Courses">
 {!! $errors->first('courses', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }}">
<input type="file" name="filename" accept="image/jpeg, image/png, image/jpg">
 {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
{!! $errors->first('validator', '<p class="help-block">:message</p>') !!}
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

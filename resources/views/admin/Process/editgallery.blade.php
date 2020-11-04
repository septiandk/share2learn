@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-12">
 <h3>CRUD </h3>
 <div class="panel panel-default">
 <div class="panel-body">


<form action="{{route('crudgallery.update', $cruds->id)}}" enctype="multipart/form-data" class="form" method="post">
 <input name="_method" type="hidden" value="PATCH">
 {{csrf_field()}}
 <div class="form-group{{ $errors->has('courses') ? ' has-error' : '' }}">
 <input type="text" name="courses" class="form-control" placeholder="Courses"
value="{{$cruds->courses}}">
 {!! $errors->first('courses', '<p class="help-block">:message</p>') !!}
 </div>
 <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }}">
<input type="file" name="filename" >
 {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
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
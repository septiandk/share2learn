@extends('tampilProfil')
@section('content1')

        <form action="{{route('profil.update', $cruds->id)}}" method="post">
         <input name="_method" type="hidden" value="PATCH">
         {{csrf_field()}}
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             Nama   :<input type="text" name="name" class="form-control" placeholder="Nama"
             value="{{$cruds->name}}">
             {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
         </div>
         <input name="_method" type="hidden" value="PATCH">
         {{csrf_field()}}
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             Email  :<input type="text" name="email" class="form-control" placeholder="Email"
             value="{{$cruds->email}}">
             {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
         </div>
         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                Password  :<input id="password" type="password" name="password" class="form-control" placeholder="Password"
             value="{{$cruds->password}}" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
        </div>

        <div class="form-group">

                Password confirm :<input id="password-confirm" type="password" name="password" class="form-control" placeholder="Password"
             value="{{$cruds->password}}">
        </div>

        <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Simpan">
           </div>
           </form>
   @endsection
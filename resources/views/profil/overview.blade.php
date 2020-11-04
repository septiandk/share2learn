@extends('tampilProfil')
@section('content1')
<form >
    <pre>
        Name          :<input type="text" disabled="" value="{{Auth::user()->name}}">
        <br>
        Email         :<input type="text" disabled="" value="{{Auth::user()->email}}">
        <br>
        Keterangan    :<input type="text" disabled="" value="{{Auth::user()->level}}">
        <br>
        Jumlah Course :<input type="text" disabled="" value="{{Auth::user()->jmlhcourse}}">

    </pre>
</form> 
@endsection
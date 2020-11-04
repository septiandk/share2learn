
<div class="container">
 <div class="row">
 <div class="col-md-12">
 <h3>CRUD Laravel</h3>
 <div class="panel panel-default">
 <div class="panel-body">
 


 <a href="{{route('crud.create')}}" class="btn btn-info pull-right">Tambah
Data</a><br><br>
 <table class="table table-striped">
 <tr>
 
 <th>No</th>
 <th>Nama</th>
 <th>NIM</th>
 <th>Alamat</th>
 <th>Action</th>
 </tr>
 <?php $no=1; ?>
 @foreach($cruds as $crud)
 <tr>
 <td>{{$no++}}</td>
 <td>{{$crud->Nama}}</td>
 <td>{{$crud->NIM}}</td>
 <td>{{$crud->Alamat}}</td>
 <td>
 <form method="POST" action="{{ route('crud.destroy', $crud->id) }}" acceptcharset="UTF-8">
 <input name="_method" type="hidden" value="DELETE">
 <input name="_token" type="hidden" value="{{ csrf_token() }}">
 <a href="{{route('crud.edit', $crud->id)}}" class="btn btn-primary">Edit</a>
 <input type="submit" class="btn btn-danger" value="Delete">
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
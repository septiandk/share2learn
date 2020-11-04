@extends('admin.index')
@section('content')

<section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->

      <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Status</th>
                <th>Description</th>
                <th>Email</th>
                <th>Image</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
             <?php $no=1; ?>
             @foreach($dbguru as $crud)
             <tr>
              <td>{{$no++}}</td>
              <td>{{$crud->namaguru}}</td>
              <td>{{$crud->status}}</td>
              <td>{{$crud->description}}</td>
              <td>{{$crud->email}}</td>
              <td><img src="../img/guru/{{$crud->guruimg_path}}" alt=""></td>
              <td><form method="POST" action="{{ route('crudguru.destroy', $crud->id) }}" acceptcharset="UTF-8">
               <input name="_method" type="hidden" value="DELETE">
               <input name="_token" type="hidden" value="{{ csrf_token() }}">
               <a href="{{route('crudguru.edit', $crud->id)}}" class="btn btn-primary">Edit</a>
               <input type="submit"  onclick="return confirm('Are you sure?');" class="btn btn-danger" value="Delete"> 
             </form></td>
           </tr>
           @endforeach
         </tbody>
         <tfoot>

         </tfoot>
       </table>
     </div>
     <!-- /.box-body -->
   </div>
   <!-- /.box -->
 </div>
 <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>

@endsection
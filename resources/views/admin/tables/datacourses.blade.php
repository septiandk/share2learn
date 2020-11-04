@extends('admin.index')
@section('content')

<!-- Content Header (Page header) -->
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
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Courses</th>
                <th>Image</th>
                <th>Color Scheme</th>
                
             </tr>
           </thead>
           <tbody>
            <?php $no=1; ?>
            @foreach($dbcourses as $crudcourses)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$crudcourses->subject}}</td>
              <td><img src="../img/coursesicon/{{$crudcourses->icon_path}}" alt=""></td>
              <td><input type="color" name="color_scheme" class="form-control" value="{{$crudcourses->color_scheme}}">{{$crudcourses->color_scheme}}</td>
              <td><form method="POST" action="{{ route('messages.destroy', $crudcourses->id) }}" acceptcharset="UTF-8">
                 <input name="_method" type="hidden" value="DELETE">
                 <input name="_token" type="hidden" value="{{ csrf_token() }}">
                 <input type="submit"  onclick="return confirm('Are you sure?');" class="btn btn-danger" value="Delete"> 
               </form>
               </td>
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
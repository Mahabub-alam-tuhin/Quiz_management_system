@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.add_role.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">user_role_id</label>
            <input type="number" name="role_id" class="form-control"  placeholder="Enter role number">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Role name</label>
          <input type="text" name="name" class="form-control"  placeholder="Enter name">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
</div>
@endsection

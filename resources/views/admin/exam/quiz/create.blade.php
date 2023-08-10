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
    <form action="{{route('admin.exam.quiz.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Teacher name</label>
          <input type="text" name="name" class="form-control"  placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quiz</label>
          <input type="text" name="Quiz" class="form-control"  placeholder="Enter Quiz">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quiz Date</label>
          <input type="date" name="date" class="form-control"  placeholder="Quiz date">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quiz Time</label>
          <input type="time" name="Time" class="form-control"  placeholder="Quiz Time">
        </div>    
        <div class="form-group mb-0">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
            <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
          </div>
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

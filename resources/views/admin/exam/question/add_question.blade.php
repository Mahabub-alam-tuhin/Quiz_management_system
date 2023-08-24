@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Question</h3> 
      {{-- <td><a href="{{route('admin.exam.question.view')}}"class="btn btn-success">View Question</a></td> --}}

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.exam.question.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="col-md-12 form-control">
          <select name="quiz_id" placeholder="quiz_id" required="">
              <option>Open this select menu</option>
              @foreach (App\Models\quizes::get() as $quize)
                  <option value="{{ $quize->id }}">{{ $quize->Quiz }}</option>
              @endforeach
          </select>
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Question</label>
          <input type="text" name="Question" class="form-control"  placeholder="Enter Question">
        </div>
        <div class="row">
        <div class="col-md-6 form-group">
          <label for="exampleInputEmail1">Option 1</label>
          <input type="text" name="option_1"  class="form-control"  placeholder="Option">
        </div>
        <div class="col-md-6 form-group">
          <label for="exampleInputEmail1">Option 2</label>
          <input type="text" name="option_2"   class="form-control"  placeholder="Option">
        </div>  
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
              <label for="exampleInputEmail1">Option 3</label>
              <input type="text" name="option_3"   class="form-control"  placeholder="Option">
            </div>
            <div class="col-md-6 form-group">
              <label for="exampleInputEmail1">Option 4</label>
              <input type="text" name="option_4"   class="form-control"  placeholder="Option">
            </div>  
            </div>
            
        <div class="form-group">
          <label for="exampleInputEmail1">Right Answer</label>
          <input type="text" name="Answer" class="form-control"  placeholder="Right Answer">
        </div>
        <div class="row">
        <div class="col-2 form-check">
          <input type="radio" class="form-check-input" id="radio1" name="multiple" value="single">
          <label class="form-check-label" for="radio1">single answer</label>
        </div>
        <div class="col-2 form-check">
          <input type="radio" class="form-check-input" id="radio2" name="multiple" value="multiple">
          <label class="form-check-label" for="radio2">multiple answer</label>
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

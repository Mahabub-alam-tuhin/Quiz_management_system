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
                <form action="{{ route('test_submit') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Last Name</label>
                          <input type="text" name="last_name" class="form-control">
                        </div>

                        <label for="">Status</label>
                        <div class="form-check">
                          <input class="form-check-input" name="status" value="active" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Active
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="status" value="inactive" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Inactive
                          </label>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Roles</label>
                          {{-- <input type="text" name="last_name" class="form-control"> --}}
                          <select class="form-control" name="roles[]" id="roles" multiple>
                            <option value="">Select role</option>
                            <option value="admin">admin</option>
                            <option value="student">student</option>
                            <option value="teacher">teacher</option>
                          </select>
                        </div>

                        <label for="">Roles with checkbox</label>
                        <div class="form-check">
                          <input class="form-check-input" name="role_checkbox[]" type="checkbox" value="admin" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            admin
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="role_checkbox[]" type="checkbox" value="student" id="flexCheckChecked">
                          <label class="form-check-label" for="flexCheckChecked">
                            student
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="role_checkbox[]" type="checkbox" value="teacher" id="flexCheckChecked">
                          <label class="form-check-label" for="flexCheckChecked">
                            teacher
                          </label>
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

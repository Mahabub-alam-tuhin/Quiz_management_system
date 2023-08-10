@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{route('admin.exam.quiz.update',$quiz->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Teacher name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $quiz->name }}" name="name" class="form-control" id="inputEnterYourName" placeholder="Enter Your name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Quiz</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $quiz->Quiz }}" name="Quiz" class="form-control" id="inputPhoneNo2" placeholder="Description">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Quiz Date</label>
                                <div class="col-sm-9">
                                    <input type="Date" value="{{  $quiz->Date }}" name="Date" class="form-control" id="inputPhoneNo2" placeholder="Date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Quiz Time</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $quiz->Time }}" name="Time" class="form-control" id="inputPhoneNo2" placeholder="District">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection


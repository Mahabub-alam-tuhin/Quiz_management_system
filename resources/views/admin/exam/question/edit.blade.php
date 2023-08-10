@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{route('admin.exam.question.update',$questions->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Teacher name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->name }}" name="name" class="form-control" id="inputEnterYourName" placeholder="Enter Your name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Question</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->Question }}" name="Question" class="form-control" id="inputPhoneNo2" placeholder="Description">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">option 1</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->option_1 }}" name="option_1" class="form-control" id="inputPhoneNo2" placeholder="Date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">option 2</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->option_2 }}" name="option_2" class="form-control" id="inputPhoneNo2" placeholder="Date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">option 3</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->option_3 }}" name="option_3" class="form-control" id="inputPhoneNo2" placeholder="Date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">option 4</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->option_4 }}" name="option_4" class="form-control" id="inputPhoneNo2" placeholder="Date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Right Answer</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $questions->Answer }}" name="Answer" class="form-control" id="inputPhoneNo2" placeholder="District">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-9">
                                    <input type="hidden" value="{{  $questions->quiz_id }}" name="quiz_id" class="form-control" id="inputPhoneNo2" placeholder="District">
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


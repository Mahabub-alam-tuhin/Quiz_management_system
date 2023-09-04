@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <a href="{{ route('admin.exam.quiz.view') }}" class="small-box-footer">
                    <div class="inner">
                        <h3>{{ $quize }}</h3>

                        <p>Total Quiz</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <i class="fas fa-arrow-circle-right" style="padding-bottom: 5px;">More info </i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <a href="{{ route('admin.exam.question.view') }}" class="small-box-footer">
                    <div class="inner">
                        <h3>{{ $questions }}</h3>

                        <p>Total question</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <i class="fas fa-arrow-circle-right"> More info</i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <a href="{{ route('admin.user.view') }}" class="small-box-footer">
                    <div class="inner">
                        <h3>{{ $users }}</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <i class="fas fa-arrow-circle-right"> More info </i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <a href="{{ route('admin.submission.view') }}" class="small-box-footer">
                    <div class="inner">
                        <h3>{{ $submission }}</h3>

                        <p>All quiz Submitted user</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <i class="fas fa-arrow-circle-right">More info</i>
                </a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             
                    <a href="{{ route('admin.leaderbord.view') }}" class="small-box-footer">
                        <div class="inner">
                            <h3>Leaderbord</h3>

                            <p>User Result</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <i class="fas fa-arrow-circle-right">More info</i>
                    </a>
            </div>
        </div>

        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            @foreach ($quiz_result as $question_submission)
            <a href="{{ route('admin.leaderbord.view', $question_submission->quiz_id) }}" class="small-box-footer">
                <div class="inner">
                    <h3>dvxgfch</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <i class="fas fa-arrow-circle-right"> More info </i>
            </a>
         
        @endforeach
      </div>
      </div> --}}

    </div>
@endsection

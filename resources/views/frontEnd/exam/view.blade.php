{{-- @extends('frontEnd.master')
@section('title', 'Home')
@section('content')

<section style="background-color: rgba(22, 34, 57, 0.95); margin-top: 75px;">
    <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info" style="margin-bottom: 100%;">
                <thead style="color: #fff">
                    <tr>
                        <th style="border-bottom: 2px">Id</th>
                        <th style="border-bottom: 2px">Teacher name</th>
                        <th style="border-bottom: 2px">Quiz</th>
                        <th style="border-bottom: 2px">date</th>
                        <th style="border-bottom: 2px">Time</th>
                        <th style="border-bottom: 2px">Action</th>
                    </tr>
                </thead>

                <tbody style="color: #fff">
                    @php $i = 1 @endphp
                    @if (count($quiz) > 0)
                        @foreach ($quiz as $quizes)
                            <tr>
                                <td style="border: 0px">{{ $i++ }}</td>
                                <td style="border: 0px">{{ $quizes->name }}</td>
                                <td style="border: 0px">{{ $quizes->Quiz }}</td>
                                <td style="border: 0px">{{ $quizes->date }}</td>
                                <td style="border: 0px">{{ $quizes->Time }}</td>
                                <td style="border: 0px">
                                    <a href="{{ route('frontEnd.question.view', $quizes->id) }}"
                                        class="btn btn-primary">Start Exam</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                       <i><h2 style=" color:#fff; text-align:center" >No More Exams Left</h2></i>
                        
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection --}}

@extends('frontEnd.master')
@section('title', 'Home')
@section('content')

<section style="background-color: rgba(22, 34, 57, 0.95); margin-top: 75px;">
    <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            @if (count($quiz) > 0)
                <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
                    aria-describedby="DataTables_Table_0_info" style="margin-bottom: 100%;">
                    <thead style="color: #fff">
                        <tr>
                            <th style="border-bottom: 2px">Id</th>
                            <th style="border-bottom: 2px">Teacher name</th>
                            <th style="border-bottom: 2px">Quiz</th>
                            <th style="border-bottom: 2px">date</th>
                            <th style="border-bottom: 2px">Time</th>
                            <th style="border-bottom: 2px">Action</th>
                        </tr>
                    </thead>

                    <tbody style="color: #fff">
                        @php $i = 1 @endphp
                        @foreach ($quiz as $quizes)
                            <tr>
                                <td style="border: 0px">{{ $i++ }}</td>
                                <td style="border: 0px">{{ $quizes->name }}</td>
                                <td style="border: 0px">{{ $quizes->Quiz }}</td>
                                <td style="border: 0px">{{ $quizes->date }}</td>
                                <td style="border: 0px">{{ $quizes->Time }}</td>
                                <td style="border: 0px">
                                    <a href="{{ route('frontEnd.question.view', $quizes->id) }}"
                                        class="btn btn-primary">Start Exam</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <i><h2 style="color: #fff; text-align: center; height: 1000px;">No More Exams Left</h2></i>
            @endif
        </div>
    </div>
</section>

@endsection

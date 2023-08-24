@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <body style="background-color: rgba(22,34,57,0.95);">
    <section class="profile" style="margin-top: 80px;">
        <div class="mb-2 mb-xl-3 display-28" style="color: #fff; padding-top: 45px;padding-left: 70px;"><span
                class="display-26 text-secondary me-2 font-weight-600">Name:</span>
            {{ Auth::user()->name }}</div>
        <div class="mb-2 mb-xl-3 display-28"style="color: #fff;padding-left: 70px;"><span
                class="display-26 text-secondary me-2 font-weight-600">Email:</span>
            {{ Auth::user()->email }}</div>


        <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info" style="margin:0px; margin-left:60px">
            <thead style="color: #fff;">
                <tr>
                    <th style="border-bottom:2px;">Teacher_name</th>
                    <th style="border-bottom:2px">Quiz name</th>
                    <th style="border-bottom:2px">user_name</th>
                    <th style="border-bottom:2px">marks</th>
                    <th style="border-bottom:2px">questions</th>

                </tr>
            </thead>
            <tbody>

                {{-- @dd($questions); --}}
                @php $i=1 @endphp
                @foreach ($quiz_result as $data)
                    <tr>
                        <td style="border: 0px; color:#fff">{{ $data->quiz_name }}</td>
                        <td style="border: 0px; color:#fff">{{ $data->quiz_Quiz }}</td>
                        <td style="border: 0px; color:#fff">{{ $data->user_name }}</td>
                        <td style="border: 0px; color:#fff">{{ $data->marks }}</td>
                        <td style="border: 0px; color:#fff">{{ $data->questions }}</td>
                       
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </section>
    </body>
    </section>

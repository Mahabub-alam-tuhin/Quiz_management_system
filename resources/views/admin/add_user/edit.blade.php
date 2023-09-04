@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.add_user.update', $users->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">user_role</label>
                                <div class="col-sm-9 form-control">
                                    <select name="user_role_id" placeholder="user_role_id" required="">
                                        <option>Open this select menu</option>
                                        @foreach (App\Models\userRole::where('name', '!=', 'super_admin')->get() as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">user name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $users->name }}" name="name" class="form-control"
                                        id="inputEnterYourName" placeholder="Enter Your name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $users->email }}" name="email" class="form-control"
                                        id="inputPhoneNo2" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">password</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $users->password }}" name="password"
                                        class="form-control" id="inputPhoneNo2" placeholder="password">
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

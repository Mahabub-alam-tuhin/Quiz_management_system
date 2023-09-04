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
    <form action="{{route('admin.add_user.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <div class="col-md-12 form-control">
              <select name="user_role_id" placeholder="user_role_id" required="">
                <option>Open this select menu</option>
                @foreach (App\Models\userRole::where('name', '!=', 'super_admin')->get() as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter name">
          </div>


        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="text" name="email" class="form-control"  placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="text" name="password" class="form-control"  placeholder="Enter password">
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

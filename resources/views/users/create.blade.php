@extends("layouts.global")

@section("title")
    Create User
@endsection

@section("content")
    @if(session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
    @endif
    <form enctype="multipart/form-data" action="{{ route('users.store') }}" class="bg-white shadow-sm p-3" method="POST">
        @csrf
        
        <label for="name">Name</label>
        <input class="form-control" placeholder="Full Name" type="text" name="name" id="name">
        <br>

        <label for="username">Username</label>
        <input class="form-control" placeholder="Username" type="text" name="username" id="username">
        <br>

        <label for="">Roles</label>
        <br>
        <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>
        <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">
        <label for="STAFF">Staff</label>
        <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
        <label for="CUSTOMER">Customer</label>
        <br>

        <br>
        <label for="phone">Phone Number</label>
        <br>
        <input class="form-control" type="text" name="phone" id="phone">

        <br>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control"></textarea>

        <br>
        <label for="avatar">Avatar Image</label>
        <br>
        <input type="file" name="avatar" id="avatar" class="form-control">

        <hr class="my-3">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="user@mail.com" class="form-control">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" class="form-control">
        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password confirmation" class="form-control">
        <br>

        <input type="submit" class="btn btn-primary" value="Save">
    </form>
@endsection
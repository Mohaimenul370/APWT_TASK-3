@extends('layouts.app')
@section('content')

<form action="{{route('userInfoUpdate')}}" class="col-md-6" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$seeker->id}}">
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$seeker->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{$seeker->email}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$seeker->phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Username</span>
        <input type="text" name="username" value="{{$seeker->username}}"class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{$seeker->dob}}" class="form-control">
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Gender</span><br>
        <input type="radio" id="male" name="gender" value="Male" @if ($seeker->gender == "Male") checked @endif>
            <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female"  @if ($seeker->gender == "Female") checked @endif>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other"  @if ($seeker->gender == "Other") checked @endif>
            <label for="other">Other</label><br>
        @error('gender')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <br><br><br><br><br><br>
    <input type="submit" class="btn btn-success" value="Update">
</form>

@endsection
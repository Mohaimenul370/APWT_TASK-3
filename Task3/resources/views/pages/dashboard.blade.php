@extends('layouts.app')
@section('content')

<h3>UserID: {{Session()->get('userid')}}</h3><hr>
<h3>Name: {{$seeker->name}}</h3><hr>
<h3>Email: {{$seeker->email}}</h3><hr>
<h3>Username: {{Session()->get('user')}}</h3><hr>
<h3>Phone: {{$seeker->phone}}</h3><hr>
<h3>Date Of Birth: {{$seeker->dob}}</h3><hr>
<h3>Gender: {{$seeker->gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('edituserinfo')}}"> Update </a> 
@endsection
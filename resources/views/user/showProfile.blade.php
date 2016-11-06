@extends('layouts.master3')

@section('content')
    <div class="col-md-6 myTop myLefts">
        <div class="well">
            <dl class="dl-horizontal">
                <h3 class="text-center">My Profile</h3>
                <dd><img src="/uploads/avatars/{{ $user->avatar }}" class="text-center"
                         style="width:150px; height:150px; border-radius:50%;"></dd>
                <h4 class="text-center">Name: {{ $user->profile->first_name }} {{ $user->profile->last_name }}</h4>
                <h4 class="text-center">Address: {{ $user->profile->address }}, {{ $user->profile->city }}, {{ $user->profile->country }}</h4>
                <h4 class="text-center">Phone 1: {{ $user->profile->phone1 }}</h4>
                <h4 class="text-center">Phone 2: {{ $user->profile->phone2 }}</h4>
                <a href="{{ route('editProfile', $user->id) }}">
                    <button class="btn btn-primary" value="Edits">Edit</button>
                </a>
            </dl>
        </div>
    </div>
@endsection
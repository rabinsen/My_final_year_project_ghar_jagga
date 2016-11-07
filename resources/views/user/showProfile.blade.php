@extends('layouts.master3')

@section('content')
    <div class="col-md-6 myTop myLefts">
        <div class="well">
            <dl class="dl-horizontal">
                <h3 class="text-center">My Profile</h3>
                <dd><img src="/uploads/avatars/{{ $user->avatar }}" class="text-center"
                         style="width:150px; height:150px; border-radius:50%;"></dd>
                <h4 class="text-center">Name: {{ $user->first_name }} {{ $user->last_name }}</h4>
                <h4 class="text-center">Address: {{ $user->address }}, {{ $user->city }}, {{ $user->country }}</h4>
                <h4 class="text-center">Phone 1: {{ $user->phone1 }}</h4>
                <h4 class="text-center">Phone 2: {{ $user->phone2 }}</h4>

                <td><a href="{{ route('editProfile', $user->id) }}">
                        <button class="btn btn-primary myLeftsss"  value="Edits">Edit</button>
                    </a></td>
            </dl>
        </div>
    </div>
@endsection
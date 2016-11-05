@extends('layouts.master3')

@section('content')
    <div class="form-group col-md-6 myTops myLeft">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

                    <h2>{{ $user->name }}'s Profile</h2>

                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label>Update Profile Image</label>
                        <br>
                        <br>
                        <input type="file" name="avatar">
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-sm btn-primary myLefts" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
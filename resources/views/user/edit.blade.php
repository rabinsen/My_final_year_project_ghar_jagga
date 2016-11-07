@extends('layouts.master3')

@section('content')
    <div class="col-md-6 myTop myLefts">
        <div class="well">
            {!! Form::model($user, ['route' => ['updateProfile', $user->id], 'method' => 'POST']) !!}
            <dl class="dl-horizontal">
                <h3 class="text-center">My Profile</h3>
                <dd><img src="/uploads/avatars/{{ $user->avatar }}" class="text-center"
                         style="width:150px; height:150px; border-radius:50%;"></dd>

                {!! Form::label('first_name', 'Name:') !!}
                {{ Form::text('first_name', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('last_name', 'Last Name:') !!}
                {{ Form::text('last_name', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('address', 'Address:') !!}
                {{ Form::text('address', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('city', 'City:') !!}
                {{ Form::text('city', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('country', 'Country:') !!}
                {{ Form::text('country', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('phone1', 'Phone 1:') !!}
                {{ Form::text('phone1', null, ['class' => 'form-control input-lg']) }}

                {!! Form::label('phone2', 'Phone 2:') !!}
                {{ Form::text('phone2', null, ['class' => 'form-control input-lg']) }}


                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('showProfile', $user->id) }}" methods="get">
                            <button class="btn btn-danger btn-block" value="Cancel">Cancel</button>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

                    </div>
                </div>
            </dl>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
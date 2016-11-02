@extends('layouts.app')

@section('content')

    <div>
        <h3>{{  $details->title }}</h3>
        <h4>{{ $details->price }}</h4>
    </div>

@endsection
@extends('layouts.master')

@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">PROPERTIES</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<h1>{{ $uProperties->title }}</h1>--}}
    {{--<img src="{{ url('/images/'.$uProperties->images->thumbnail) }}" class="img-thumbnail">--}}




    @foreach( Auth::user()->properties as $uProperty )
        <div>
            <h1>{{ $uProperty->title }}</h1>
            <img src="{{ url('/images/'.$uProperties->images->thumbnail) }}" class="img-thumbnail">
        </div>
    @endforeach
@endsection
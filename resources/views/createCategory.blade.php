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


    {!! Form::open(['route' => 'storeCategory']) !!}
    {{--<form enctype="multipart/form-data" action="{{ route('storeCategory') }}" method="POST">--}}
        {{--<div class="form-group">--}}
            <label>Category</label>

            {!! Form::select("group_id", $groups, null, ['class' => 'form-control']) !!}
            {{--<select name="category" class="form-control">--}}
                {{--<option value="AP">Apartment</option>--}}
                {{--<option value="BG">Bunglow</option>--}}
                {{--<option value="LD">Land</option>--}}
                {{--<option value="HR">Hotels and Resort</option>--}}
            {{--</select>--}}
            {{--<h1>{{ $groups->name }}</h1>--}}

        {{--</div>--}}
        <div>
            <input type="submit" class="pull-right btn btn-sm btn-primary">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
    {!! Form::close() !!}

@endsection
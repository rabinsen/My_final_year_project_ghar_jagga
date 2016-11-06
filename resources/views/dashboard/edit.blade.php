@extends('layouts.master')

@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">APPARTMENT TITLE</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            {!! Form::model($details, ['route' => ['updates', $details->id], 'method' => 'POST']) !!}
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">
                                <img src="{{ url('/images/'.$details->images->thumbnail) }}" alt="img">
                                <img src="{{ url('/images/'.$details->images->slide1) }}" alt="img">
                            </div>
                            {{--{!! Form::model($details, ['route' => ['updates', $details->id]]) !!}--}}
                            <div class="aa-properties-info">
                                {!! Form::label('title', 'Title:') !!}
                                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

                                {!! Form::label('description', 'Description:', ['class' => 'form-spacing-top']) !!}
                                {{ Form::textarea('description', null, ['class' => 'form-control']) }}


                                <h2>Uploaded by: {{ $details->user->name }}</h2>

                                {!! Form::label('price', 'Price:', ['class' => 'form-spacing-top']) !!}
                                {{ Form::text('price', null, ['class' => 'form-control input-lg']) }}


                                <h4>Propery Features</h4>
                                <ul>
                                    <li>{{ Form::text('bedroom', null, ['class' => 'form-control input-lg']) }}Bedroom
                                    </li>
                                    <li>{{ Form::text('bathroom', null, ['class' => 'form-control input-lg']) }}Baths
                                    </li>
                                    <li>{{ Form::text('kitchen', null, ['class' => 'form-control input-lg']) }}Kitchen
                                    </li>
                                    <li>{{ Form::text('landArea', null, ['class' => 'form-control input-lg']) }}meter
                                        Land Area
                                    </li>
                                    <li>{{ Form::text('houseArea', null, ['class' => 'form-control input-lg']) }}meter
                                        House Area
                                    </li>
                                    <li>{{ Form::text('plotted', null, ['class' => 'form-control input-lg']) }}Plotted
                                    </li>
                                    <li>{{ Form::text('storey', null, ['class' => 'form-control input-lg']) }}Storey
                                    </li>
                                    <li>{{ Form::text('roadDistance', null, ['class' => 'form-control input-lg']) }}
                                        meter Road Distance
                                    </li>


                                </ul>
                            </div>
                            {{--{!! Form::close() !!}--}}
                        </div>
                    </div>


                </div>

                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt>Created At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($details->created_at)) }}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Last Updated at:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($details->updated_at)) }}</dd>
                        </dl>
                        <hr>

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('details', $details->id) }}">
                                    <button class="btn btn-danger btn-block" value="Cancel">Cancel</button>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
    <!-- / Properties  -->

@endsection
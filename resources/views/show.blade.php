@extends('layouts.app')

@section('content')

    <style type="text/css">
        #gallery-images img {
            width: 270px;
            height: 190px;
            border: 3px solid white;
            margin-bottom: 3px;
        }

        #gallery-images ul {
            margin: 0;
            padding: 0;
        }

        #gallery-images li {
            margin: 0;
            padding: 0;
            list-style: none;
            float: left;
            padding-right: 10px;
        }
    </style>

    {{--<div class="container"> --}}
        {{--    --}}
        {{--<table border="0" cellpadding="0" cellspacing="0" class="table table-striped">--}}
            {{--    @if(count($properties)>0) --}}{{-- If there is data then display it --}}
            {{--    --}}
            {{--<thead>--}}
            {{--      <tr>--}}
            {{--        <th>Property Id</th>--}}
            {{--        <th>Property Name</th>--}}
            {{--      </tr>--}}
            {{--    --}}
            {{--</thead>--}}
            {{--    --}}
            {{--<tbody>--}}
            {{--    --}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div id="gallery-images">--}}
                            {{--<ul>--}}
                                {{--@foreach( $properties as $property)--}}
                                    {{--<li>--}}
                                        {{--<a>--}}
                                            {{--<img src="{{ url('/images/'.$property->image) }}" class="img-thumbnail">--}}
                                        {{--</a>--}}

                                        {{--<div class="caption">--}}
                                            {{--<div>--}}
                                                {{--<h3>{{  $property->title }}</h3>--}}
                                                {{--<h3><i class="glyphicon glyphicon-tag"></i>{{ $property->price }}</h3>--}}
                                                {{--<h4><i class="glyphicon glyphicon-home"></i>{{ $property->address }}--}}
                                                    {{--<span class="label label-primary label-sm">{{ $property->type }}</span>--}}
                                                    {{--<button class="btn btn-lg btn-success">--}}
                                                        {{--Details--}}
                                                    {{--</button>--}}
                                                {{--</h4>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--    --}}
            {{--</tbody>--}}
            {{--    --}}
            {{--<tr>--}}
                {{--      --}}
                {{--<td colspan="2">--}}
                    {{--        --}}
                    {{--<div class="pagination">{!! str_replace('/?', '?', $properties->render()) !!}</div>--}}
                    {{--     --}}
                    {{--      --}}
                {{--</td>--}}
                {{--    --}}
            {{--</tr>--}}
            {{--    @else--}}
                {{--    --}}
                {{--<tr>--}}
                    {{--      --}}
                    {{--<td>No record found</td>--}}
                    {{--    --}}
                {{--</tr>--}}
                {{--    @endif--}}
            {{--    --}}
        {{--</table>--}}
        {{--  --}}
    {{--</div>--}}




    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="gallery-images">
                <ul>
                    @foreach( $properties as $property)
                        <li>
                            <a>
                                <img src="{{ url('/images/'.$property->image) }}" class="img-thumbnail">
                            </a>
                            <div class="caption">
                                <div>

                                    <h3><i class="glyphicon glyphicon-tag"></i>{{ $property->price }}</h3>
                                    <h4><i class="glyphicon glyphicon-home"></i>{{ $property->address }}
                                        <span class="label label-primary label-sm">{{ $property->type }}</span>
                                        <a href="{{ route('details', $property->id) }}" class="btn btn-success">Detailsk</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    {{--<@foreach( $categories as $category)--}}
                            {{--<h4>{{ $category->name }}</h4>--}}
                         {{--@endforeach--}}


                </ul>
            </div>
        </div>
    </div>
        <hr>
        {{ $properties->links() }}
    </div>




@endsection
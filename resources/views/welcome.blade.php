@extends('layouts.master')

@section('content')
    @include(('includes.slider'))
    @include('includes.search')
    {{--@include('includes.latestProperty')--}}

    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Latest Properties</h2>
                    <span></span>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        @foreach( $latestProperties as $latestProperty)
                            <div class="col-md-3">
                                <article class="aa-properties-item">
                                    <a href="#" class="aa-properties-item-img">
                                        <img src="{{ url('/images/'.$latestProperty->images->thumbnail) }}" alt="img">
                                    </a>

                                    <div class="aa-tag for-sale">
                                        For Sale
                                    </div>
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <span>{{ $latestProperty->bedroom }} beds</span>
                                            <span>{{ $latestProperty->bathroom }} baths</span>
                                            <span>{{ $latestProperty->kitchen }} kitchen</span>
                                            <span>{{ $latestProperty->landArea }} sq. foot</span>
                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a href="#">{{ $latestProperty->title }}</a></h3>

                                            <p>{{ $latestProperty->description }}</p>
                                        </div>
                                        <div class="aa-properties-detial">
                                    <span class="aa-price">
                                        {{ $latestProperty->price }}
                                    </span>
                                            <a href="{{ route('details', $latestProperty->id) }}"
                                               class="aa-secondary-btn">View Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Top Properties</h2>
                    <span></span>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        @foreach( $property as $propertie)
                            <div class="col-md-3">
                                <article class="aa-properties-item">
                                    <a href="#" class="aa-properties-item-img">
                                        <img src="{{ url('/images/'.$latestProperty->images->thumbnail) }}" alt="img">
                                    </a>

                                    <div class="aa-tag for-sale">
                                        For Sale
                                    </div>
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <span>{{ $propertie->bedroom }} beds</span>
                                            <span>{{ $propertie->bathroom }} baths</span>
                                            <span>{{ $propertie->kitchen }} kitchen</span>
                                            <span>{{ $propertie->landArea }} sq. foot</span>
                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a href="#">{{ $propertie->title }}</a></h3>

                                            <p>{{ $propertie->description }}</p>
                                        </div>
                                        <div class="aa-properties-detial">
                                    <span class="aa-price">
                                        {{ $propertie->price }}
                                    </span>
                                            <a href="{{ route('details', $propertie->id) }}" class="aa-secondary-btn">View
                                                Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.agents')
@endsection
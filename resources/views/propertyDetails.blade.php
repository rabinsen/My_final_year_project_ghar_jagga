@extends('layouts.master4')

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
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="w3-content w3-display-container">
                                <img class="mySlides" src="{{ url('/images/'.$details->images->thumbnail) }}" style="width:100%">
                                <img class="mySlides" src="{{ url('/images/'.$details->images->slide1) }}" style="width:100%">
                                <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
                                <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                            </div>
                            {{--<div class="aa-properties-details-img">--}}
                                {{--<img src="{{ url('/images/'.$details->images->thumbnail) }}" alt="img">--}}
                                {{--<img src="{{ url('/images/'.$details->images->slide1) }}" alt="img">--}}
                                {{--<img src="img/slider/3.jpg" alt="img">--}}
                            {{--</div>--}}
                            <div class="aa-properties-info">
                                <h2>{{ $details->title }}</h2>

                                <h2>{{ $details->description }}</h2>

                                <h2>Uploaded by: {{ $details->user->name }}</h2>
                                <span class="aa-price">{{ $details->price }}</span>

                                <h4>Propery Features</h4>
                                <ul>
                                    <li>{{ $details->bedroom }} Bedroom</li>
                                    <li>{{ $details->bathroom }} Baths</li>
                                    <li>{{ $details->kitchen }} Kitchen</li>
                                    <li>{{ $details->landArea }} sq. feet Land Area</li>
                                    <li>{{ $details->houseArea }} sq. feet House Area</li>
                                    <li>{{ $details->plotted }} plotted</li>
                                    <li>{{ $details->storey }} storey</li>
                                    <li>{{ $details->roadDistance }} meter Road Distance</li>

                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="row new-post">
                        <div class="col-md-12 col-md-offset-0">
                            <header><h3>Reviews</h3></header>
                            @foreach( $details->reviews as $review )
                                <div>
                                    <div class="rating">
                                        @if( $review->rating === 0 )
                                            <span class="rating-static rating-0"></span>
                                        @endif
                                        @if( $review->rating === 1 )
                                            <span class="rating-static rating-10"></span>
                                        @endif
                                        @if( $review->rating === 2 )
                                            <span class="rating-static rating-20"></span>
                                        @endif
                                        @if( $review->rating === 3 )
                                            <span class="rating-static rating-30"></span>
                                        @endif
                                        @if( $review->rating === 4 )
                                            <span class="rating-static rating-40"></span>
                                        @endif
                                        @if( $review->rating === 5 )
                                            <span class="rating-static rating-50"></span>
                                        @endif
                                    </div><br>
                                    <div><p>{{ $review->comments }}</p></div>

                                    <ul>
                                        <li>
                                            <span><i class="glyphical glyphicon-calender"></i> {{ $review->created_at }}</span>
                                        </li>
                                    </ul>

                                    <p class="text-right">Reviewed By {{ $review->user->name }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div>
                        @if( \Illuminate\Support\Facades\Auth::user() )
                            <section class="row new-post">
                                <div class="col-md-12 col-md-offset-0">
                                    <header><h3>Add new</h3></header>
                                    <form action="{{ route('review') }}" method="post">
                                        <div>
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5"/><label
                                                        class="full" for="star5" title="Awesome - 5 stars"></label>
                                                {{--<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>--}}
                                                <input type="radio" id="star4" name="rating" value="4"/><label
                                                        class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                {{--<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>--}}
                                                <input type="radio" id="star3" name="rating" value="3"/><label
                                                        class="full" for="star3" title="Meh - 3 stars"></label>
                                                {{--<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>--}}
                                                <input type="radio" id="star2" name="rating" value="2"/><label
                                                        class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                {{--<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>--}}
                                                <input type="radio" id="star1" name="rating" value="1"/><label
                                                        class="full" for="star1"
                                                        title="Sucks big time - 1 star"></label>
                                                {{--<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>--}}
                                            </fieldset>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="body" id="new-post" rows="5"
                                                      placeholder="Comment"></textarea>

                                        </div>
                                        <input type="hidden" name="p_id" value="{{ $details->id }}">
                                        <button type="submit" class="btn btn-primary">Review</button>
                                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                                    </form>
                                </div>
                            </section>
                        @endif
                    </div>

                    <div class="container">
                        <h1>{{$maps->address}}</h1>

                        <div id="map-canvas"></div>
                    </div>



                </div>

                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Properties Search</h3>

                            <form action="">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Type Your Location">
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Category</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>

                                    <div id="aa-sqrfeet-range"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>PRICE ($)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>

                                    <div id="aa-price-range"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-advance-search">
                                    <input type="submit" value="Search" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Populer Properties</h3>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- / Properties  -->
    <script>

        var lat = {{$maps->lat}};
        var lng = {{$maps->lng}};

        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: lat,
                lng: lng
            },
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position:{
                lat:lat,
                lng: lng
            },
            map:map
        });

    </script>

@endsection
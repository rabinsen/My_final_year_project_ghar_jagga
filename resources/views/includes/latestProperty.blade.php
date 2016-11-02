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
                    <div class="col-md-4">
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
                                    <a href="{{ route('details', $latestProperty->id) }}" class="aa-secondary-btn">View Details</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    {{--<div class="col-md-4">--}}
                        {{--<article class="aa-properties-item">--}}
                            {{--<a href="#" class="aa-properties-item-img">--}}
                                {{--<img src="img/item/2.jpg" alt="img">--}}
                            {{--</a>--}}
                            {{--<div class="aa-tag for-rent">--}}
                                {{--For Rent--}}
                            {{--</div>--}}
                            {{--<div class="aa-properties-item-content">--}}
                                {{--<div class="aa-properties-info">--}}
                                    {{--<span>5 Rooms</span>--}}
                                    {{--<span>2 Beds</span>--}}
                                    {{--<span>3 Baths</span>--}}
                                    {{--<span>1100 SQ FT</span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-about">--}}
                                    {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-detial">--}}
                    {{--<span class="aa-price">--}}
                      {{--$11000--}}
                    {{--</span>--}}
                                    {{--<a href="#" class="aa-secondary-btn">View Details</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<article class="aa-properties-item">--}}
                            {{--<a href="#" class="aa-properties-item-img">--}}
                                {{--<img src="img/item/3.jpg" alt="img">--}}
                            {{--</a>--}}
                            {{--<div class="aa-tag sold-out">--}}
                                {{--Sold Out--}}
                            {{--</div>--}}
                            {{--<div class="aa-properties-item-content">--}}
                                {{--<div class="aa-properties-info">--}}
                                    {{--<span>5 Rooms</span>--}}
                                    {{--<span>2 Beds</span>--}}
                                    {{--<span>3 Baths</span>--}}
                                    {{--<span>1100 SQ FT</span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-about">--}}
                                    {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-detial">--}}
                    {{--<span class="aa-price">--}}
                      {{--$15000--}}
                    {{--</span>--}}
                                    {{--<a href="#" class="aa-secondary-btn">View Details</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<article class="aa-properties-item">--}}
                            {{--<a href="#" class="aa-properties-item-img">--}}
                                {{--<img src="img/item/4.jpg" alt="img">--}}
                            {{--</a>--}}
                            {{--<div class="aa-tag for-sale">--}}
                                {{--For Sale--}}
                            {{--</div>--}}
                            {{--<div class="aa-properties-item-content">--}}
                                {{--<div class="aa-properties-info">--}}
                                    {{--<span>5 Rooms</span>--}}
                                    {{--<span>2 Beds</span>--}}
                                    {{--<span>3 Baths</span>--}}
                                    {{--<span>1100 SQ FT</span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-about">--}}
                                    {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-detial">--}}
                    {{--<span class="aa-price">--}}
                      {{--$35000--}}
                    {{--</span>--}}
                                    {{--<a href="#" class="aa-secondary-btn">View Details</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<article class="aa-properties-item">--}}
                            {{--<a href="#" class="aa-properties-item-img">--}}
                                {{--<img src="img/item/5.jpg" alt="img">--}}
                            {{--</a>--}}
                            {{--<div class="aa-tag sold-out">--}}
                                {{--Sold Out--}}
                            {{--</div>--}}
                            {{--<div class="aa-properties-item-content">--}}
                                {{--<div class="aa-properties-info">--}}
                                    {{--<span>5 Rooms</span>--}}
                                    {{--<span>2 Beds</span>--}}
                                    {{--<span>3 Baths</span>--}}
                                    {{--<span>1100 SQ FT</span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-about">--}}
                                    {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-detial">--}}
                    {{--<span class="aa-price">--}}
                      {{--$11000--}}
                    {{--</span>--}}
                                    {{--<a href="#" class="aa-secondary-btn">View Details</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<article class="aa-properties-item">--}}
                            {{--<a href="#" class="aa-properties-item-img">--}}
                                {{--<img src="img/item/6.jpg" alt="img">--}}
                            {{--</a>--}}
                            {{--<div class="aa-tag for-rent">--}}
                                {{--For Rent--}}
                            {{--</div>--}}
                            {{--<div class="aa-properties-item-content">--}}
                                {{--<div class="aa-properties-info">--}}
                                    {{--<span>5 Rooms</span>--}}
                                    {{--<span>2 Beds</span>--}}
                                    {{--<span>3 Baths</span>--}}
                                    {{--<span>1100 SQ FT</span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-about">--}}
                                    {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                {{--</div>--}}
                                {{--<div class="aa-properties-detial">--}}
                    {{--<span class="aa-price">--}}
                      {{--$15000--}}
                    {{--</span>--}}
                                    {{--<a href="#" class="aa-secondary-btn">View Details</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
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

    <section id="aa-properties">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <aside class="aa-properties-sidebar">
                        <?php $selected_group = Request::get("group_id") ?>
                        <a href="{{ route('properties.index') }}" class="list-group-item {{ empty($selected_group) ?
                        'active' : '' }}">All Properties <span
                                    class="badge">{{ App\Property::count() }}</span></a>
                        @foreach(App\Group::all() as $group)
                            <a href="{{ route('properties.index', ['group_id' => $group->id]) }}" class="list-group-item
                             {{ $selected_group == $group->id ? 'active' : '' }}">{{ $group->name }} <span
                                        class="badge">{{ $group->cProperties->count() }}</span> </a>
                        @endforeach

                        <div>
                        <form action="{{'filter'}}">

                        <div>
                        <label for="">Price</label><br>
                        min: <input type="text" name="min_price" value=""><br>
                        max: <input type="text" name="max_price" value=""><br>
                        </div>
                        <button>Go</button>
                        </form>
                        </div>



                    </aside>
                </div>

                <!-- Start properties sidebar -->
                <div class="col-md-9">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <div class="aa-properties-content">
                                <div class="aa-properties-content-head">

                                    <!-- start properties content head -->
                                    <div class="aa-properties-content-head">
                                        <div class="aa-properties-content-head-left">
                                            {!! Form::open([ 'route' => 'properties.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search' ]) !!}

                                            <div class="input-group">
                                                {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..', 'id' => 'term' ]) !!}

                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                 </span>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="aa-properties-content-head-right">

                                            <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                            <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                                        </div>
                                    </div>
                                    <!-- Start properties content body -->
                                    <div class="aa-properties-content-body">
                                        <ul class="aa-properties-nav">
                                            @foreach( $properties as $property)
                                                <li>
                                                    <article class="aa-properties-item">
                                                        <a class="aa-properties-item-img" href="#">
                                                            <img src="{{ url('/images/'.$property->images->thumbnail) }}"
                                                                 class="img-thumbnail">
                                                        </a>

                                                        <div class="aa-tag for-rent">
                                                            {{ $property->group->name }}
                                                        </div>
                                                        <div class="aa-properties-item-content">
                                                            <div class="aa-properties-info">
                                                                <span>{{ $property->bedroom }} beds</span>
                                                                <span>{{ $property->bathroom }} baths</span>
                                                                <span>{{ $property->kitchen }} kitchen</span>
                                                                <span>{{ $property->landArea }} sq.ft</span>
                                                            </div>
                                                            <div class="aa-properties-about">
                                                                <h3><a href="#">{{ $property->title }}</a></h3>

                                                                <p>{{ $property->description }}</p>
                                                            </div>
                                                            <div class="aa-properties-detial">
                                                    <span class="aa-price">
                                                        {{ $property->price }}
                                                    </span>
                                                                <a class="aa-secondary-btn"
                                                                   href="{{ route('details', $property->id) }}">View
                                                                    Details</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Start properties content bottom -->
                                    <div class="aa-properties-content-bottom">
                                        <nav>
                                            {{ $properties->links() }}
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <!-- Start Single properties sidebar -->
                    </aside>
                </div>
            </div>
        </div>
    </section>



@endsection
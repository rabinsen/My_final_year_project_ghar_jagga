@extends('layouts.master')

@section('content')
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        {{--<h2>Properties Page</h2>--}}
                        {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="#">HOME</a></li>--}}
                        {{--<li class="active">PROPERTIES</li>--}}
                        {{--</ol>--}}
                        {{--<div class="aa-properties-content-head">--}}
                        {{--<div class="aa-properties-content-head-left">--}}
                        {!! Form::open([ 'route' => 'users.index', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search' ]) !!}

                        <div class="input-group">
                            {!! Form::text('terms', Request::get('terms'), ['class' => 'form-control', 'placeholder' => 'Search..', 'id' => 'terms' ]) !!}

                            <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                    </span>
                        </div>
                        {!! Form::close() !!}
                        {{--</div>--}}

                        {{--</div>--}}
                    </div>
                </div>
                </div>
            </div>

    </section>


    <section id="aa-agents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-agents-area">
                        <div class="aa-title">
                            <h2>Our Agents</h2>
                            <span></span>
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>--}}
                        </div>
                        <!-- agents content -->
                        <div class="aa-agents-content">
                            <ul class="aa-agents-slider">
                                @foreach($users as $user)
                                    @if( $user->stripe_id != null )
                                        <li>
                                            <div class="aa-single-agents">
                                                <div class="aa-agents-img">
                                                    <img src="/uploads/avatars/{{ $user->avatar }}"
                                                         alt="agent member image">
                                                </div>
                                                <div class="aa-agetns-info">
                                                    <h4><a href="#">{{ $user->name }}</a></h4>
                                                    <span>Top Agent</span>

                                                    <div class="aa-agent-social">
                                                        <a href="https://www.facebook.com/rivansen"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
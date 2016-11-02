@extends('layouts.master3')

@section('content')

    @if(Auth::user()->type === 1 )

        <div class="col-sm-12 myTop">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-blue panel-widget myLeft ">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">{{ \App\Property::all()->count() }}</div>
                                <div class="text-muted">Properties</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-orange panel-widget myLeft">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">{{ \App\User::where('active', 1)->count() }}</div>
                                <div class="text-muted">Active Users</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-teal panel-widget myLeft">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">24</div>
                                <div class="text-muted">Agents</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-teal panel-widget myLeft">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">{{ \App\Review::all()->count() }}</div>
                                <div class="text-muted">Reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @if( Auth::user()->type ===0 )

        <div class="col-sm-12 myTop">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-blue panel-widget myLeft ">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">{{ Auth::user()->properties->count() }}</div>
                                <div class="text-muted">Properties</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-orange panel-widget myLeft">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large">{{ App\Review::all()->count() }}</div>
                                <div class="text-muted">Reviews</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @endif
@endsection
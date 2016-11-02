<section id="aa-advance-search">
    <div class="container">
        <div class="aa-advance-search-area">
            <div class="aa-advance-search-top">
                    <div class="row">
                        {!! Form::open([ 'route' => 'properties.index', 'method' => 'GET', 'class' => 'navbar-form navbar-middle', 'role' => 'search' ]) !!}

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
                </div>


            </div>
        </div>

    </div>
</section>
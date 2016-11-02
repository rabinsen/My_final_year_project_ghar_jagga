@extends('layouts.master3')

@section('content')

    @if(Auth::user())
    @foreach( \App\Review::all() as $pReview )


            <div class="col-md-4 myTop">
                <aside class="aa-properties-sidebar">
                    <h1>{{ $pReview->comments }}</h1>
                    <h1>{{ $pReview->user_id }}</h1>
                    <h1>{{ $pReview->property_id }}</h1>
                </aside>
            </div>



    @endforeach
    @endif


@endsection
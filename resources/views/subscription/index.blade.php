@extends('layouts.master3')

@section('content')
    <div class="col-md-6 myTop myLefts">
        <div class="well">
    @if($user->subscribed('main'))
       <div class="myTop myLeft"> <h1>You are subscribed and now an Agent</h1></div>
        @if ($user->subscription('main')->cancelled())
            <div class="myTop myLeft">  <p>Your subscription will end on {{ date('M j, Y h:ia', strtotime($user->subscription_ends_at)) }}</p></div>
        @endif

        <ul>
            @if(!$user->subscription('main')->cancelled())
                <li><div class="myTop myLeft"><a href="{{ route('subscription-cancel') }}?_token={{ csrf_token() }}">Cancel my subscription</a></div> </li>
            @else
                <li><div class="myTop myLeft"><a href="{{ route('subscription-resume') }}?_token={{ csrf_token() }}">Resume Subscription</a></div> </li>
            @endif
        </ul>
    @else
     <div>  <h1>Your are not Subscribed <a href="{{ route('subscription-join') }}">Join Now</a> </h1> </div>
    @endif
            </div>
        </div>
@endsection

@section('script')
    <script></script>
@endsection
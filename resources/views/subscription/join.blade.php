@extends('layouts.master3')

@section('content')
    <form action="{{ route('subscription-join1') }}" method="post" id="subscription-form">
        <div class="row myTop">
            <div class="col-lg-6">
                <label>
                    Choose Plan:
                    <select name="plan">
                        <option value="Small">Small (Rs.1000/month)</option>
                        <option value="large">Large (Rs.2000/month)</option>
                    </select>

                </label>
            </div>
            <div class="col-lg-6">

                @include('subscription.partials.card')
                <button class="btn btn-default">Make Payment</button>

            </div>
        </div>
        {!! Form::token() !!}
    </form>
@endsection

@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script>
@endsection
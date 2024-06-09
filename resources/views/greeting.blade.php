@extends('layouts.Master')

@section('content')
<div class="">
    <div class="">
        <a href="{{ route('greeting', 'en') }}" class="btn btn-primary">{{ __('test.EN_Lang') }}</a>
        <a href="{{ route('greeting', 'ar') }}" class="btn btn-danger">{{ __('test.AR_Lang') }}</a>
    </div>

    <h1 class="dispaly-3">{{__('test.Welcome')}}</h1>
    <p>{{__('test.test_p')}}</p>
    <div class="row">
        <ul class="row">
            <li>{{__('test.Home')}}</li>
            <li>{{__('test.About Us')}}</li>
            <li>{{__('test.Contact')}}</li>
            <li>{{__('test.More')}}</li>
        </ul>
    </div>
</div>

@endsection
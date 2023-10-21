@extends('layouts.default')

@section('content')
<div class="container beers">
    <div class="row">

    </div>

    <button id="loadmore" class="btn btn-primary" data-page="1" onclick="return fetchBeer();">{{ __('Load more') }}</button>
</div>
@endsection
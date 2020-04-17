@php
use Capmega\Base\Widgets\Grid\Details;
use Capmega\Base\Widgets\Information\BreadCrumb;
@endphp
@extends('base::layouts.main')

@section('title_tab', __('base::messages.dashboard'))

@section('content')
    @card({{__('base::messages.dashboard')}})

    @endcard()
@endsection

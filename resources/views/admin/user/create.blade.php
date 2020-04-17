@php
use Capmega\Base\Widgets\Information\BreadCrumb;
use Capmega\Base\Widgets\Messages\Error;
@endphp

@extends('base::layouts.main')

@section('title_tab', __('attributes.user.create'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'user.index' => __('attributes.user.items'),
        'Active'    => __('attributes.user.create'),
        ]) ?>
@endsection

@section('content')
    @card({{__('attributes.user.create')}})
    <?= Error::generate($errors) ?>
    <form action="{{route('user.store')}}" method="post" novalidate>
        @csrf
        @include('admin.user._form')
    </form>
    @endcard()
@endsection

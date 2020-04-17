@php
use Capmega\Base\Widgets\Information\BreadCrumb;
use Capmega\Base\Widgets\Form\ActiveField;
use Capmega\Base\Widgets\Messages\Error;
ActiveField::$rules = 'rulesUpdate';
@endphp

@extends('base::layouts.main')

@section('title_tab', __('attributes.user.edit'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'user.index' => __('attributes.user.items'),
        'Active'    => __('attributes.user.edit'),
        ]) ?>
@endsection

@section('content')
    @card({{__('attributes.user.edit')}})
        <?= Error::generate($errors) ?>
        <form action="{{route('user.update', $model->name)}}" method="post">
            @csrf
            @method('PUT')
            @include('admin.user._form')
        </form>
    @endcard()
@endsection

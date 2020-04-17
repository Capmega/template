@php
use Capmega\Base\Widgets\Grid\Details;
use Capmega\Base\Widgets\Information\BreadCrumb;
@endphp
@extends('base::layouts.main')

@section('title_tab', __('attributes.user.show'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'user.index' => __('attributes.user.items'),
        'Active'    => __('attributes.user.show'),
        ]) ?>
@endsection

@section('content')
    @card({{__('attributes.user.show')}})
        <?= Details::generate($model, [
            'id',
            'name',
            'email',
            'created_at',
            'updated_at',
            'status',
        ])?>
    @endcard()
@endsection

@php
use Capmega\Base\Widgets\Grid\GridView;
use Capmega\Base\Widgets\Information\BreadCrumb;
use Capmega\Base\Widgets\Messages\Alert;
@endphp
@extends('base::layouts.main')

@section('title_tab', __('attributes.user.items'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'Active'    => __('attributes.user.items'),
        ]) ?>
@endsection

@section('content')
    @card({{__('attributes.user.items')}})
    <div class="form-group">
        <a href="{{route('user.create')}}" class="btn btn-primary"> @lang('attributes.user.create') </a>
    </div>
    <?= Alert::generate() ?>
    <?= GridView::generate([
        'model' => $model,
        'models' => $models,
        'route' => 'user',
        'key' => 'seoname',
        'attributes' => [
            'name',
            'email',
            'created_at',
            'status',
        ]
    ])?>
    @endcard
@endsection

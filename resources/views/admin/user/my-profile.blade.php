@php
use Capmega\Base\Widgets\Grid\Details;
use Capmega\Base\Widgets\Information\BreadCrumb;
use Capmega\Base\Widgets\Form\ActiveField;
use Capmega\Base\Widgets\Messages\Error;

@endphp
@extends('base::layouts.main')

@section('title_tab', __('attributes.user.my-profile'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'Active'    => __('attributes.user.my-profile'),
        ]) ?>
@endsection

@section('content')
    @card({{__('attributes.user.my-profile')}})
    <?= Error::generate($errors) ?>
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('my-profile')}}" method="post" novalidate>
                @csrf
                <?= ActiveField::Input($model, 'firstname')?>
                <?= ActiveField::Input($model, 'lastname1')?>
                <?= ActiveField::Input($model, 'lastname2')?>
                <?= ActiveField::Input($model, 'description')->textArea(['class' => 'form-control'])?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('base::messages.save')</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <img class="img-fluid rounded-circle width-300" src="{{asset('images/profile.png')}}" alt="">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-outline-info btn-block"><i class="ft-upload"></i> {{ __('attributes.user.change_image') }}</button>
                <button type="button" class="btn btn-outline-danger btn-block"><i class="ft-trash-2"></i> {{ __('attributes.user.delete_image') }}</button>
            </div>
            <form action="{{route('my-profile')}}" method="post" novalidate>
                @csrf
                <?= ActiveField::Input($model, 'password')->passwordInput()?>
                <?= ActiveField::Input($model, 'password_confirmation')->passwordInput()?>

                 <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('base::messages.save')</button>
                </div>
            </form>
            <br>
        </div>
    </div>
    @endcard()
@endsection

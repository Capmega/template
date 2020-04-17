@php
use Capmega\Base\Widgets\Form\ActiveField;
ActiveField::$errors = $errors;
@endphp

<?= ActiveField::Input($model, 'name')?>
<?= ActiveField::Input($model, 'email')?>
<?= ActiveField::Input($model, 'password')->passwordInput()?>
<?= ActiveField::Input($model, 'password_confirmation')->passwordInput()?>

<div class="form-group">
    <button type="submit" class="btn btn-primary">@lang('base::messages.save')</button>
</div>

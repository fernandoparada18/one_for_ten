<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Completo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Card Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_card', 'Cedula:') !!}
    {!! Form::text('id_card', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Telefono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('patrols.index') }}" class="btn btn-default">Cancel</a>
</div>

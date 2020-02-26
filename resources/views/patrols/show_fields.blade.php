<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre Completo:') !!}
    <p>{{ $patrol->name }}</p>
</div>

<!-- Id Card Field -->
<div class="form-group">
    {!! Form::label('id_card', 'Cedula:') !!}
    <p>{{ $patrol->id_card }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Dirección:') !!}
    <p>{{ $patrol->address }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Telefono:') !!}
    <p>{{ $patrol->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $patrol->email }}</p>
</div>


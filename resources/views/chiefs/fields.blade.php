<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
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

<hr>
<h2>1X10</h2>
<hr>

<div class="row">	
    <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="Nombre Completo"/>
    </div>
    <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="Cedula"/>
    </div>
    <div class="col-sm-3">
        <input class="form-control" type="text" placeholder="Direccón"/>
    </div>
    <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="Telefono"/>
    </div>
    <div class="col-sm-2">
        <input class="form-control" type="email" placeholder="Correo"/>
    </div>
    <div class="col-sm-1">
        <button class="btn btn-primary form-control" data-toggle="tooltip" data-placement="top" title="Añadir">
            <i class="glyphicon glyphicon-plus"></i>
        </button>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('chiefs.index') }}" class="btn btn-default">Cancelar</a>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $chief->name }}</p>
</div>

<!-- Id Card Field -->
<div class="form-group">
    {!! Form::label('id_card', 'Cedula:') !!}
    <p>{{ $chief->id_card }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Dirección:') !!}
    <p>{{ $chief->address }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Telefono:') !!}
    <p>{{ $chief->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $chief->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $chief->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $chief->updated_at }}</p>
</div>

<hr>
	<h1><center>Amigos mayores de edad</center></h1>
<hr>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
				<th>Cédula</th>
                <th>Nombre</th>               
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chief->patrols as $item)
            <tr>
				<td>{{ $item->id_card }}</td>
                <td>{{ $item->name }}</td>               
                <td>{{ $item->address }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


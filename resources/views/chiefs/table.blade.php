<div class="table-responsive">
    <table class="table" id="chiefs-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($chiefs as $chief)
            <tr>
                <td>{{ $chief->name }}</td>
                <td>{{ $chief->id_card }}</td>
                <td>{{ $chief->address }}</td>
                <td>{{ $chief->phone }}</td>
                <td>{{ $chief->email }}</td>
                <td>
                    {!! Form::open(['route' => ['chiefs.destroy', $chief->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('chiefs.show', [$chief->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @if(!$chief->approved)
                        <a href="{{ route('chiefs.approved', [$chief->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-ok"></i></a>
                        @endif
                        <a href="{{ route('chiefs.edit', [$chief->id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está Seguro que desea eliminar esté Registro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

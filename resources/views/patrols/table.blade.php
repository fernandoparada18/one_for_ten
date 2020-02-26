<div class="table-responsive">
    <table class="table" id="patrols-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Cedula</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Registrador</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patrols as $patrol)
            <tr>
                <td>{{ $patrol->name }}</td>
            <td>{{ $patrol->id_card }}</td>
            <td>{{ $patrol->address }}</td>
            <td>{{ $patrol->phone }}</td>
            <td>{{ $patrol->email }}</td>
            <td>{{ $patrol->chief->name }}</td>
                <td>
                    {!! Form::open(['route' => ['patrols.destroy', $patrol->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patrols.show', [$patrol->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patrols.edit', [$patrol->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

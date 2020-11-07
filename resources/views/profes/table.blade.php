<div class="table-responsive">
    <table class="table" id="profes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Score</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profes as $profe)
            <tr>
                <td>{{ $profe->name }}</td>
                <td>{{ $profe->email }}</td>
                <td>{{ $profe->score }}</td>
                <td>
                    {!! Form::open(['route' => ['profes.destroy', $profe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('profes.show', [$profe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('profes.edit', [$profe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

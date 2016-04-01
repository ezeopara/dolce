<table class="table table-responsive">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Key</th>
        <th>Remember Token</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ercas as $ercas)
        <tr>
            <td>{!! $ercas->name !!}</td>
            <td>{!! $ercas->email !!}</td>
            <td>{!! $ercas->password !!}</td>
            <td>{!! $ercas->phone !!}</td>
            <td>{!! $ercas->role !!}</td>
            <td>{!! $ercas->key !!}</td>
            <td>{!! $ercas->remember_token !!}</td>
            <td>{!! $ercas->created_at !!}</td>
            <td>{!! $ercas->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['ercas.destroy', $ercas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ercas.show', [$ercas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ercas.edit', [$ercas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
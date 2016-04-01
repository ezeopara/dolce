<table class="table table-responsive">
    <thead>
        
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($$Ercas$s as $$Ercas$)
        <tr>
            
            <td>
                {!! Form::open(['route' => ['$Ercas$s.destroy', $$Ercas$->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('$Ercas$s.show', [$$Ercas$->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('$Ercas$s.edit', [$$Ercas$->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
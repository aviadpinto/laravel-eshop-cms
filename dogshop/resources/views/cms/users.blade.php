@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Users & Admin </h1>

@if ($users)
<br><br>
          <div class="table-responsive">
            <table class="table table-striped table-responsive">
        <tr style="background-color: #e5e5f0">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created at</th>
            <th>Change Roll</th>
            <th>Delete User</th>
        </thead>  
        <tbody>    
        </tr>
        @foreach ($users as $row)
        <tr>
            
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>

            <td>{{ $row->created_at }}</td>
            <td> @if ( $row->roll_id == 4 )
                    <a href="{{ url('cms/users/'. $row->id .'/edit') }}" class="btn btn-danger"><i class="fa fa-lock" aria-hidden="true"></i> Make Admin</a>
                @elseif ( $row->roll_id == 3 )
                    <a href="{{ url('cms/users/'. $row->id .'/edit') }}" class="btn btn-info"><i class="fa fa-unlock" aria-hidden="true"></i> Cancel Admin</a>
                @endif
            </td>
            <td><a href="{{url('cms/users/'.$row->id)}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif


@endsection


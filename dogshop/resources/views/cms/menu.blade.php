@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Menu</h1>
<p><a class="btn btn-info" href="{{url('cms/menu/create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add New Page</a></p>

@if ($menu)
<br><br>
          <div class="table-responsive">
            <table class="table table-striped">
        <tr style="background-color: #e5e5f0">
        <thead>
            <th>Pages</th>
            <th>Last Update</th>
            <th>Edit / Delete</th>
        </thead>  
        <tbody>    
        </tr>
        @foreach ($menu as $row)
        <tr>
            <td>{{ $row['link'] }}</td>
            <td>{{ $row['updated_at'] }}</td>
            <td>
                <a href="{{ url('cms/menu/'. $row['id'] .'/edit') }}" class="btn btn-info"><i class="fa fa-scissors" aria-hidden="true"></i> Edit</a>
                <a href="{{url('cms/menu/'.$row['id'])}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif


@endsection


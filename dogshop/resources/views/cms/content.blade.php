@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Contents</h1>
<p><a class="btn btn-info" href="{{url('cms/content/create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add New Content</a></p>

@if ($content)
<br><br>
          <div class="table-responsive">
            <table class="table table-striped">
        <tr style="background-color: #e5e5f0">
        <thead>
            <th>Title</th>
            <th>Last Update</th>
            <th>Edit / Delete</th>
        </thead>  
        <tbody>    
        </tr>
        @foreach ($content as $row)
        <tr>
            <td>{{ $row['title'] }}</td>
            <td>{{ $row['updated_at'] }}</td>
            <td>
                <a href="{{ url('cms/content/'. $row['id'] .'/edit') }}" class="btn btn-info"><i class="fa fa-scissors" aria-hidden="true"></i> Edit</a>
                <a href="{{url('cms/content/'.$row['id'])}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif


@endsection


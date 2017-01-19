@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Categories</h1>
<p><a class="btn btn-info" href="{{url('cms/categories/create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add New Category</a></p>

@if ($categories)
<br><br>
          <div class="table-responsive">
            <table class="table table-striped">
        <tr style="background-color: #e5e5f0">
        <thead>
            <th>Title</th>
            <th>Image</th>
            <th>Last Update</th>
            <th>Edit / Delete</th>
        </thead>
        </tr>
        <tbody>    
        @foreach ($categories as $row)
        <tr>
            <td>{{ $row['title'] }}</td>
            <td><img src="{{asset('img/categories/'. $row['image'])}}" width="80" border="0" class="img-responsive"></td>
            <td>{{ $row['updated_at'] }}</td>
            <td>
                <a href="{{ url('cms/categories/'. $row['id'] .'/edit') }}" class="btn btn-info"><i class="fa fa-scissors" aria-hidden="true"></i> Edit</a>
                <a href="{{url('cms/categories/'.$row['id'])}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif


@endsection


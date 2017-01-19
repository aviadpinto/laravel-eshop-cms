@extends('cms.master')

@section('cms_content')

<h1 class="page-header"><a href="{{url('cms/content')}}">Contents</a> >> Edit Article Content</h1>

<div class="col-md-12">
   
        <div class="cool-block">
            <div class="cool-block-bor">
                <h3>Edit a Content</h3>
                <hr>
                <form class="form-horizontal" action="{{url('cms/content/'.$content['id'])}}" method="POST">
                    {{ csrf_field() }} 
                    {{ method_field('PUT') }}
                    
                    <div class="form-group">
                        <label for="page" class="col-lg-2 control-label">Menu</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="menu" id="InputPage">
                                @foreach ($menu as $row)
                                <option value="{{ $row->id }}">{{ $row->link }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ $content['title'] }}" class="form-control" id="inputTitle" placeholder="Article title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article" class="col-lg-2 control-label">Article</label>
                        <div class="col-lg-10">
                            <textarea name="article" class="form-control target-text-input"  id="summernote" style="width:900px"> {{ $content['article'] }} </textarea>
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Update Content"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/content')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>          
</div>


@endsection


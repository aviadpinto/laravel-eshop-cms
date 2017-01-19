@extends('cms.master')

@section('cms_content')
<h1 class="page-header"><a href="{{url('cms/content')}}">Contents</a> >> Add Content</h1>

<div class="col-md-12">
   
        <div class="cool-block">
            <div class="cool-block-bor">
                <h3>Adding new Content</h3>
                <hr>
                <form class="form-horizontal" action="{{url('cms/content')}}" method="POST">
                    {{ csrf_field() }} 
                    <div class="form-group">
                        <label for="page" class="col-lg-2 control-label">Menu</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="menu" id="InputPage">
                                <option value="">Choose Page:</option>
                                @foreach ($menu as $row)
                                <option value="{{ $row['id'] }}">{{ $row['link'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="inputTitle" placeholder="Article title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article" class="col-lg-2 control-label">Article</label>
                        <div class="col-lg-10">
                            <textarea name="article" class="form-control"  id="summernote" style="width:900px"> {{ old('article') }} </textarea>
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="submit" class="btn btn-info" value="Save Content"> &nbsp &nbsp
                            <a class="btn btn-danger" href="{{url('cms/content')}}"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</div>

@endsection


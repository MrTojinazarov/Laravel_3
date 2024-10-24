@extends('Admin.main')

@section('title', 'Create')

@section('content')

    <div class="row pt-3">
        <div class="col-12">
            <a href="/category" class="btn btn-primary" style="width: 100px">Back</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Post</h3>
                </div>
                <form action="/post" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Post title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title')}}" id="name" placeholder="Post title">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="c_id">Category</label>
                            <select name="category_id" class="form-control" id="c_id">
                                <option value="">Choose</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="body">Post body</label>
                            <textarea name="body"  class="form-control" id="body" cols="30" rows="3" placeholder="Text"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

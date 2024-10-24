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
                    <h3 class="card-title">Add Category</h3>
                </div>
                <form action="/category" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
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

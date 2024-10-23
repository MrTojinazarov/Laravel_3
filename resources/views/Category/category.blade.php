@extends('Admin.main')

@section('title', 'Categories')

@section('content')

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Categories Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                  </tr>
                </thead>
                @foreach ($categories as $category)
                <tbody>
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
    </div>
</div>

@endsection

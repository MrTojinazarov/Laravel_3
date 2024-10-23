@extends('Admin.main')

@section('title', 'Likes')

@section('content')


<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Likes Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Post_id</th>
                    <th>User_id</th>
                    <th>Is_active</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                  </tr>
                </thead>
                @foreach ($Likes as $Like)
                <tbody>
                <tr>
                    <td>{{$Like->id}}</td>
                    <td>{{$Like->post_id}}</td>
                    <td>{{$Like->user_id}}</td>
                    <td>{{$Like->is_active}}</td>
                    <td>{{$Like->created_at}}</td>
                    <td>{{$Like->updated_at}}</td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
    </div>
</div>
@endsection

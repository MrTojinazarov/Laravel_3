@extends('Admin.main')

@section('title', 'Comments')

@section('content')

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Comments Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Post_id</th>
                    <th>Body</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                  </tr>
                </thead>
                @foreach ($comments as $comment)
                <tbody>
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->post_id}}</td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at}}</td>
                    <td>{{$comment->updated_at}}</td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
    </div>
</div>

@endsection

@extends('Admin.main')

@section('title', 'Comments')

@section('content')

<div class="row pt-3">
    <div class="col-12">
        <a href="comment-create" class="btn btn-primary" style="width: 100px">Create</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        @if(session('success'))
            
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        
        @endif
    </div>
</div>


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
                    <th>Options</th>
                    <th>Delete</th>

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
                    <td><a href="/comment/{{$comment->id}}" class="btn btn-primary">Show</a></td>
                    <td>
                      <form action="/comment/{{$comment->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
    </div>
</div>

@endsection

@extends('Admin.main')

@section('content')

<div class="row pt-3">
    <div class="col-12">
        <a href="/post" class="btn btn-primary" style="width: 100px">Back</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        <h1>Post_id: {{$model->post_id}}</h1>
        <h1>Body: {{$model->body}}</h1>
        <h1>Yaratilgan: {{$model->created_at}}</h1>
        <h1>O'zgartirilgan: {{$model->updated_at}}</h1>
    </div>
</div>


@endsection
@extends('layouts.app')

@section('title')Index @endsection

@section('content')

<div class="card">
  <div class="card-header">Post Info</div>
  <div class="card-body">

    <div class="d-flex ">
  <h6> Title : &nbsp; </h6>
  <span> {{ $postInfo['title'] }}</span>
  </div>
    <h6> Description : </h6> <p>  {{ $postInfo['description'] }}</p>
  </div>
</div>

<br>
<br>

<div class="card">
  <div class="card-header">Post Createor Info </div>
  <div class="card-body ">

  <div class="d-flex ">
  <h6> Name : &nbsp; </h6>
  <span> {{ $postInfo['posted_by'] }} </span>
  </div>

  <div class="d-flex ">
  <h6> Email :&nbsp;  </h6>
  <span> {{ $postInfo['email'] }} </span>
  </div>

  <div class="d-flex ">
  <h6> Created At  : &nbsp; </h6>
  <span> {{ $postInfo['created_at'] }} </span>
  </div>

  </div>
</div>


@endsection
    
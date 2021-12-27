@extends('layouts.default')
@section('content')
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
      <h1>Hello Laravel</h1>
      <p class="lead">
        一切将从这里开始
      </p>
      <p>
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
      </p>
    </div>
  </div>
@endsection

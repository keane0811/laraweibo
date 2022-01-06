@extends('layouts.default')
@section('title', '更新密码')

@section('content')
  <div class="offset-md-1 col-md-10">
    <div class="card">
      <div class="card-header">
        <h5>更新密码</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('password.update') }}" method="POST">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="mb-3 row">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email 地址</label>
            <div class="col-md-6">
              <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                name="email" value="{{ $email ?? old('email') }}" required autofocus>
            </div>
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="mb-3 row">
            <label for="password" class="col-md-4 col-form-label text-md-end">密码</label>
            <div class="col-md-6">
              <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                id="password" name="password" required>
            </div>
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>

          <div class="mb-3 row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">确认密码</label>
            <div class="col-md-6">
              <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
            </div>
          </div>

          <div class="mb-0 row">
            <div class="offset-md-4 col-md-6">
              <button class="btn btn-primary" type="submit">重置密码</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

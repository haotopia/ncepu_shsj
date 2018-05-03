@extends('layouts.app')

@section('content')

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('stu_id') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="stu_id" type="text" class="form-control" name="stu_id" value="{{ old('stu_id') }}" placeholder="请输入学号" required autofocus>

                                @if ($errors->has('stu_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stu_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="请输入邮箱" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="请输入密码" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="请再次输入密码" required>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('captcha') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="captcha" class="form-control" name="captcha" placeholder="请输入验证码">

                                <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    激活
                                </button>
                            </div>
                        </div>
                    </form>

@endsection

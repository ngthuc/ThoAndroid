@extends('layouts.login')

@section('content')

    <div class="container align-items-center" >
        <div class="row align-items-center" style="margin-top:5%;">
            <div class="col-md-5 col-md-offset-3" >
                <div>
                    <div class="col-md-12 col-md-offset-0" style="margin-top:5%;">
                        <div class="panel panel-primary" style="height:250px;box-shadow: 2px 4px 5px 2px rgba(0,0,0,0.2);">
                            <div class="panel-heading" style="" id="lg">
                                <h3 class="panel-title text-center"><b>HỆ THỐNG HELPDESK</b></h3>
                            </div>

                            <div class="panel-body">
                                <form class="form-group" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <fieldset>


                                        <div class="form-group input-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus class="form-control" placeholder="Nhập tài khoản" style="margin-right:0;">
                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>



                                        <div class="form-group input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input id="password" type="password" class="form-control" name="password" required placeholder="Nhập mật khẩu">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12 col-md-offset-0">
                                                <button type="submit" class="btn btn-primary btn-block" style="width:70%; margin-left:15%;margin-top:30px;">
                                                    Login
                                                </button>


                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
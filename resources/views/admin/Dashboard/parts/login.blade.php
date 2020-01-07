@extends('admin.layout.log')

@section('login')

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

            <div class="col-lg-11">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user" method="POST" action="{{route('admin.login.post')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                   aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                   placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="rememberme">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        {{--                        <input class="btn btn-primary btn-user btn-block" type="button"  value="Login"/>--}}
                        <button type="submit" class="btn btn-primary btn btn-primary btn-user btn-block">
                            {{ __('Login') }}
                        </button>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{route('admin.register')}}">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
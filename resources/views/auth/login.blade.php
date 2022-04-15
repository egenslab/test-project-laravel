@extends('layouts.auth-master')

@section('content')
    <div class="container" style="padding-top: 50px;">
        <div class="card">
            <div class="card-body">
            <form method="post" action="{{ route('login.perform') }}" style="padding: 100px;">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img class="mb-4" src="{!! url('https://egenslab.b-cdn.net/wp-content/uploads/2021/07/logo.png') !!}" alt="">

                <h1 class="h3 mb-3 fw-normal">Login</h1>

                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3">
                    <label for="floatingName">Email or Username</label>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                @include('auth.partials.copy')
            </form>
       </div>
        </div>
    </div>
@endsection


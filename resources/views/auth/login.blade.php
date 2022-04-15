@extends('layouts.auth-master')

@section('content')
    <div class="container" style="padding-top: 50px;">
        <div class="card">
            <div class="card-body">
            <form method="post" action="{{ route('login.perform') }}" style="padding: 100px;">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img class="mb-4" src="{!! url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS17AAHBpK3Lav0_tJ4fRb7u1GipsxAHslOv-ZJVFyf_HxGNZJsDcz03JivP1ILImGHNqg&usqp=CAU') !!}" alt="" style=" width: 157px;">

                <h1 class="h3 mb-3 fw-normal">Login</h1>

                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3">
                    <label for="floatingName">Email or Username</label>
                    <input type="text" class="form-control" name="username" value="admin@gmail.com" placeholder="Username" required="required" autofocus >
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" name="password" value="12345678" placeholder="Password" required="required">
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <a href="{{ route('register.perform') }}" class="w-100 btn btn-lg btn-primary" style="margin-top: 20px;">Registrations</a>
                @include('auth.partials.copy')
            </form>
       </div>
        </div>
    </div>
@endsection


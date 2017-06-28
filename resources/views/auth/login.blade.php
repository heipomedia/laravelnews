@extends('layouts.app')

@section('content')

    <h4>Login</h4>

    <hr>

    <form role="form" method="POST" action="{{ route('login') }}">

        {{ csrf_field() }}

        <label>E-Mail Adresse

            @if ($errors->has('email'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif

            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </label>

        <label>Passwort

            @if ($errors->has('password'))
                <span class="is-invalid-label">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <input type="password" name="password" required>
        </label>

        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Eingeloggt bleiben
        </label>

        <button type="submit" class="button primary expanded">
            Login
        </button>

        <div class="text-center">
            <a href="{{ route('password.request') }}">
                <small>Hast du dein Passwort vergessen?</small>
            </a>
        </div>

    </form>

@endsection

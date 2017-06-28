@extends('layouts.app')

@section('content')

    <h4>Passwort zurücksetzen</h4>

    <hr>

    @if (session('status'))
        <div class="callout success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.request') }}">

        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <label>E-Mail Adresse

            @if ($errors->has('email'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif

            <input type="email" name="email" value="{{ $email or old('email') }}" required autofocus>

        </label>

        <label>Passwort

            @if ($errors->has('password'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif

            <input type="password" name="password" required>

        </label>


        <label>Passwort bestätigen

            @if ($errors->has('password_confirmation'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('password_confirmation') }}</small>
                </span>
            @endif

            <input type="password" name="password_confirmation" required>

        </label>

        <button type="submit" class="button primary expanded">
            Passwort zurücksetzen
        </button>

    </form>

@endsection

@extends('layouts.app')

@section('content')

    <h4>Registrieren</h4>

    <hr>

    <form role="form" method="POST" action="{{ route('register') }}">

        {{ csrf_field() }}

        <label>Name

            @if ($errors->has('name'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif

            <input type="text" name="name" value="{{ old('name') }}" required autofocus>

        </label>

        <label>E-Mail Adresse

            @if ($errors->has('email'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif

            <input type="email" name="email" value="{{ old('email') }}" required>

        </label>

        <label>Password

            @if ($errors->has('password'))
                <span class="is-invalid-label">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <input type="password" name="password" required>

        </label>


        <label>Passwort bestätigen

            <input type="password" name="password_confirmation" required>

        </label>

        <button type="submit" class="button primary expanded">
            Registrieren
        </button>

    </form>

@endsection

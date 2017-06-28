@extends('layouts.app')

@section('content')

    <h4>Passwort zurücksetzen</h4>

    <hr>

    @if (session('status'))
        <div class="callout success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.email') }}">

        {{ csrf_field() }}

        <label>E-Mail Adresse

            @if ($errors->has('email'))
                <span class="is-invalid-label">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif

            <input type="email" name="email" value="{{ old('email') }}" required>

        </label>

        <button type="submit" class="button primary expanded">
            Passwort zurücksetzen
        </button>

    </form>

@endsection

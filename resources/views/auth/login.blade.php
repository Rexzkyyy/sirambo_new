@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="brand">
            <div class="brand__mark">SR</div>
            <div class="brand__text">
                <span class="brand__title">Sirambo</span>
                <span class="brand__subtitle">Portal Admin</span>
            </div>
        </div>

        <h1 class="title">Masuk ke dashboard</h1>
        <p class="subtitle">Gunakan email dan password dari tabel users untuk mengakses Sirambo.</p>

        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="current-password"
                    required
                >
            </div>

            <div class="field" style="flex-direction: row; align-items: center; gap: 10px; margin-bottom: 24px;">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} style="width: 18px; height: 18px;">
                <label for="remember" style="margin: 0; font-weight: 500;">Ingat saya</label>
            </div>

            <button class="btn btn--primary" type="submit">Masuk</button>
        </form>

        <p class="helper">Pengguna contoh tersedia lewat seeder: test@example.com / password.</p>
    </div>
@endsection

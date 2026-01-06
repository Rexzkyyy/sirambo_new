@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <div class="dashboard__header">
            <div class="brand">
                <div class="brand__mark">SR</div>
                <div class="brand__text">
                    <span class="brand__title">Sirambo Dashboard</span>
                    <span class="brand__subtitle">Terkoneksi ke tabel users</span>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn logout">Keluar</button>
            </form>
        </div>

        <div class="dashboard__grid">
            <div class="dashboard__card">
                <h2 class="title" style="margin-bottom: 8px;">Halo, {{ $user->name }}</h2>
                <p class="muted">Anda berhasil masuk menggunakan data dari tabel <strong>users</strong>. Semua data di bawah ditarik langsung dari akun yang terautentikasi.</p>
            </div>

            <div class="dashboard__card">
                <div class="badge">Profil pengguna</div>
                <div style="margin-top: 12px; display: grid; gap: 8px;">
                    <div><strong>Nama:</strong> {{ $user->name }}</div>
                    <div><strong>Email:</strong> {{ $user->email }}</div>
                    <div><strong>Dibuat:</strong> {{ $user->created_at?->format('d M Y, H:i') }}</div>
                    <div><strong>Diperbarui:</strong> {{ $user->updated_at?->format('d M Y, H:i') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

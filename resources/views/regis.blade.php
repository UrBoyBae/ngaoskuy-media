@extends('layouts.index')

@section('mainContent')
    <h1>halaman register</h1>
    <form method="post" action="{{ route('registrasi.proses') }}">
        @csrf
        <input type="text" name="name" id="name">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="password" name="password-verif" id="password-verif" placeholder="password">
        <button type="submit">submit</button>
    </form>
@endsection

@extends('layout.master')
@section('title', $title)

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="/user/auth/sign-in" method="post">
            @include('components.socialButtons')
            @include('components.validationErrorMessage')
            <label>
                Email:
                <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            </label>
            <label>
                密碼:
                <input type="password" name="password" placeholder="密碼" value="{{ old('password') }}">
            </label>
            {!! csrf_field() !!}
            <button type="submit">login</button>
        </form>
    </div>
@endsection

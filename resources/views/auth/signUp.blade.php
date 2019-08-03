@extends('layout.master')
@section('title', $title)

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="/user/auth/sign-up" method="post">
            @include('components.socialButtons')
            @include('components.validationErrorMessage')
            <label>
                暱稱:
                <input type="text" name="nickname" placeholder="暱稱" value="{{ old('nickname') }}">
            </label>
            <label>
                Email:
                <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            </label>
            <label>
                密碼:
                <input type="password" name="password" placeholder="密碼" value="{{ old('password') }}">
            </label>
            <label>
                確認密碼:
                <input type="password" name="password_confirmation" placeholder="check_密碼" value="{{ old('password_confirmation') }}">
            </label>
            <label>
                帳號類型:
                <select name="type">
                    <option value="G">normal</option>
                    <option value="A">manager</option>
                </select>
            </label>
            {!! csrf_field() !!}
            <button type="submit">register</button>
        </form>
    </div>
@endsection

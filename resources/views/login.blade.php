<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <div class="login-info">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="logo">
            <h1>Log in to <br> your account</h1>
        </div>
        <div class="login-form">
            <h2 >Log in</h2>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('userName') }}" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="password-toggle-icon"></span>
                </div>
                <div class="form-group">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-button">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
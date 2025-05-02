<x-guest-layout>
    <div class="login-container">
        <div class="login-card">
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="error-message" />

            @session('status')
                <div class="status-message">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                </div>

                <div class="checkbox-group">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me">Remember me</label>
                </div>

                <div class="actions">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot your password?</a>
                    @endif

                    <button type="submit" class="login-button">Log in</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* General Page Styling */
        body {
            background-color:rgb(148, 104, 104); /* Dark background */
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            background:rgb(0, 0, 0); /* Dark gray */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            width: 350px;
            text-align: center;
        }

        /* Input Fields */
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #bbb;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            background: #2a2a2a;
            border: 1px solid #444;
            color: white;
            border-radius: 5px;
            font-size: 14px;
        }

        .input-group input:focus {
            outline: none;
            border-color: #777;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkbox-group input {
            margin-right: 8px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #bbb;
        }

        /* Actions */
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .forgot-password {
            color: #bbb;
            font-size: 12px;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: white;
            text-decoration: underline;
        }

        /* Login Button */
        .login-button {
            background: rgb(148, 104, 104);
            ;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #666;
        }

        /* Error Messages */
        .error-message {
            color: red;
            margin-bottom: 15px;
        }

        .status-message {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</x-guest-layout>

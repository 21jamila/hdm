@extends('layouts.app')

@section('content')
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient-primary py-4 rounded-top-4">
                    <h3 class="text-center text-white mb-0">{{ __('Login') }}</h3>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label text-secondary">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-secondary">{{ __('Password') }}</label>
                            <input id="password" type="password" 
                                   class="form-control rounded-3 @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password"
                                   placeholder="••••••••">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" 
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-secondary" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-primary" 
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 py-3 text-uppercase fw-bold">
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg,rgb(193, 87, 77) 0%,#ff6f61 100%);
    }
    
    .card {
        border: none;
        overflow: hidden;
    }
    
    .form-control {
        padding: 12px 20px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #ff6f61;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    .btn-primary {
        background-color: #ff6f61;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #ff6f61;
        transform: translateY(-1px);
    }
    
    .text-primary {
        color:#ff6f61 !important;
        transition: all 0.2s ease;
    }
    
    .text-primary:hover {
        color: #ff6f61!important;
    }
    
    .rounded-4 {
        border-radius: 1rem !important;
    }
    
    .rounded-top-4 {
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }
</style>
@endsection
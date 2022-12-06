@extends('layouts.guest-master')
@section('title')Login @endsection
@section('content')
{{-- <x-jet-authentication-card>
    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>

    <div class="card-body">

        <x-jet-validation-errors class="mb-3 rounded-0" />

        @if (session('status'))
        <div class="alert alert-success mb-3 rounded-0" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <x-jet-label value="{{ __('Email') }}" />

                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                    :value="old('email')" required />
                <x-jet-input-error for="email"></x-jet-input-error>
            </div>

            <div class="mb-3">
                <x-jet-label value="{{ __('Password') }}" />

                <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                    name="password" required autocomplete="current-password" />
                <x-jet-input-error for="password"></x-jet-input-error>
            </div>

            <div class="mb-3">
                <div class="custom-control custom-checkbox">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <label class="custom-control-label" for="remember_me">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="mb-0">
                <div class="d-flex justify-content-end align-items-baseline">
                    @if (Route::has('password.request'))
                    <a class="text-muted me-3" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <x-jet-button>
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </div>
</x-jet-authentication-card> --}}

<!-- BEGIN #app -->
<div id="app" class="app app-full-height app-without-header">
    <!-- BEGIN login -->
    <div class="login">
        <!-- BEGIN login-content -->
        <div class="login-content">
            <form action="{{ route('login') }}" method="POST">

                {{-- <x-jet-validation-errors class="mb-3 rounded-0" /> --}}

                <h1 class="text-center">HUD</h1>
                <div class="text-white text-opacity-50 text-center mb-4">
                    {{-- For your protection, please verify your identity. --}}
                </div>
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="form-control form-control-lg bg-white bg-opacity-5 {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control form-control-lg bg-white bg-opacity-5 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                        name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>



                <x-jet-button class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">
                    {{ __('Log in') }}
                </x-jet-button>
                {{-- <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">{{ __('Log in') }}</button> --}}
                {{-- <div class="text-center text-white text-opacity-50">
                    Don't have an account yet? <a href="page_register.html">Sign up</a>.
                </div> --}}
            </form>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->
</div>
<!-- END #app -->

@endsection

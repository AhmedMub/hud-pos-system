@extends('layouts.master')
@section('content')
<x-jet-authentication-card>
    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>

                {{--
                <x-jet-validation-errors class="mb-3 rounded-0" /> --}}

                <h1 class="text-center">HUD</h1>
                <div class="text-white text-opacity-50 text-center mb-4">
                    {{-- For your protection, please verify your identity. --}}
                </div>
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input
                        class="form-control form-control-lg bg-white bg-opacity-5 {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        type="email" name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input
                        class="form-control form-control-lg bg-white bg-opacity-5 {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        type="password" name="password" required autocomplete="current-password" />
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

            </form>
        </div>
        <!-- END login-content -->
    </div>
</x-jet-authentication-card>
@endsection

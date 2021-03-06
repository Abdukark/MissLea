@extends('layouts.app')

@section('content')
<div class="d-none">
    @if (session('locale') == 'en')
        {{$StartOrEnd = 'end'}}
    @else
        {{$StartOrEnd = 'start'}}
    @endif
</div>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('auth.Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('auth.Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-{{$StartOrEnd}}">{{ __('auth.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-outline-dark">
                                    {{ __('auth.Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-dark" href="{{ route('password.request') }}">
                                        {{ __('auth.Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

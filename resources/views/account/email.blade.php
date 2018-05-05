@extends('account.account')

@section('accountAction')
    <h1 class="display-4 text-white">Change Email Address</h1>

    <div class="container-fluid mt-5">
        <form method="POST" action="/account/updateEmail">
            @csrf

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('confirmPassword') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('confirmPassword'))
                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('confirmPassword') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('New Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid':'' }}" name="email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn button">
                        {{ __('Change Email') }}
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection
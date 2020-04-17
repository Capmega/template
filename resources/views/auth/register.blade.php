@extends('base::layouts.empty')

@section('content')
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <img src="{{asset('app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                    </div>
                </div>
                <div class="card-content">
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Register With social media</span></p>
                    <div class="text-center">
                        <a href="{{route('social-auth', 'facebook')}}" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                        <a href="{{route('social-auth', 'twitter')}}" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                        <a href="{{route('social-auth', 'google')}}" class="btn btn-social-icon mr-1 mb-1 btn-outline-google"><span class="la la-google font-medium-4"></span></a>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Email</span></p>
                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Your Name" value="{{ old('name') }}"  autocomplete="name" autofocus required>
                            <div class="form-control-position">
                                <i class="ft-user"></i>
                            </div>
                        </fieldset>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Your Email" value="{{ old('email') }}"  autocomplete="email" autofocus required>
                            <div class="form-control-position">
                                <i class="ft-user"></i>
                            </div>
                        </fieldset>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" autocomplete="current-password" required>
                            <div class="form-control-position">
                                <i class="la la-key"></i>
                            </div>
                        </fieldset>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" autocomplete="new-password" required>
                            <div class="form-control-position">
                                <i class="la la-key"></i>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-user"></i> {{ __('Register') }}</button>
                    </form>
                  </div>
                  <div class="card-body">
                      <a href="{{route('login')}}" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Login</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

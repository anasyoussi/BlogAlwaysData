
                    
                

                    @extends('layouts.frontend.app')
                    @section('title', 'Login')
                    <!-- Start CSS -->
                    @push('css')
                        <link href="{{ asset('assets/frontend/css/auth/responsive.css') }}" rel="stylesheet"> 
                        <link href="{{ asset('assets/frontend/css/auth/styles.css') }}" rel="stylesheet">
                    @endpush
                    <!-- end Css -->
                    
                    @section('content')
                    
                    <!-- Start  -->
                    <section class="blog-area section">
                        <div class="container">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    
                            <div class="row">
                                <div class="col-lg-2 col-md-0"></div>
                                <div class="col-lg-8 col-md-12">
                                    <div class="post-wrapper">
                    
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                    
                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>                                        
                    
                                    </div><!-- post-wrapper -->
                                </div><!-- col-sm-8 col-sm-offset-2 -->
                            </div><!-- row -->
                    
                        </div><!-- container -->
                    </section><!-- section -->
                     
                    @endsection
                    
                    <!-- Start Scripts -->
                    @push('js')
                    
                    @endpush
                    <!-- End Scripts -->                    
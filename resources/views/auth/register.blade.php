@extends('layouts.app')

@section('content')
<div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="registration_page center_container">
                    <div class="center_content">
                        <div class="logo">
                            <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group icon_parent">
                                <label for="name">Username</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                            </div>
              <div class="form-group icon_parent">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                 
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password-confirm">Re-type Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group">
                                <a class="registration" href="{{ route('login') }}">Already have an account</a><br>
                                <button type="submit" class="btn btn-blue">Register</button>
                            </div>
                        </form>
                        <div class="footer">
                        <p>Copyright &copy; 2021 <a href="#">All rights reserved.</a></p>
                        </div>
                    </div>
                </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->
@endsection

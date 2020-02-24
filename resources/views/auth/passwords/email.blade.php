
	@include('home/assetss')

<body class="auth-page" style="background-color:#e9e9e9;">
	
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container user-auth" style="padding:40px;">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5" style="background:#fff; padding:40px;">
				<!-- Logo Starts -->
				<a class="visible-xs" href="{{url('/')}}" style="text-align:center; color:#555;">
				<h3>{{$settings->site_name}}</h3>
				<!-- <img id="logo" class="img-responsive" src="{{ asset('images/'.$settings->logo)}}" alt="logo">-->
				</a>
				<!-- Logo Ends -->
				@if(Session::has('message'))
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-warning"></i> {{ Session::get('message') }}
                        </div>
                    </div>
                </div>
                @endif
				
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h2 class="title-head" style="font-size:1.5em; color:#555;">Password reset</h2>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        
                            <label for="email" class="control-label">E-Mail Address</label>
                                <input style="background:transparent; color:#555;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                           
                        </div>
                    </form>
                        
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">Copyright © 2018 {{$settings->site_name}} All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->
</body>

</html>


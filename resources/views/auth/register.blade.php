	@include('home/assetss')
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<body class="auth-page" style="background-color:#e9e9e9;">
	
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container user-auth" style="padding:40px;">
			<div class="row">
			<div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5" style="background:#fff; padding:40px;">
				<!-- Logo Starts -->
				<div style="text-align:center;">
				<a href="{{url('/')}}">
			 		<img id="logo" src="{{ asset('images/'.$settings->logo)}}" alt="logo">   
				</a>
				</div>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h3 class="title-head" style="font-size:1.5em; color:#555;">member registration</h3>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form  class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}   
                        <!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="name" placeholder="ENTER YOUR FIRSTNAME" name="name" type="text" value="{{ old('name') }}" required autofocus>
                            
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!-- Input Field Ends -->
	
							<!-- Input Field Starts for lastname -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="name" placeholder="ENTER YOUR LASTNAME" name="l_name" type="text" value="{{ old('l_name') }}" required autofocus>
                            
                                @if ($errors->has('l_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!-- Input Field Ends -->

                        <!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="email" placeholder="ENTER YOUR EMAIL" name="email" type="email" value="{{ old('email') }}" required>
                            
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" placeholder="MOBILE NUMBER" name="phone" type="number" value="{{ old('phone') }}" required>
                                
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
							</div
							
							
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								<input style="background:transparent; color:#555;" class="form-control" id="password" name="password" id="password" placeholder="ENTER PASSWORD" type="password" required>
							</div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="password" placeholder="RE-ENTER YOUR PASSWORD" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" required>
                                
							</div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            
                            
                            <div class="form-group">
								
								<select style="background:transparent; color:#555;" class="form-control" name="country">
								<option value="None">Select country</option>
								@foreach($countries as $country)
								<option value="{{$country}}">{{$country}}</option>
								@endforeach
								</select>
                            </div>
                            
                            
           






							<!-- Input Field Ends -->

							 <!-- Input Field Starts -->
						<!--	 <div class="form-group">
								<input name="sign" type="checkbox"  required> 
								I have read and agreed to the <a href="{{ route('terms') }}">Terms of Service</a> and 
								<a href="{{ route('privacy') }}">Privacy Policy</a>
                            </div>-->
							<!-- Input Field Ends -->

							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Create account</button>
                                
								<p class="text-center">Already a member?  <a href="{{route('login')}}">Login now</a></p>
							</div>
							<!-- Submit Form Button Ends -->
                        </form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">Copyright © 2019 {{$settings->site_name}} All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
			</div>
		</div>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>


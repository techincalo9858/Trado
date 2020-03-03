<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{$settings->site_name}} - {{$settings->site_title}}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('ot_temp1/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('ot_temp1/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('ot_temp1/css/style.css')}}" rel="stylesheet">
  
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('home/home/images/favicon.png')}}">
  <link href="{{asset('ot_temp1/css/frontend_style_'.$settings->site_colour.'.css')}}" rel="stylesheet">
  
  <link rel="stylesheet" href="{{asset('ot_temp1/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('ot_temp1/css/stylesheet.css')}}"> <!-- Resource style -->
  <link rel="stylesheet" href="{{asset('ot_temp1/css/demo.css')}} ">
  <link rel="stylesheet" href="{{asset('ot_temp1/css/animate.css')}}">
  <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
  
</head>

<body>
<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->

  <header id="home">
    <div class="hero">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ml-auto shadow">
          <a class="navbar-brand" href="./"><img src="public/images/{{$settings->logo}}" target="blank" alt="{{$settings->site_name}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto ml-auto">
  
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item" style="display:none">
                <a class="nav-link" href="#testimony">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              @if($settings->site_preference =="Web dashboard only")
              @guest
              <li class="nav-item">
                <a class="nav-link chng btn  bg-white text-primary " href="register"><i class="fas fa-user-plus"></i>Join</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn chng bg-white text-primary" href="login"><i class="fas fa-sign-in-alt"></i> Login</a>
              </li>
              @else
              <li class="nav-item avatar dropdown">
                <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                <a href="dashboard" class="dropdown-item text-dark">Dashboard</a>
                  <a href="{{ route('logout') }}" class="dropdown-item text-dark"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    	</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
              @endguest
                @else
                <li class="nav-item">
                  <a class="nav-link btn chng bg-white text-primary" href="{{$settings->bot_link}}"><i class="fas fa-sign-in-alt"></i> Get Started</a>
                </li>
                @endif
            </ul>
  
          </div>
        </nav>
        

        <!-- .........................................................................This section is for Sliding Text in the begining of the Page -->
        <section id="">
            <div class="container">
                <div class="row test pb-5 pt-5 wow fadeInUp">
                    <div class="col-md-6 imgtop order-sm-2">
                        <img src="{{asset('ot_temp1/img/people.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 slideshow-container order-sm-1">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for carousel items -->
                          <div class="carousel-inner">
                            <div class="item carousel-item active">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="">
                                    <div class="hero-heading">
                                        <h1>TRADE IN THE MOMENT,
                                          INVEST IN THE FUTURE</h1>
                                        <div class="hero-sub-title mt-2">
                                          <p>Put your investing ideas into action with a full range of
                                            investments.Enjoy real benefits and rewards on
                                            {{$settings->site_name}}.</p>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>			
                          </div>
      
                          <div class="item carousel-item">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="">
                                  <div class="hero-heading">
                                      <h1>WE PROCESS WITHDRAWAL
                                          REQUESTS PROMPTLY!</h1>
                                      <div class="hero-sub-title mt-2">
                                        <p>Put your investing ideas into action with a full range of
                                          investments.Enjoy real benefits and rewards on
                                          {{$settings->site_name}} .</p>
                                      </div>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>			
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
  </header>


  <!-- .........................................................................This section is for About us -->
  <section id="about">
      <div class="container">
          <div class="row pt-5 pb-5">
              <div class="col-md-12 mb-5 text-center">
                  <h1>About {{$settings->site_name}}</h1>
              </div>
              <div class="col-md-3 text-center mb-3 wow bounceInLeft">
                <div class="card card-cascade shadow">
                    <!-- Card image -->
                    <div class="view view-cascade overlay text-center pt-3">
                      <img src="{{asset('ot_temp1/img/innv.png')}}" alt="" class="w-25 text-center" style="margin: 0px auto;">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <h4 class="card-title text-primary"><strong>WE INNOVATE</strong></h4>
                      <p class="card-text">We follow a strictly customer-centric approach and aim to exceed your expectations. That's why we constantly invest in innovation and improve the user experience by introducing native applications and platforms, new assets and unique features and tools!
                      </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 text-center mb-3 wow bounceInUp">
                <div class="card card-cascade shadow">
                    <!-- Card image -->
                    <div class="view view-cascade overlay text-center pt-3">
                      <img src="{{asset('ot_temp1/img/cert.png')}} " alt="" class="w-50 text-center" style="margin: 0px auto;">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <h4 class="card-title text-primary"><strong>LICENSED & CERTIFIED</strong></h4>
                      <p class="card-text">Straight portfolio and anti-DDOS system to guarantee theft of funds $0 since inception in 2017
                      </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 text-center mb-3 wow bounceInUp">
                <div class="card card-cascade shadow">
                  <!-- Card image -->
                  <div class="view view-cascade overlay text-center pt-3">
                    <img src="{{asset('ot_temp1/img/prof.jpg')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title text-primary"><strong>EDUCATION</strong></h4>
                    <p class="card-text">We believe in educating our customers and giving them all the tools they need to respond to a constantly changing market. We offer educational resources to meet the needs of merchants at all levels, including live on-site webinars, exclusive video courses and daily market news.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 text-center mb-3 wow bounceInRight">
                <div class="card card-cascade shadow">
                  <!-- Card image -->
                  <div class="view view-cascade overlay text-center pt-3">
                    <img src="{{asset('ot_temp1/img/ddf.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title text-primary"><strong>TRANSACTION SPEED</strong></h4>
                    <p class="card-text">You don't have to wait hours for your coins, the transaction processing time is at most 15 minutes!
                    </p>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>


  <!-- .........................................................................This section is for Services -->
  <section id="services" class="bg-light">
      <div class="container">
          <div class="row pt-5">
              <div class="col-md-12 text-center mb-5">
                <h5>Our Services</h5>
                  <h2>Why You Should Choose Us</h2>
              </div>
              <div class="col-md-4 mb-4 wow flip">
                  <div class="card card-cascade shadow bg-transparent">
                      <!-- Card image -->
                      <div class="view view-cascade overlay text-center pt-3">
                        <img src="{{asset('ot_temp1/img/why-choose-1.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <h4 class="card-title text-primary"><strong>MORE THAN 1,000,000 DAILY OFFRS </strong></h4>
                        <p class="card-text">{{$settings->site_name}} clients engage in a large number of successful transactions, making them efficient and wealthy.
                        </p>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 mb-4 wow flipInX">
                  <div class="card card-cascade shadow bg-transparent">
                      <!-- Card image -->
                      <div class="view view-cascade overlay text-center pt-3">
                        <img src="{{asset('ot_temp1/img/why-choose-2.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <h4 class="card-title text-primary"><strong>SIMPLE TRADING PLATFORM</strong></h4>
                        <p class="card-text">An intuitive, user-friendly and simplistic trading interface helps newcomers to easily start trading futures.
                        </p>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 mb-4 wow flip">
                <div class="card card-cascade shadow bg-transparent">
                    <!-- Card image -->
                    <div class="view view-cascade overlay text-center pt-3">
                      <img src="{{asset('ot_temp1/img/why-choose-3.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <h4 class="card-title text-primary"><strong>ADVANCED PLATFORM</strong></h4>
                      <p class="card-text">Newcomer to the market, therefore not as well known and reliable as the other leading stock exchanges but recognized as the most profitable reference program. Its referral program pays 10 times more than other competitors.
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-4 wow flip">
              <div class="card card-cascade shadow bg-transparent">
                  <!-- Card image -->
                  <div class="view view-cascade overlay text-center pt-3">
                    <img src="{{asset('ot_temp1/img/why-choose-4.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title text-primary"><strong>MULTI-CURRENCY</strong></h4>
                    <p class="card-text">You can easily buy Bitcoin in cash, as well as other cryptocurrencies that we offer on the platform. Through this service you can use your credit card to buy Bitcoin, Litecoin, Etherereum, Ripple and Bitcoin Cash directly in US Dollars or Euros.
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow flipInX">
              <div class="card card-cascade shadow bg-transparent">
                  <!-- Card image -->
                  <div class="view view-cascade overlay text-center pt-3">
                    <img src="{{asset('ot_temp1/img/why-choose-5.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title text-primary"><strong>CUSTOMER SUPPORT</strong></h4>
                    <p class="card-text">We're with you every step of the way, with 24/7 multilingual helpdesks, personal account managers, free product presentations and live market analysis by our experienced analysts.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4 wow flip">
                <div class="card card-cascade shadow bg-transparent">
                  <!-- Card image -->
                  <div class="view view-cascade overlay text-center pt-3">
                    <img src="{{asset('ot_temp1/img/why-choose-7.png')}}" alt="" class="w-50 text-center" style="margin: 0px auto;">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title text-primary"><strong>ULTIMATE SECURITY</strong></h4>
                    <p class="card-text">Straight portfolio and anti-DDOS system to guarantee theft of funds $0 since inception in 2017
                    </p>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>


  <!-- .........................................................................This section is for Pricing -->
  <section id="pricing">
      <div class="container">
          <div class="row pt-5 pb-5 ">
              <div class="col-md-12 mb-5 text-center wow fadeInUpBig">
                  <h2>SEE OUR INVESTMENT PLANS</h2>
                  <h4>Choose How You Want to Invest With Us</h4>
              </div>
              @foreach ($plans as $plan)
              <div class="col-md-3 p-2 wow fadeInUpBig">
                  <div class="card cd rounded-lg shadow">
                      <div class="card-body text-center">
                          <h3 class="card-title">{{$plan->name}}</h> <br> <br>
                            <h1 class="text-primary font-weight-bolder">{{$settings->currency}}{{$plan->price}}</h1>
                            <small>Min. Possible deposit:</small>
                            <h3>{{$settings->currency}}{{$plan->min_price}}</h3>
                            <small>Max. Possible deposit:</small>
                            <h3>{{$settings->currency}}{{$plan->max_price}}</h3>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">{{$settings->currency}}{{$plan->minr}} Minimum return</li>
                              <li class="list-group-item">{{$settings->currency}}{{$plan->maxr}} Maximum return</li>
                              <li class="list-group-item">{{$settings->currency}}{{$plan->gift}} Gift Bonus</li>
                            </ul>
                            <div class="card-body">
                                <a href="login" class="btn-floating bg-purple text-primary btn-block rounded-pill btn btn-action  lighten-3">Buy Now</a>
                            </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>


  <!-- .........................................................................This section is for Testimonials -->
  <section id="testimony" style="display:none">
    <div class="container-fluid">
        <div class="row pt-5 pb-4">
          <div class="col-md-12 mb-5 text-center">
                  <h2>WHAT PEOPLE SAY</h2>
                  <h4>Don't take our word for it, here's what some of our clients
                      have to say about us.</h4>
              </div>
            <div class="col">
                <div class="cd-testimonials-wrapper cd-container shadow">
                    <ul class="cd-testimonials">
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="cd-author">
                          <img src="{{asset('ot_temp1/img/avatar-1.jpg')}} " alt="Author image">
                          <ul class="cd-author-info">
                            <li>MyName</li>
                            <li>CEO, AmberCreative</li>
                          </ul>
                        </div>
                      </li>
                  
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
                        <div class="cd-author">
                          <img src="{{asset('ot_temp1/img/avatar-2.jpg')}}" alt="Author image">
                          <ul class="cd-author-info">
                            <li>MyName</li>
                            <li>Designer, CodyHouse</li>
                          </ul>
                        </div>
                      </li>
                  
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
                        <div class="cd-author">
                          <img src="{{asset('ot_temp1/img/avatar-3.jpg')}}" alt="Author image">
                          <ul class="cd-author-info">
                            <li>MyName</li>
                            <li>CEO, CompanyName</li>
                          </ul>
                        </div>
                      </li>
                      
                    </ul> <!-- cd-testimonials -->
                  
                    <a href="#0" class="cd-see-all">See all</a>
                  </div> <!-- cd-testimonials-wrapper -->
                  
                  <div class="cd-testimonials-all">
                    <div class="cd-testimonials-all-wrapper">
                      <ul>
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-1.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                  
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-2.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                  
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-3.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                  
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-4.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                  
                  
                  
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-5.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                  
                        <li class="cd-testimonials-item">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
                          
                          <div class="cd-author">
                            <img src="{{asset('ot_temp1/img/avatar-6.jpg')}}" alt="Author image">
                            <ul class="cd-author-info">
                              <li>MyName</li>
                              <li>CEO, CompanyName</li>
                            </ul>
                          </div> <!-- cd-author -->
                        </li>
                      </ul>
                    </div>	<!-- cd-testimonials-all-wrapper -->
                  
                    <a href="#0" class="close-btn">Close</a>
                  </div> <!-- cd-testimonials-all -->
            </div>
        </div>
    </div>
  </section>


  <!-- ...............................................................This section is for Contact us -->
  <section id="contact" class="">
      <div class="container">
          <div class="row pt-5 pb-5">
              <div class="col-md-12 mb-3 text-center text-white">
                  <h2>GET IN TOUCH</h2>
                  <h4>Send us a message and we'll respond as
                      soon as possible</h4>
              </div>
              <div class="col-md-6 offset-md-3 p-3 wow zoomIn">
                <div class="mb-4 text-center">
                    <a href="mailto:{{$settings->contact_email}}" class="text-white" style="font-size: large;"><i class="fa fa-envelope"></i> {{$settings->contact_email}} </a> 
                      &nbsp;
                    <a href="" class="text-white" style="font-size: large;"><i class="fa fa-headset"></i> Support</a> &nbsp;
                    <a href="#" class="text-white" style="font-size: large;"><i class="fab fa-facebook"></i></a> 
                    
                    &nbsp;
                    <a href="#" class="text-white" style="font-size: large;"><i class="fab fa-twitter"></i></a>
                    &nbsp;
                    <a href="#" class="text-white" style="font-size: large;"><i class="fab fa-linkedin"></i></a>
                </div>
                  
                  <div class="card p-2">
                      <!--Card content-->
                      <div class="card-body">
                        <div class="form-content">
                          @if(Session::has('message'))
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="alert alert-info alert-dismissable">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                                  </div>
                              </div>
                          </div>
                          @endif
                        </div>
                        <!-- Form -->
                        <form action="{{action('UsersController@sendcontact')}}"  method="POST">
                          <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form3" class="form-control" name="name">
                            <label for="form3">Your name</label>
                          </div>
  
                          <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form2" class="form-control" name="email" >
                            <label for="form2">Your email</label>
                          </div>
        
                          <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea type="text" id="form8" class="md-textarea" name="message"></textarea>
                            <label for="form8">Your message</label>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
        
                          <div class="text-center">
                            <button class="btn btn-primary btn-block rounded-pill">Send</button>
                            <hr>
                            <fieldset class="form-check">
                              <input type="checkbox" class="form-check-input" id="checkbox1">
                              <label for="checkbox1" class="form-check-label dark-grey-text">Subscribe me to the newsletter</label>
                            </fieldset>
                          </div>
        
                        </form>
                        <!-- Form -->
        
                      </div>
        
                    </div>
                    <!--/.Card-->
              </div>
          </div>
      </div>
    </section>


    <!-- .........................................................................This section is for Payouts -->
<section id="payouts">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-8 offset-md-2 mb-3 text-center text-primary">
                <h2>Latest Transactions</h2>
                <h5 class="text-dark">Our goal is to simplify investing so that anyone can be an investor. With
                    this in mind, we hand-pick the investments we offer on our platform.</h5>
            </div>
            <div class="col-md-12">

                <div class="head">
                    <div id="material-tabs" class="">
                        <a id="tab1-tab" href="#tab1" >Withdrawal</a>
                        <a id="tab2-tab" href="#tab2" >Deposit</a>
                        <span class="yellow-bar"></span>
                    </div>
                  </div>
            
                <div class="tab-content">
                    <div id="tab1">
                        <div class="shadow table-responsive">
                          <table id="dtBasicExample" class="table table-hover table-borderless">
                            <thead class="bg-light">
                              <tr>
                                <th scope="col" >NAME</th>
                                <th scope="col">DATE</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">MODE</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($withdrawals as $deposit)
                              <tr>
                                <th scope="row">{{$deposit->duser->name}}</th>
                                <td>{{$deposit->created_at}}</td>
                                <td>{{$settings->currency}}{{$deposit->amount}}</td>
                                <td>{{$deposit->payment_mode}}</td>
                                <td>{{$deposit->status}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div id="tab2">
                        <div class="shadow table-responsive">
                          <table id="dtBasicExample" class="table table-hover table-borderless">
                            <thead class="bg-light">
                              <tr>
                                <th scope="col" >NAME</th>
                                <th scope="col">DATE</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">MODE</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $deposit)
                              <tr>
                                <th scope="row">{{$deposit->duser->name}}</th>
                                <td>{{$deposit->created_at}}</td>
                                <td>{{$settings->currency}}{{$deposit->amount}}</td>
                                <td>{{$deposit->payment_mode}}</td>
                                <td>{{$deposit->status}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- .......................................................This section is for Frequently Ask Questions -->
    <section id="faqs" class="bg-light">
        <div class="container">
            <div class="row pb-5">
                <div class="col faq">
                    <div class="text-center mb-4 pt-5">
                        <h2 class="">Frequently Asked Questions</h2>
                      </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card mb-2">
                            <div class="card-header bg-primary" id="headingOne">
                              <h2 class="mb-0">
                                <button class="btn captext text-white btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  What is Bitcoin ?
                                </button>
                              </h2>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body"> Bitcoin is a digital currency created in January 2009. It follows the ideas outlined in a white paper by the mysterious developer (or group of developers) Satoshi Nakamoto, whose true identity has not yet been verified. Bitcoin offers the promise of lower transaction fees than traditional online payment mechanisms and is managed by a decentralized authority, unlike government-issued currency.
                              There is no physical Bitcoin, only balances kept on a public book, which - like all Bitcoin transactions - is verified by a massive amount of computing power. Bitcoins are not issued or guaranteed by banks or governments, and individual Bitcoins have no value as a commodity. Although not legal tender, Bitcoins are very popular and have triggered the launch of hundreds of other virtual currencies.
                              </div>
                            </div>
                          </div>
                        
                        <div class="card mb-2">
                          <div class="card-headers bg-primary" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn captext text-white btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do i Start ?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            1) Choose your portfolio
                            <br>Free crypto currencies portfolios are available for all major operating systems and devices to meet a wide variety of your needs. For example, you can install an application on your mobile device for everyday use or you can have a wallet just for online payments on your computer. Either way, choosing a wallet is easy and can be done in minutes.
                            <br>2) Getting crypto currencies
                            <br>You can obtain crypto currencies by accepting them as payment for goods and services. There are also several ways to buy crypto currencies.
                            <br>3) Spending crypto currency
                            <br>An increasing number of services and merchants are accepting crypto currencies worldwide. Use crypto currency to pay them and evaluate your experience to help them gain visibility.
                            </div>
                          </div>
                        </div>
  
                        <div class="card mb-2">
                          <div class="card-headers bg-primary" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed captext text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How long does it take to withdraw Money ?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            1) Open your crypto currency portfolio
  	                        <br>Open your crypto currency portfolio from your account.
                            <br>2) Choose the amount of your desired withdrawal
                            <br>Check your crypto currency balance and decide how much you want to withdraw.
                            <br>3) Select the transaction and confirm
                            <br>Confirm your transaction with your portfolio password.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ...........................................................Footer Section -->
    <section id="footer">
        <div class="container-fluid">
            <div class="row bg-light">
                <div class="col text-center text-white pt-4">
                    <p class="text-dark"> © {{$settings->site_name}} 2019. All rights reserved.</p>
                </div>
            </div>
        </div>
      </section>
    
    

  <script type="text/javascript" src="{{asset('ot_temp1/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('ot_temp1/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('ot_temp1/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('ot_temp1/js/mdb.min.js')}} "></script>
  <script src="{{asset('ot_temp1/js/masonry.pkgd.min.js')}}"></script>
  <script src="{{asset('ot_temp1/js/jquery.flexslider-min.js')}}"></script>
  <script src="{{asset('ot_temp1/js/main.js')}} "></script> <!-- Resource jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="{{asset('ot_temp1/js/material-scrolltop.js')}} "></script>
  <script src="{{asset('ot_temp1/js/smooth-scroll.js')}} "></script>
  <script src="{{asset('ot_temp1/js/myjs.js')}} "></script>
  <script src="{{asset('ot_temp1/js/wow.min.js')}} "></script>

  <script>
      var scroll = new SmoothScroll('a[href*="#"]');
  </script>
  <!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11759130;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/11759130/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>

@auth
<script type="text/javascript">
setTimeout(() => {
  LC_API.set_visitor_email("{{Auth::user()->email}}");
LC_API.set_visitor_name("{{Auth::user()->name}}");
}, 2000);
</script>
   
@endauth
<!-- End of LiveChat code -->

</body>

</html>
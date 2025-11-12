<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/cortaly/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jul 2021 06:23:13 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orbailix - URL Shortner</title>
    
    @include('frontend.partials.styles')
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    @include('frontend.partials.preloader')
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
   @include('frontend.partials.header')
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section">
        <div class="banner-bg bg_img" data-background="assets/images/banner/banner-bg.jpg">
            <div class="banner-bg-shape"><img src="assets/images/banner/banner-shape.png" alt="banner"></div>
            <div class="round-1">
                <img src="assets/images/banner/01.png" alt="banner">
            </div>
            <div class="round-2">
                <img src="assets/images/banner/02.png" alt="banner">
            </div>
        </div>
        <div class="container">
            <div class="banner-content">
                <h3 class="cate">SHORTEN URLS AND JOIN</h3>
                <h1 class="title">ORBAILIX COMPONY</h1>
                <p>Transforming long, ugly links into Shorten URLs and earn big money. Get paid by every person who visits your URLs.</p>
            </div>
            <div class="banner-form-group">
                
                <h3 class="subtitle">Shorten URL Is Just Simple</h3>
                <form method="POST" id="shortner_form" onsubmit="event.preventDefault()"  class="banner-form">
                    {{-- @csrf --}}
                    <input type="text" name="link" id="input-link" placeholder="Your URL here" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <button  class="btn btn-primary" id="butsave" type="button" >Shorten <i class="flaticon-startup"></i></button>
                </form>
                
                <div class="link-banner row">
                        {{-- <li id="bar" class="form-control col-lg-8"><a  class="shortlink" href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></li> --}}
                        <!-- Trigger -->
                    
                    {{-- @endforeach
                    
                  
                </div>
                {{-- <a href="{{route('custom.link')}}" class="btn btn-primary mt-3">Custom Link</a> --}}

            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Why Section Starts Here =============-->
    <section class="why-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-lg-100">
                    <div class="section-header left-style mb-lg-0 sticky-header mb-low ml-0">
                        <h2 class="title">
                            Why Join Us?
                        </h2>
                        <p>Cortaly is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home, when managing and protecting your links.</p>
                        <a href="#0" class="custom-button active mt-2">Create Your Account</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-item">
                        <div class="choose-thumb">
                            <img src="assets/images/why/01.png" alt="why">
                        </div>
                        <div class="choose-content">
                            <h5 class="title">JOIN OUR NETWORK</h5>
                            <p>Signup for an account in just one minute, shorten URLs and 
                                sharing your links to everywhere. And you'll be paid from any views.</p>
                        </div>
                    </div>
                    <div class="choose-item">
                        <div class="choose-thumb">
                            <img src="assets/images/why/02.png" alt="why">
                        </div>
                        <div class="choose-content">
                            <h5 class="title">HIGHEST RATES</h5>
                            <p>Make the most out of your traffic with our always increasing rates. You are required to earn only $5.00 before you will be paid.</p>
                        </div>
                    </div>
                    <div class="choose-item">
                        <div class="choose-thumb">
                            <img src="assets/images/why/03.png" alt="why">
                        </div>
                        <div class="choose-content">
                            <h5 class="title">PAYMENTS ON TIME</h5>
                            <p>We provide full mobile supports, you can even shorten the URL, control your account and view the stats on a mobile device.</p>
                        </div>
                    </div>
                    <div class="choose-item">
                        <div class="choose-thumb">
                            <img src="assets/images/why/04.png" alt="why">
                        </div>
                        <div class="choose-content">
                            <h5 class="title">RESPONSIVE UI</h5>
                            <p>Request payments whenever you want and get your payments on 1st day and 15th day of every month. Enjoy you Spendings!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Why Section Ends Here =============-->


    <!--============= Feature Section Starts Here =============-->
    <section class="feature-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="assets/images/feature/feature-bg.jpg">
        <div class="top-shape d-none d-md-block">
            <img src="assets/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block mw-0">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="assets/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="assets/images/balls/6.png" alt="balls">
        </div>
        <div class="container">
            <div class="section-header cl-white">
                <!-- <h5 class="cate">Choose a plan that's right for you</h5> -->
                <h2 class="title mt-md-0">All Features</h2>
                <p>
                    Mosto has plans, from free to paid, that scale with your needs. Subscribe to a plan that fits the size of your business.
                </p>
            </div>
            <div class="tab">
                <ul class="tab-menu feature-tab">
                    <li>
                        <div class="thumb">
                            <img src="assets/images/feature/01.png" alt="feature">
                        </div>
                        <div class="content">%99 Uptime</div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="assets/images/feature/02.png" alt="feature">
                        </div>
                        <div class="content">Easy Dashboard</div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="assets/images/feature/03.png" alt="feature">
                        </div>
                        <div class="content"> Referral Program</div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="assets/images/feature/04.png" alt="feature">
                        </div>
                        <div class="content">1CLICK Script Installs</div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="assets/images/feature/05.png" alt="feature">
                        </div>
                        <div class="content">Support</div>
                    </li>
                </ul>
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="feature-item">
                         
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="feature-item">
                        
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="feature-item">
                         
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="feature-item">
                       
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="feature-item">
                           <!--  <h3 class="title">Support</h3>
                            <p>We guarantee that our network will be up and functioning 99.9% of the time per 
                            month. We feel a safety net of .1% each month allows us time for repairs and 
                            unforeseen events that may arise. Furthermore, you can view our network status
                                24 hours a day 365 days a year.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Section Ends Here =============-->


    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top padding-bottom pt-md-half pb-max-lg-0">
        <div class="container">
            <div class="section-header mb-low">
                <h2 class="title mb-0">How to start</h2>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">CREATE AN ACCOUNT</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">SHORTEN YOUR LINK</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">Earn Money</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--============= Footer Section Starts Here =============-->
    @include('frontend.partials.footer')
    <!--============= Footer Section Ends Here =============-->


    @include('frontend.partials.scripts')
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.shortlink').click (function(){
              // $('.link-banner').css("display", "none");
                 $('.link-banner').hide()
            });
        });
  
        $("#butsave").on("click", function(){
          // alert(1);
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
              }
          });
  
          var formData = $('#shortner_form').serialize();
              $.ajax({
                  type:"POST",
                  url : "{{ route('generate.shorten.link.post')}}",
                  data: formData,
                  success: function(data){
                    // $('#shortlink-div').empty().append().html(data);
                    // //   console.log(data);
                      $(".link-banner").removeAttr("style","display:none");
                      $(".link-banner").html(`
                      <li id="bar" class="form-control clipboard_data col-lg-8"><a  class="shortlink" href="${data}" target="_blank">${data}</a></li>
                      <button class="btn clipboard_btn btn btn-primary col-lg-2" data-clipboard-action="copy" data-clipboard-target="#bar">
                            Copy
                    </button>  `);
                    $('#input-link').val("");
                  }, 
                //   error : function(data){
                //       $('#shortlink-div').empty().append().html(data);
                //       // console.log(data);
                //   }
              });
        });
        
        
        // copy to clipboard code 
        
        var clipboard = new  ClipboardJS('#bar');
    
    
        clipboard.on('success', function(e) {
            e.clearSelection();
            alert('Copy to Clipboard Successfully');
        });
    
    
        clipboard.on('error', function(e) {
            alert('Something is wrong!');
        });

    </script>
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/cortaly/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jul 2021 06:23:13 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>worldwebtree - URL Shortner</title>
    
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
                <h4 class="cate">🚀 POWERFUL URL SHORTENER</h4>
                <h3 class="title">worldwebtree <span style="color: #08c6ab;">URL Shortener</span></h3>
                <p>Transform your long, complex URLs into clean, trackable short links with worldwebtree's advanced URL shortening platform. Real-time analytics, custom domains, and premium features for modern link management.</p>
                <div class="stats-row" style="display: flex; gap: 30px; margin-top: 20px; flex-wrap: wrap; justify-content: center; align-items: center;">
                    <div class="stat-item" style="text-align: center;">
                        <h4 style="color: #08c6ab; font-size: 2rem; margin: 0;">10M+</h4>
                        <p style="color: white; margin: 0; font-size: 0.9rem;">Links Shortened</p>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <h4 style="color: #1BFFFF; font-size: 2rem; margin: 0;">99.9%</h4>
                        <p style="color: white; margin: 0; font-size: 0.9rem;">Uptime</p>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <h4 style="color: #08c6ab; font-size: 2rem; margin: 0;">24/7</h4>
                        <p style="color: white; margin: 0; font-size: 0.9rem;">Support</p>
                    </div>
                </div>
            </div>
            <div class="banner-form-group">

                <h3 class="subtitle">✨ Create Short Links in Seconds</h3>
                <form method="POST" id="shortner_form" onsubmit="event.preventDefault()"  class="banner-form">
                    {{-- @csrf --}}
                    <input type="text" name="link" id="input-link" placeholder="Paste your long URL here..." aria-label="URL to shorten" aria-describedby="basic-addon2" required>
                    <button  class="btn btn-primary" id="butsave" type="button" style="background: linear-gradient(135deg, #08c6ab, #1BFFFF); border: none; font-weight: 600;">
                        <i class="flaticon-startup me-1"></i>Shorten URL
                    </button>
                </form>
                <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; margin-top: 10px; text-align: center;">
                    🔒 Secure • 📊 Analytics • ⚡ Lightning Fast • 🎯 Custom Domains
                </p>
                
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





    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top padding-bottom pt-md-half pb-max-lg-0">
        <div class="container">
            <div class="section-header mb-low">
                <h2 class="title mb-0">Get Started with <span style="color: #08c6ab;">worldwebtree</span></h2>
                <p style="color: #666; margin-top: 10px;">Three simple steps to start shortening URLs like a pro</p>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item" style="position: relative;">
                        <div style="position: absolute; top: -10px; left: -10px; background: linear-gradient(135deg, #08c6ab, #1BFFFF); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; z-index: 1;">1</div>
                        <div class="how-thumb">
                            <img src="assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">🚀 PASTE YOUR URL</h6>
                            <p style="font-size: 0.9rem; color: #666; margin-top: 8px;">Simply paste your long URL into worldwebtree's shortening tool above</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item" style="position: relative;">
                        <div style="position: absolute; top: -10px; left: -10px; background: linear-gradient(135deg, #08c6ab, #1BFFFF); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; z-index: 1;">2</div>
                        <div class="how-thumb">
                            <img src="assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">✨ GET SHORT LINK</h6>
                            <p style="font-size: 0.9rem; color: #666; margin-top: 8px;">worldwebtree instantly generates your short, professional link</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item" style="position: relative;">
                        <div style="position: absolute; top: -10px; left: -10px; background: linear-gradient(135deg, #08c6ab, #1BFFFF); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; z-index: 1;">3</div>
                        <div class="how-thumb">
                            <img src="assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">📊 TRACK & ANALYZE</h6>
                            <p style="font-size: 0.9rem; color: #666; margin-top: 8px;">Monitor performance with worldwebtree's real-time analytics dashboard</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div style="text-align: center; margin-top: 50px;">
                <h3 style="color: #333; margin-bottom: 20px;">Ready to shorten your first URL?</h3>
                <p style="color: #666; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Join thousands of users who trust worldwebtree for their URL shortening needs. Start for free today!
                </p>
                <a href="#0" class="btn btn-primary btn-lg" style="background: linear-gradient(135deg, #08c6ab, #1BFFFF); border: none; padding: 15px 40px; font-size: 1.1rem; font-weight: 600;">
                    Start Shortening URLs Free
                </a>
            </div>
        </div>
    </section>

    <!--============= Stats Section Starts Here =============-->
    <section class="stats-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card" style="padding: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h2 style="color: #08c6ab; font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;" id="links-count">800000</h2>
                        <p style="color: #666; font-size: 1rem; margin: 0;">Links Shortened</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card" style="padding: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h2 style="color: #1BFFFF; font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;" id="users-count">500K+</h2>
                        <p style="color: #666; font-size: 1rem; margin: 0;">Happy Users</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card" style="padding: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h2 style="color: #08c6ab; font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;" id="clicks-count">2B+</h2>
                        <p style="color: #666; font-size: 1rem; margin: 0;">Total Clicks</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card" style="padding: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h2 style="color: #1BFFFF; font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;" id="uptime-count">99.9%</h2>
                        <p style="color: #666; font-size: 1rem; margin: 0;">Uptime</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p style="color: #666; font-size: 0.9rem;">
                    🚀 Trusted by businesses worldwide • 📈 Growing every day • ⚡ Real-time statistics
                </p>
            </div>
        </div>
    </section>

    <!--============= Testimonials Section Starts Here =============-->
    <section class="testimonials-section py-5" style="background: #fff;">
        <style>
            .testimonial-row {
                display: flex;
                flex-wrap: wrap;
                gap: 2rem;
                justify-content: center;
                margin-left: 0;
                margin-right: 0;
            }
            .testimonial-card {
                flex: 1 1 325px;
                max-width: 370px;
                min-width: 280px;
                padding: 32px 28px 30px 28px;
                background: linear-gradient(135deg, #fafdfe 95%, #fff 100%);
                border-radius: 18px;
                text-align: center;
                border: none;
                box-shadow: 0 4px 28px rgba(8,198,171,0.08), 0 1.5px 5px rgba(27,255,255,0.03);
                transition: box-shadow 0.2s, transform 0.2s;
                position: relative;
            }
            .testimonial-card:before {
                content: '';
                display: block;
                position: absolute;
                left: 0; top: 0; bottom: 0;
                width: 5px;
                border-radius: 14px 0 0 14px;
                background: linear-gradient(180deg, #08c6ab 50%, #1BFFFF 100%);
            }
            .testimonial-card .stars {
                font-size: 2rem;
                margin-bottom: 18px;
                letter-spacing: 1px;
                color: #1BFFFF;
                display: inline-block;
            }
            .testimonial-card .comment {
                font-style: italic;
                color: #444;
                font-size: 1.08rem;
                margin-bottom: 24px;
            }
            .testimonial-card .name {
                font-weight: 700;
                color: #222;
                font-size: 1.07rem;
                margin-bottom: 3px;
            }
            .testimonial-card .role {
                color: #4ca9ac;
                font-size: 0.98rem;
                letter-spacing: 0.04em;
            }

            @media (max-width: 991.98px) {
                .testimonial-row {
                    flex-direction: column;
                    gap: 1.5rem;
                    align-items: center;
                }
                .testimonial-card {
                    margin-right: 0 !important;
                }
            }
        </style>
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-3" style="font-weight: 700; font-size: 2.2rem;">What Our Users Say</h2>
                <p class="text-muted" style="font-size: 1.1rem;">Real feedback from worldwebtree users</p>
            </div>
            <div class="testimonial-row">
                <div class="testimonial-card">
                    <div class="stars" style="color: #08c6ab;">⭐⭐⭐⭐⭐</div>
                    <div class="comment">
                        "worldwebtree has transformed how we manage our marketing links. The analytics are incredible!"
                    </div>
                    <div class="name">Sarah Johnson</div>
                    <div class="role">Marketing Manager, TechCorp</div>
                </div>
                <div class="testimonial-card">
                    <div class="stars" style="color: #1BFFFF;">⭐⭐⭐⭐⭐</div>
                    <div class="comment">
                        "The custom domains feature helped us maintain our brand identity. Highly recommended!"
                    </div>
                    <div class="name">Mike Chen</div>
                    <div class="role">CEO, StartupXYZ</div>
                </div>
                <div class="testimonial-card">
                    <div class="stars" style="color: #08c6ab;">⭐⭐⭐⭐⭐</div>
                    <div class="comment">
                        "Fast, reliable, and secure. worldwebtree is our go-to URL shortener for all our campaigns."
                    </div>
                    <div class="name">Emma Davis</div>
                    <div class="role">Digital Marketer, BrandCo</div>
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
                $('.link-banner').hide()
            });

            // Animate statistics counters
            function animateCounter(element, target) {
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(function() {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.text(Math.floor(current).toLocaleString() + (target === 99.9 ? '%' : '+'));
                }, 30);
            }

            // Trigger counter animation when section comes into view
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter($('#links-count'), 80000);
                        animateCounter($('#users-count'), 50000);
                        animateCounter($('#clicks-count'), 200000);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            $('.stats-section').each(function() {
                observer.observe(this);
            });

            // Add smooth scrolling to sections
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });

            // Add typing effect to the main title
            const title = document.querySelector('.banner-content h1 .title');
            if (title) {
                const text = title.textContent;
                title.textContent = '';
                let i = 0;
                const typeWriter = () => {
                    if (i < text.length) {
                        title.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 50);
                    }
                };
                setTimeout(typeWriter, 1000);
            }
        });

        $("#butsave").on("click", function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var formData = $('#shortner_form').serialize();
            const button = $(this);
            const originalText = button.html();

            // Show loading state
            button.html('<i class="fas fa-spinner fa-spin me-1"></i>Shortening...').prop('disabled', true);

            $.ajax({
                type:"POST",
                url : "{{ route('generate.shorten.link.post')}}",
                data: formData,
                success: function(data){
                    // Reset button
                    button.html(originalText).prop('disabled', false);

                    // Show success result with animation
                    $(".link-banner").removeAttr("style","display:none");
                    $(".link-banner").html(`
                        <li id="bar" class="form-control clipboard_data col-lg-8" style="border: 2px solid #08c6ab; border-radius: 10px;">
                            <a class="shortlink" href="${data}" target="_blank" style="color: #08c6ab; font-weight: 600;">${data}</a>
                        </li>
                        <button class="btn clipboard_btn btn btn-primary col-lg-2" id="copy-btn" style="background: linear-gradient(135deg, #08c6ab, #1BFFFF); border: none; font-weight: 600;">
                            <i class="fas fa-copy me-1"></i>Copy
                        </button>
                    `);

                    // Add click animation to copy button
                    $('#copy-btn').on('click', function() {
                        $(this).html('<i class="fas fa-check me-1"></i>Copied!').css('background', '#28a745');
                        setTimeout(() => {
                            $(this).html('<i class="fas fa-copy me-1"></i>Copy').css('background', 'linear-gradient(135deg, #08c6ab, #1BFFFF)');
                        }, 2000);
                    });

                    $('#input-link').val("");

                    // Animate the result section
                    $('.link-banner').hide().fadeIn(500);
                },
                error: function(xhr, status, error) {
                    button.html(originalText).prop('disabled', false);
                    alert('Error: ' + error);
                }
            });
        });


        // Enhanced copy to clipboard code
        $(document).on('click', '#copy-btn', function() {
            var clipboard = new ClipboardJS('#bar');
            clipboard.on('success', function(e) {
                e.clearSelection();
                // Already handled above
            });
        });

        // Add scroll-based animations
        $(window).scroll(function() {
            $('.how-item, .choose-item, .testimonial-card').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animate-in');
                }
            });
        });

        // Add CSS for scroll animations
        $('<style>')
            .text(`
                .how-item, .choose-item, .testimonial-card {
                    opacity: 0;
                    transform: translateY(30px);
                    transition: all 0.6s ease;
                }
                .animate-in {
                    opacity: 1;
                    transform: translateY(0);
                }
                .how-item:nth-child(1) { transition-delay: 0.1s; }
                .how-item:nth-child(2) { transition-delay: 0.2s; }
                .how-item:nth-child(3) { transition-delay: 0.3s; }
            `)
            .appendTo('head');

    </script>
 
</body>
</html>
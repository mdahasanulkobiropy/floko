<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- All CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <title>Floko</title>
</head>

<body>

    <!-- Nav Menu Start  -->
    <section class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2">
                    <div class="logo">
                        <a href="#">
                            <img src="./assets/img/logo/logo.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 text-end">
                    <nav class="main-menu">
                        <ul>
                            <li class="has-dropdown">
                                <a href="#">Speacilites</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Speacilites 1</a></li>
                                    <li><a href="#">Speacilites 2</a></li>
                                    <li><a href="#">Speacilites 3</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">For Business</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Business 1</a></li>
                                    <li><a href="#">Business 2</a></li>
                                    <li><a href="#">Business 3</a></li>
                                    <li><a href="#">Business 4</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">For Individuals</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Individuals 1</a></li>
                                    <li><a href="#">Individuals 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">For Coach</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4">
                    <div class="nav-menu-right">
                        <div class="language">
                            <li class="has-dropdown">
                                <a href="#">
                                    <img src="./assets/img/icon/icon-1.png" alt="" class="px-1">
                                    EN</a>
                                <ul class="sub-menu">
                                    <li><a href="#"><img src="./assets/img/icon/icon-1.png" alt="" class="px-1">BN</a>
                                    </li>
                                    <li><a href="#"><img src="./assets/img/icon/icon-1.png" alt="" class="px-1">HN</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="nav-button">
                            <button>Log/Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Nav Menu End  -->

    <!-- Hero Area Start  -->
    @foreach ($heros as $hero)
    <section class="hero-area">
        <div class="container">
            <div class="hero-area-container">
                <div class="hero-title">
                    <h1>
                        <span>{{$hero->titlepart1}}</span><br>
                        {{$hero->titlepart2}} <br> {{$hero->titlepart3}} <span>{{$hero->titlepart4}} </span>
                    </h1>
                </div>
                <div class="hero-subtitle">
                    <p>
                        {{$hero->subtitle}}
                    </p>
                </div>
                <div class="hero-btn">
                    <button>Find My Coach</button>
                    <button>Learn More</button>
                </div>
                <div class="hero-rating">
                    <div class="rating-icon">
                        <img src="./assets/img/icon/icon-4.png" alt="">
                    </div>
                    <p>4.9 Average Session Rating</p>
                </div>
                <div class="hero-container-shape-1">
                    <img src="{{asset('/uploads/heros/'.$hero->limage)}}" alt="">
                </div>
                <div class="hero-container-shape-2">
                    <img src="{{asset('/uploads/heros/'.$hero->rimage)}}" alt="">
                </div>
            </div>
        </div>
        <div class="hero-area-bg-shape-1">
            <img src="./assets/img/shape/shape-1.jpg" alt="">
        </div>
        <div class="hero-area-bg-shape-2">
            <img src="./assets/img/shape/shape-2.jpg" alt="">
        </div>
    </section>
    @endforeach
    <!-- Hero Area End  -->

    <!-- KeyWord Area Start  -->
    <section class="keyword-area">
        <div class="container-fluid">
            <section class="keyword-layout">
                <div class="row">
                   @foreach ($keywords as $keyword)
                   <div class="col">
                    <img src="./assets/img/icon/Star-1.png" alt=""> {{$keyword->keyword}}
                </div>
                   @endforeach
                    {{-- <div class="col">
                        <img src="./assets/img/icon/Star-2.png" alt=""> Career Coaching
                    </div>
                    <div class="col">
                        <img src="./assets/img/icon/Star-3.png" alt=""> Life Coaching
                    </div>
                    <div class="col">
                        <img src="./assets/img/icon/Star-4.png" alt=""> Job Search Coaching
                    </div>
                    <div class="col">
                        <img src="./assets/img/icon/Star-5.png" alt=""> Leadership Coaching
                    </div> --}}
                </div>
            </section>
        </div>

    </section>
    <!-- KeyWord Area End  -->

    <!-- Events Section Start  -->
    <section class="event-area">
       @foreach ($events as $event)
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="event-content">
                        <div class="event-content-title">
                            <h2>{{$event->title}}</h2>
                        </div>
                        <div class="event-content-sub-title">
                            <p>
                                {{$event->subtitle}}
                            </p>
                        </div>
                        <div class="event-content-info">
                            <p>
                                {{$event->eventinfopart1}}
                            </p>
                            <p>
                                {{$event->eventinfopart2}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="event-img-wrap">
                        <img src="{{asset('/uploads/events/'.$event->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    </section>
    <!-- Events Section End  -->

    <!-- Speakers Sec Start  -->
    <section class="speaker-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @foreach ($tspeakers as $tspeaker)
                    <div class="speaker-head">
                        <div class="speaker-title">
                            <h2>{{$tspeaker->title}}</h2>
                        </div>
                        <div class="speaker-sub-title">
                            <p>
                                {{$tspeaker->subtitle}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="speaker-content">
                        <div class="slider">
                            @foreach ($speakers as $speaker)
                                <div>
                                    <div class="image">
                                        <img src="{{asset('/uploads/speakers/'.$speaker->image)}}" alt="">
                                        <div class="speaker-info">
                                            <h3>{{$speaker->name}}</h3>
                                            <p>{{$speaker->des}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div>
                                <div class=" image">
                                    <img src="./assets/img/thumb/thumb-3.png" alt="">
                                    <div class="speaker-info">
                                        <h3>Jelani Memory</h3>
                                        <p>Global Authority on Privacy & Security. Founder, Global Privacy by Design.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=" image">
                                    <img src="./assets/img/thumb/thumb-4.png" alt="">
                                    <div class="speaker-info">
                                        <h3>Christa Couture</h3>
                                        <p>Advocate, Builder, Changemaker, Youngest Developer in the USA.</p>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="image">
                                    <img src="./assets/img/thumb/thumb-2.png" alt="">
                                    <div class="speaker-info">
                                        <h3>Duke Stump</h3>
                                        <p>Game-Changing CMO & Founder, Nonfire with Soul</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=" image">
                                    <img src="./assets/img/thumb/thumb-3.png" alt="">
                                    <div class="speaker-info">
                                        <h3>Jelani Memory</h3>
                                        <p>Global Authority on Privacy & Security. Founder, Global Privacy by Design.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=" image">
                                    <img src="./assets/img/thumb/thumb-4.png" alt="">
                                    <div class="speaker-info">
                                        <h3>Christa Couture</h3>
                                        <p>Advocate, Builder, Changemaker, Youngest Developer in the USA.</p>
                                    </div>
                                </div>
                            </div> --}}


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speakers Sec End  -->


    <!-- Schedule Section Start  -->
    <div class="schedule-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="schedule-head">
                        @foreach ($dschedules as $dschedule)
                            <h2>
                              {{$dschedule->title}}
                            </h2>
                            <p>{{$dschedule->subtitle}}</p>
                        @endforeach
                        <a href="{{route('export.schedules')}}" class="btn btn-light">Download Schedule</a>
                    </div>
                </div>

                <!-- .... -->
                <div class="col-xl-9">
                    <div class="schedule-slider d-flex justify-content-end">
                        <div class="schedule-slider-item ">
                            <div class="schedule-slider-head">
                                @foreach ($schedules as $schedule)
                                <div class="head-item">
                                    <h3>
                                        {{$schedule->serialday}}
                                    </h3>
                                    <p><span> {{$schedule->numericdate}}</span> {{$schedule->monthday}}</p>
                                </div>
                                @endforeach
                                {{-- <div class="head-item">
                                    <h3>
                                        Day Second
                                    </h3>
                                    <p><span>08</span> April, Friday</p>
                                </div>
                                <div class="head-item">
                                    <h3>
                                        Day Third
                                    </h3>
                                    <p><span>10</span> April, Sunday</p>
                                </div> --}}
                            </div>

                            <!-- schedule slider  -->
                            <div class="schedule-slider-content">

                                <!-- single slide  -->
                                @foreach ($schedules as $schedule)
                                <div class="schedule-single-slide">
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>{{$schedule->rtime}}</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>{{$schedule->rtitle}}</h3>
                                            <p>{{$schedule->rsubtitle}}</p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>{{$schedule->ptime}}</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>{{$schedule->ptitle}}</</h3>
                                            <p>{{$schedule->psubtitle}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>{{$schedule->qtime}}</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>{{$schedule->qtitle}}</h3>
                                            <p>{{$schedule->qsubtitle}}</p>
                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>{{$schedule->ltime}}</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>{{$schedule->ltitle}}</h3>

                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>{{$schedule->retime}}</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>{{$schedule->retitle}}</h3>
                                            <p>{{$schedule->resubtitle}}</p>
                                        </div>
                                    </div>

                                    <div class="single-slider-bg-shape">
                                        <img src="./assets/img/shape/stick.png" alt="">
                                    </div>
                                </div>
                                @endforeach
                                <!-- .......... -->

                                {{-- <!-- single slide  -->
                                <div class="schedule-single-slide">
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>9:00 AM - 10:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Registration & Coffee</h3>
                                            <p>Register your personal data in customer service and take coffee before
                                                entering the room</p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>10:00 AM - 11:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Plan & Conduct User Research</h3>
                                            <p>Many early researchers are challanged by aspect of the design and
                                                implementation of research studies as well the efective dissemunation.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>11:00 AM - 12:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Q&A For Speaker</h3>
                                            <p>Register your personal data in customer service and take food before
                                                entering the room</p>
                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>12:00 AM - 1:00 PM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Launch Break</h3>

                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>1:00 PM - 3:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Research For The Right Thing</h3>
                                            <p>Research encompasses a cariety of investigative methods used to add
                                                context and insight to the design process</p>
                                        </div>
                                    </div>

                                    <div class="single-slider-bg-shape">
                                        <img src="./assets/img/shape/stick.png" alt="">
                                    </div>
                                </div>
                                <!-- .......... -->

                                <!-- single slide  -->
                                <div class="schedule-single-slide">
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>8:00 AM - 9:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Registration & Tea</h3>
                                            <p>Register your personal data in customer service and take coffee before
                                                entering the room</p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>11:00 AM - 12:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Plan & Conduct User Research</h3>
                                            <p>Many early researchers are challanged by aspect of the design and
                                                implementation of research studies as well the efective dissemunation.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>4:00 AM - 9:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Q&A For Speaker</h3>
                                            <p>Register your personal data in customer service and take food before
                                                entering the room</p>
                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>10:00 AM - 12:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Launch Break</h3>

                                        </div>
                                    </div>
                                    <div class="schedule-slider-content-item">
                                        <div class="schedule-slider-content-item-left">
                                            <p>8:00 AM - 9:00 AM</p>
                                        </div>
                                        <div class="item-img">
                                            <img src="./assets/img/shape/circle.png" alt="">
                                        </div>
                                        <div class="schedule-slider-content-item-right">
                                            <h3>Research For The Right Thing</h3>
                                            <p>Research encompasses a cariety of investigative methods used to add
                                                context and insight to the design process</p>
                                        </div>
                                    </div>

                                    <div class="single-slider-bg-shape">
                                        <img src="./assets/img/shape/stick.png" alt="">
                                    </div>
                                </div>
                                <!-- .......... --> --}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Schedule Section End  -->



    <!-- Pricing Section Start  -->
    <section class="pricing-area">
        <div class="container">
            <div class="pricing-title">
                <h2>Pricing Tickets</h2>
            </div>
            <div class="row">
                @foreach ($tickets as $ticket)
                <div class="col-xl-4">
                    <div class="single-pricing">
                        <div class="single-pricing-head pricing-bg-color-black">
                            <h3>{{$ticket->price_category}}</h3>
                            <p>{{$ticket->price_month}}\{{$ticket->price_year}}</p>
                        </div>
                        <div class="single-pricing-list">
                            <ul>
                                @foreach ($ticket->items as $item)
                                    <li><img src="./assets/img/icon/circle-1.png" alt="">
                                        <p>{{ $item->facilitate }}</p>
                                    </li>
                                @endforeach
                                {{-- <li><img src="./assets/img/icon/circle-1.png" alt="">
                                    <p>Lunch and snack</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-1.png" alt="">
                                    <p>Free T-Shirt</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-1.png" alt="">
                                    <p>Meet Event Speaker</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-1.png" alt="">
                                    <p>Front Seat</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-1.png" alt="">
                                    <p>Certificate</p>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="single-pricing-button">
                            <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4">
                    <div class="single-pricing">
                        <div class="single-pricing-head pricing-bg-color-pink">
                            <h3>Premium</h3>
                            <p>$20/mo per member</p>
                        </div>
                        <div class="single-pricing-list">
                            <ul>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>One day pas access all lecture</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>Lunch and snack</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>Free T-Shirt</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>Meet Event Speaker</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>Front Seat</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-2.png" alt="">
                                    <p>Certificate</p>
                                </li>
                            </ul>
                        </div>

                        <div class="single-pricing-button">
                            <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                        </div>
                    </div>


                </div>
                <div class="col-xl-4">
                    <div class="single-pricing">
                        <div class="single-pricing-head pricing-bg-color-green">
                            <h3>Enterprise</h3>
                            <p>$20/mo per member</p>
                        </div>
                        <div class="single-pricing-list">
                            <ul>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>One day pas access all lecture</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>Lunch and snack</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>Free T-Shirt</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>Meet Event Speaker</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>Front Seat</p>
                                </li>
                                <li><img src="./assets/img/icon/circle-3.png" alt="">
                                    <p>Certificate</p>
                                </li>
                            </ul>
                        </div>

                        <div class="single-pricing-button">
                            <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                        </div>
                    </div>


                </div> --}}
            </div>
        </div>
    </section>

    <!-- Pricing Section End  -->

    <!-- Testimonial-section Start  -->
    <section class="testimonial-area">
        <div class="container">
            <div class="testimonial-content">

                @foreach ($founders as $founder)
                    <div class="testimonial-item">
                        <div class="testimonial-item-thumb">
                            <img src="{{asset('/uploads/founders/'.$founder->image)}}" alt="">
                        </div>
                        <div class="testimonial-item-content">
                            <div class="testimonial-item-content-head">
                                <h3>{{$founder->name}}</h3>
                                <p>{{$founder->short_des}}</p>
                            </div>
                            <div class="testimonial-item-content-info">
                                <p>
                                    {{$founder->long_des}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="testimonial-item">
                    <div class="testimonial-item-thumb">
                        <img src="./assets/img/thumb/thumb-6.png" alt="">
                    </div>
                    <div class="testimonial-item-content">
                        <div class="testimonial-item-content-head">
                            <h3>David Holder</h3>
                            <p>Founder of Producthunt</p>
                        </div>
                        <div class="testimonial-item-content-info">
                            <p>
                                "We just want to say thank you to Floko and to their highly professional staff! They
                                have supported us throughout all the event. Everything was well organized! The
                                event's
                                turned to be a great success! You deserve the highest grade!"
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-item-thumb">
                        <img src="./assets/img/thumb/thumb-8.png" alt="">
                    </div>
                    <div class="testimonial-item-content">
                        <div class="testimonial-item-content-head">
                            <h3>Md Shakib Prodhan</h3>
                            <p>Founder of NullTechTonics</p>
                        </div>
                        <div class="testimonial-item-content-info">
                            <p>
                                "We just want to say thank you to Floko and to their highly professional staff! They
                                have supported us throughout all the event. Everything was well organized! The
                                event's
                                turned to be a great success! You deserve the highest grade!"
                            </p>
                        </div>
                    </div>
                </div> --}}





            </div>
        </div>
    </section>

    <!-- Testimonial-section End  -->

    <!-- Contact Us Section Start  -->
    <section class="contact-area">
        <div class="container">
            <div class="contact-layout">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-logo">
                            <img src="./assets/img/logo/logo.svg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="contact-item">
                            <h3>
                                Navigate
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">HELL YES! Moments</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Legal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="contact-item">
                            <h3>
                                Speakers
                            </h3>
                            <ul>
                                @foreach ($speakers as $speaker)
                                    <li><a href="#">{{$speaker->name}}</a></li>
                                @endforeach
                                {{-- <li><a href="#">Christa Couture</a></li>
                                <li><a href="#">Duke Jelani</a></li>
                                <li><a href="#">Dr. Arwin Adam</a></li>
                                <li><a href="#">Pawrence Julie</a></li>
                                <li><a href="#">Anderson Adom</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="newsletter-side">
                            <h3>
                                Newsletter
                            </h3>
                            <p>Sign up to be first to receive the latest stories inspiring us, case studies, and
                                industry
                                news.</p>
                        </div>
                        <div class="newsletter-form">
                            <form>
                                <input type="text" id="name" name="name" placeholder="Your name" required>

                                <input type="email" id="email" name="email" placeholder="Email address" required>

                                <button type="submit">Subscribe</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End  -->






    <!-- Footer Area Start  -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-layout">
                <div class="foot-left">
                    <p>&copy; Created by Md. Shakib Prodhan(Web Developer)</p>
                </div>

                <div class="foot-right social">
                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Area End  -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" assets/js/jquery-3.5.1.min.js"></script>


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/speaker.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>

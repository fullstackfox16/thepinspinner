<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Pin Spinner - An alternative to spreadsheet pinning</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HTML landing page for website apps">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>

<!-- Loader -->
<div class="loader">
    <div class="cp-spinner cp-skeleton"></div>
</div>


<!-- Navigation -->
<div class="container">
    <nav id="navigation" class="navigation">
        <div class="nav-header">
            <a class="nav-brand" href="#">The Pin Spinner</a>
            <div class="nav-toggle"></div>
        </div>

        <div class="nav-menus-wrapper">
            <ul class="nav-menu nav-menu-centered">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#advantages">Advantages</a></li>
                <li><a href="#case">Case</a></li>
                <li><a href="#clients">Used By</a></li>
                <li><a href="#plans">Price</a></li>
                <li><a href="#contact">Contact</a></li>
                @auth
                    <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('subscribe') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</div>


<!-- Header -->
<header id="home" class="animated text-center text-lg-left">
    <div class="cover"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h1 class="display-4">Manual Pinning Brought To A Whole New Level</h1>
                    <p class="lead mt-4">
                        The Pin Spinner leaves spreadsheets in the dust when it comes to manual pinning!
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/phone-01.png') }}" class="mt-5 mt-lg-0 mx-auto float-lg-right" alt="image">
            </div>
        </div>
    </div>
</header>


<!-- Main -->
<div class="main">

    <!-- Advantages -->
    <section id="advantages" class="advantages section section-gray">
        <div class="container section-header text-center">
            <h2>Many Advantages</h2>
            <p class="lead mx-auto mt-5">
                The Pin Spinner can help you save hours when manual pinning. Here are just a few of the many great features!
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="advantage-box mx-auto w-100 mb-4 mb-lg-5">
                        <div class="advantage-box-icon mb-4">
                            <i class="fa fa-usd fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4 class="mb-3">Cost Saving</h4>
                        <p>
                            Everyone likes to save money and we built The Pin Spinner with cost in mind.
                            Our app is affordable so everyone can use it.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantage-box mx-auto w-100 mb-4 mb-lg-5">
                        <div class="advantage-box-icon mb-4">
                            <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4 class="mb-3">Speed up</h4>
                        <p>
                            Time is precious. The Pin Spinner saves you time making things smooth and simple.
                            With direct links to boards and pins, you no longer have to copy and paste to get to the url.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="advantage-box mx-auto w-100 mb-4 mb-lg-0">
                        <div class="advantage-box-icon mb-4">
                            <i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4 class="mb-3">Productivity</h4>
                        <p>
                            We have integrated time stamps so you can mark every time you pin.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantage-box mx-auto w-100 mb-4 mb-md-0">
                        <div class="advantage-box-icon mb-4">
                            <i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4 class="mb-3">Satisfaction</h4>
                        <p>
                            The Pin Spinner offers 100% satisfaction! We have great support for times when you get stuck.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Case -->
    <section id="case" class="case section">
        <div class="container section-header text-center">
            <h2>A Case of Success</h2>
            <p class="lead mx-auto mt-5">
                See what one of our happy customers has to say
            </p>
        </div>
        <div class="container px-0">
            <div class="row w-100 m-0 p-0">
                <div class="col-lg-6 p-0 d-flex align-items-center">
                    <img class="w-100" src="{{ asset('assets/img/office.jpg') }}" alt="image">
                </div>
                <div class="col-lg-6 p-0 d-flex align-items-stretch">
                    <div class="d-flex align-items-center">
                        <div class="card border-0 text-left text-white rounded-0 mb-lg-0 p-5">
                            <div class="card-block">
                                <p class="card-text lead mb-3">
                                    The app is awesome! It helps my company accelerate processes, help lower costs,
                                    and increase the quality of our products. It is very easy to use, lightweight
                                    application and runs smoothly on various devices. The adoption of AppX has resulted
                                    in overall improvement for the company and customer satisfaction. AppX is an essential part
                                    of our company now.
                                </p>
                                <h4 class="text-left">John Doe</h4>
                                <p class="mb-0 text-left">CEO - Company X</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Info -->
    <section class="info section section-gray text-center text-lg-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2>Simple and Powerful</h2>
                        <p class="lead mt-4">
                            AppX is simple and powerful at the same time. While it has a simple and beautiful
                            interface, it provides abundant functionality, is customizable and very easy to use.
                            Let AppX help your business grow.
                        </p>
                        <a class="btn btn-primary btn-rounded btn-xlg btn-custom mt-3" href="#" role="button">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="mx-auto mt-5 mt-lg-0 float-lg-right" src="{{ asset('assets/img/screens.png') }}" alt="image">
                </div>
            </div>
        </div>
    </section>


    <!-- Clients -->
    <section id="clients" class="clients section">
        <div class="container section-header text-center">
            <h2>Some People Who Use The Pin Spinner</h2>
            <p class="lead mx-auto mt-5">
                Here are some of our valued users
            </p>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4">
                    <img class="my-5 m-lg-0" src="{{ asset('assets/img/client-01.png') }}" alt="image">
                </div>
                <div class="col-lg-4">
                    <img class="mb-5 mb-lg-0" src="{{ asset('assets/img/client-02.png') }}" alt="image">
                </div>
                <div class="col-lg-4">
                    <img class="mb-5 mb-lg-0" src="{{ asset('assets/img/client-03.png') }}" alt="image">
                </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-lg-4">
                    <img class="mb-5 mb-lg-0" src="{{ asset('assets/img/client-04.png') }}" alt="image">
                </div>
                <div class="col-lg-4">
                    <img class="mb-5 mb-lg-0" src="{{ asset('assets/img/client-05.png') }}" alt="image">
                </div>
                <div class="col-lg-4">
                    <img class="mb-5 mb-lg-0" src="{{ asset('assets/img/client-06.png') }}" alt="image">
                </div>
            </div>
        </div>
    </section>


    <!-- Plans -->
    <section id="plans" class="plans section section-gray">
        <div class="container section-header text-center">
            <h2>Our Price</h2>
            <p class="lead mx-auto mt-5">
                Affordable prices with everyone in mind!
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="card border-0 mb-5 mb-lg-0 p-5">
                        <div class="card-block text-muted">
                            <p class="card-text mb-3">$7</p>
                            <h4 class="card-title m-0">monthly</h4>
                        </div>
                        <ul class="list-group py-4">
                            <li class="list-group-item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                All features
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Support
                            </li>
                        </ul>
                        <div class="card-block">
                            <a class="btn btn-primary btn-block btn-rounded btn-xlg btn-custom" href="/subscribe" role="button">Sign Up!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section id="newsletter" class="newsletter section text-center text-white">
        <div class="container section-header mb-5">
            <h2>Newsletter</h2>
            <p class="lead mx-auto mt-5">
                Subscribe to our newsletter and stay informed about our news
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline d-flex justify-content-center">
                        <input class="form-control form-control-lg mr-lg-3" type="text" placeholder="Your email adress">
                        <button type="submit" class="btn btn-primary btn-xlg btn-light mt-3 mt-lg-0">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section id="faq" class="faq section section-gray">
        <div class="container section-header mb-5 text-center">
            <h2>FAQ</h2>
            <p class="lead mx-auto mt-5">
                Some questions you may have
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion" class="mx-auto" role="tablist">
                        <div class="card mb-1 border-0">
                            <div class="card-header p-0" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        How does AppX support work?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Our support center runs 24 hours a day, 7 days a week, 365 days a year. You can contact us by email or phone.
                                    Contact us any time you wish. We have a team fully qualified to help with any questions or difficulties.
                                    Our goal is your complete satisfaction.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 border-0">
                            <div class="card-header p-0" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is there a trial period?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    There is a 30 day trial period. In this period all the features are active and you can use the application
                                    completely. After this period the charges begin to be made.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 border-0">
                            <div class="card-header p-0" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What frequency of updates?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Monthly updates will be released for performance improvements, bug fixes, and the addition of new features.
                                    Security updates will be made as soon as possible after identification.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 border-0">
                            <div class="card-header p-0" role="tab" id="headingFour">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Under what circumstances is refund allowed?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    Refund will be granted within 7 business days after the trial period. After this period refunds will
                                    not be granted. For periods of application inoperability due to maintenance and upgrades, the refund will
                                    be proportional to the period of inactivity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section id="contact" class="contact section pb-0 text-center">
        <div class="container section-header">
            <h2>Contact Us</h2>
            <p class="lead mx-auto mt-5">
                Call us or send a message
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            appx@appx.com
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            +33 12 1234 5678
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            26 Rue Saint-Martin, Paris, France
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <form id="contact-form" method="post" action="php/contact.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control form-control-lg mb-3" id="name" name="name" type="text" placeholder="Your name" required>
                                <input class="form-control form-control-lg mb-3" id="email" name="email" type="email" placeholder="Your email adress" required>
                                <input class="form-control form-control-lg mb-3" id="subject" name="subject" type="text" placeholder="Subject" required>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <textarea class="form-control form-control-lg mb-3 w-100" name="message" rows="5" placeholder="Your message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button class="btn btn-primary btn-rounded btn-xlg btn-custom" name="submit" type="submit">Send the message</button>
                            </div>
                        </div>
                        <br>
                    </form>
                    <div id="error-container"></div>
                </div>
            </div>
        </div>
    </section>

</div>


<!-- Footer -->
<footer class="text-center text-lg-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                The Pin Spinner - 2018 All Rights Reserved
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <ul class="list-inline mb-0 d-flex justify-content-around">
                    <li class="list-inline-item"><a href="#">FAQ's</a></li>
                    <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>

<!-- Loader -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- Maps -->
<script src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyBu1ynGGNGOgWGprPgHz9uRwCBP2Eh0Vrc"></script>
<script src="{{ asset('assets/js/locationpicker.jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Form validation -->
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

<!-- Navigation -->
<script src="{{ asset('assets/js/navigation.js') }}"></script>
<script src="{{ asset('assets/js/navigation.fixed.js') }}"></script>
<script src="{{ asset('assets/js/navigation.scrollspy.js') }}"></script>

<!-- Animation -->
<script src="{{ asset('assets/js/jquery.particleground.min.js') }}"></script>

<!-- Main script -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
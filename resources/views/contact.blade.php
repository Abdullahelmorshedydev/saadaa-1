<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAA'DA contact Us</title>
    <link rel="icon"  href="{{asset('Logo/link pic.jpg')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/SAADA.css')}}">
</head>

<body>

    <nav>
        <div class="nav_logo">
            <a href="{{route('home')}}"><img src="{{asset('Logo/nav.jpg')}}" /></a>
        </div>
        <div class="nav_items">
            <ul class="nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('home') }}#cards">Events</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><button class="sigin-btn" onclick="window.location.href='{{ route('login') }}'">sign in</button></li>
            </ul>
        </div>
        <i onclick="showsidebar()" class="fa-solid fa-bars nav-icon" id="NAV-icon"></i>
    </nav>


    <!-- _________________________________________________________________ -->

    <div class="firstdivcontactus">
        <h1 class="firstdivcontactush1 wow animate__animated animate__backInLeft">
            Pop in, Drop Us a Line or <br><span class="firstdivcontactush1span"> Book Now</span>
        </h1>
        <br>
        <p class="firstdivcontactusp wow animate__animated animate__backInRight">
            Thank you for your interest in working with us! Please fill our digital form and we will contact you as
            soon
            as possible.
        </p>
    </div>

    <!-- _______________________________________________________________________ -->
    <div class="seconddivcontactus">

        <div class="seconddivcontactus1 wow animate__animated animate__zoomInLeft animate__delay-1s">
            <h1 class="seconddivcontactus1h1 ">
                Drop us a Line
            </h1>
            <form action="" class="form1" style="padding: 0px;" onsubmit="return validateForm()">
                <h3 class="seconddiv1contactus1h3">Your Name</h3>
                <input class="input1" type="text" id="name">
                <div id="nameError" class="error"></div>

                <h3 class="seconddiv2contactus1h3">Your Email</h3>
                <input class="input2" type="email" id="email">
                <div id="emailError" class="error"></div>

                <h3 class="seconddiv3contactus1h3">Your Feedback</h3>
                <input class="input3" type="text" id="feedback">
                <div id="feedbackError" class="error"></div>

                <button type="submit" class="seconddivcontactusbutton">Submit</button>
        </div>

        <img class="sorafunday wow animate__animated animate__zoomInRight animate__delay-1s" src="{{asset('Logo/far7.jpg')}}">


    </div>



    <!-- ___________________________________________________ -->
    <section class="section3 wow animate__animated animate__lightSpeedInRight">
        <div class="div1section3 wow animate__animated">
            <i class="fa-solid fa-phone"></i>
            <p>800-275-8777</p>
        </div>
        <div class="div2section3">
            <i class="fa-brands fa-skype"></i>
            <p>SAA'DA Skype</p>
        </div>
        <div class="div3section3">
            <i class="fa-solid fa-message"></i>
            <p>SAA'DA@info.com</p>
        </div>
    </section>
    <!-- _______________________________________________________ -->
    <section class="section4 wow animate__animated animate__lightSpeedInLeft">
        <div class="div1section4">
            <h1>How to Find <br><span> Our SAA'DA </span> </h1>
        </div>
        <div class="div2section4">
            <p>works with different organizations of all shapes, sizes and locations across all industries to give
                our
                clients an unmatched experience that stands out.</p>
        </div>
    </section>
    <!-- _____________________________________________________________ -->
    <section class="section5">
        <div class="div1section5 wow animate__animated animate__fadeInBottomLeft">
            <iframe class="map2"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.77448154454!2d31.2237049256424!3d30.07199816726684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fc1158defb%3A0xc53ffe335f9d6297!2sPBIS%20BIS%20Faculty%20of%20Commerce%20and%20Business%20Administration!5e0!3m2!1sar!2seg!4v1714510834416!5m2!1sar!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="div2section5 wow animate__animated animate__fadeInBottomRight">
            <h1 class="div2section5a">Opening Times</h1>
            <p class="div2section5p1">Monday – Friday: 9:00 – 18:00</p>
            <p class="div2section5p2">Closed Staurday, Sunday and public holidays</p>
            <br>
            <br>
            <br>
            <br>
            <h1 class="div2section5h2">Address</h1>
            <p class="div2section5p3">43 Abu Fida,, cairo, 4271184.</p>
            <p class="div2section5p4">Muhammad Mazhar, Zamalek, Cairo Governorate</p>
        </div>

    </section>

    <footer>Copyright ©2024 BIS. All rights reserved.</footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
    </script>
<script src="{{asset('js/SAADA.js')}}"></script>
<script src="{{asset('js/showcard.js')}}"></script>
	<script src="{{asset('js/contact us .js')}}"></script>
</body>

</html>
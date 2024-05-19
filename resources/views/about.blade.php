<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAA'DA About Us </title>
    <link rel="icon" href="{{asset('Logo/link pic.jpg')}}" />

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
                <li><button class="sigin-btn" onclick="window.location.href='{{ url('login') }}'">sign in</button></li>
            </ul>
        </div>
        <i onclick="showsidebar()" class="fa-solid fa-bars nav-icon" id="NAV-icon"></i>
    </nav>

    <div class="feedbacksection1">

        <div class="feedbacksection1divkbera ">
            <div class="feedbacksection1divkbera1">
                <h1 class="feedbacksection1divkbera1h1 wow animate__animated animate__fadeInLeft"> Meet Our</h1>

            </div>
            <div class="feedbacksection1divkbera2">

                <h1 class="feedbacksection1divkbera2h1 wow animate__animated animate__fadeInRight"> SAA'DA Team</h1>
            </div>
        </div>
        <!-- ______________________________________________________________________________ -->

        <div class="feedbacksection1div2">
            <p class="feedbacksection1div2p wow animate__animated animate__fadeInUp">Our plans and events coordination
                services are designed for Any Sized
                budget, meaning anyone. Our teams and our awesome services will satisfy all your needs.</p>
        </div>

    </div>
    <!-- ___________________________________________________________________________________________________________________________________________________ -->
    <div class="our-team">


        <div class="ourteam1">
            <!-- ________________________ -->
            <div class="sabrina">

                <div class="sabrinaimg">
                    <img class="sabrinaimg1 wow animate__animated animate__backInDown" src="{{asset('Logo/ezz.jpg')}}" alt="">
                </div>

                <div class="sabrinacontact wow animate__animated animate__bounceInUp">
                    <h2 class="sabrinacontacth2"> Ezz-Eldin Yahya</h2>
                    <p class="sabrinacontactp">Front-end developer </p>

                    <div class="Sabrinaicon">
                        <i class="fa-brands fa-facebook  sabrinaface"
                            onclick="    window.location.assign('{{url('www.facebook.com/ezz.yahya.74/')}}')"></i>
                        <i class="fa-brands fa-instagram sabrinainsta "
                            onclick="    window.location.assign('{{url('www.instagram.com/ezzz_yahya?igsh=MTdnMXAzZzh2azUxaQ==')}}')"></i>
                        <i class="fa-solid fa-envelope sabrinax "
                            onclick="    window.location.href = 'mailto:ezzyahya96@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <!-- ____________________________________________ -->
            <div class="hashem">
                <div class="hashemimg">
                    <img class="hashemimg1 wow animate__animated animate__backInDown" src="{{asset('Logo/hashem.jpg')}}" alt="">
                </div>
                <div class="hashemcontact wow animate__animated animate__bounceInUp">
                    <h2 class="hashemcontacth2"> Hashem Mohamed </h2>
                    <p class="hashemcontactp">Front-end developer </p>

                    <div class="hashemicon">

                        <i class="fa-brands fa-facebook hashemfacebook"
                            onclick="  window.location.assign('{{url('www.facebook.com/hashem.mohamed2002')}}')"></i>
                        <i class="fa-brands fa-instagram hasheminsta"
                            onclick="    window.location.assign('{{url('www.instagram.com/hashem7mohamed?igsh=ZXQ1bDB2YXRxZDdt&utm_source=qr')}}')"></i>
                        <i class="fa-solid fa-envelope hashemx"
                            onclick="    window.location.href = 'mailto:zal77166@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <!-- ___________________________________ -->
            <div class="sabrina">

                <div class="sabrinaimg">
                    <img class="sabrinaimg1 wow animate__animated animate__backInDown" src="{{asset('Logo/abdalrahman2.jpg')}}" alt="">
                </div>

                <div class="sabrinacontact wow animate__animated animate__bounceInUp">
                    <h2 class="sabrinacontacth2"> Abdalrahman Ehab </h2>
                    <p class="sabrinacontactp">Back-end developer </p>

                    <div class="Sabrinaicon">
                        <i class="fa-brands fa-facebook  sabrinaface"
                            onclick="    window.location.assign('{{url('www.facebook.com/abdalrahman.ehab.52')}}')"></i>
                        <i class="fa-brands fa-instagram sabrinainsta "
                            onclick="    window.location.assign('{{url('www.instagram.com/abdalrahman_678?igsh=cmV1eTVhM2s0bzJ4')}}')"></i>
                        <i class="fa-solid fa-envelope sabrinax "
                            onclick="    window.location.href = 'mailto:abdalrahmanehab76@gmail.com'"></i>
                    </div>
                </div>
            </div>



        </div>
        <!-- ____________________________________________________________________ -->


        <div class=" ourteam1">




            <div class="may">
                <div class="mayimg wow animate__animated animate__bounceInDown">
                    <img class="mayimg1" src="{{asset('Logo/sabrina2.jpg')}}" alt="">
                </div>

                <div class="maycontact wow animate__animated animate__backInUp" style="background-color: #ff92ed;">
                    <h2 class="maycontacth2">Sabrina Hesham</h2>
                    <p class="maycontactp">Back-end developer </p>

                    <div class="mayicon">
                        <i class="fa-brands fa-facebook  mayface"
                            onclick="    window.location.assign('{{url('www.facebook.com/sabrinahesham27')}}')"></i>
                        <i class="fa-brands fa-instagram mayinsta"
                            onclick="    window.location.assign('{{url('www.instagram.com/sabrina_hisham75?igsh=bmN1OXdxeHgwZ3Rj')}}')"></i>
                        <i class="fa-solid fa-envelope mayx"
                            onclick=" window.location.href='mailto:sabrinahesham578@gmail.com'"></i>
                    </div>
                </div>
            </div>

            <!-- ________________________ -->
            <div class="may">
                <div class="mayimg">
                    <img class="mayimg1 wow animate__animated animate__backInDown" src="{{asset('Logo/may.jpg')}}" alt="">
                </div>

                <div class="maycontact  wow animate__animated animate__bounceInUp" style="background-color: #ff92ed;">
                    <h2 class="maycontacth2">May Mahmoud</h2>
                    <p class="maycontactp">Front-end developer </p>

                    <div class="mayicon">
                        <i class="fa-brands fa-facebook  mayface"
                            onclick="    window.location.assign('{{url('www.facebook.com/maaymahmoud69')}}')"></i>
                        <i class="fa-brands fa-instagram mayinsta"
                            onclick="    window.location.assign('{{url('www.instagram.com/maaaymahmoud?igsh=YWVpdHV5c2piZ3Zl')}}')"></i>
                        <i class="fa-solid fa-envelope mayx "
                            onclick="    window.location.href='mailto:yasminsaadhassan@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <!-- ____________________________________________ -->
            <div class="hashem">
                <div class="hashemimg wow animate__animated animate__backInDown">
                    <img class="hashemimg1" src="{{asset('Logo/yasmin.jpg')}}" alt="">
                </div>
                <div class="hashemcontact wow animate__animated animate__bounceInUp" style="background-color: #ff92ed;">
                    <h2 class="hashemcontacth2"> Yassmen Saad </h2>
                    <p class="hashemcontactp">Business</p>

                    <div class="hashemicon">

                        <i class="fa-brands fa-facebook hashemfacebook"
                            onclick="    window.location.assign('{{url('www.facebook.com/yasminsaad.842799')}}')"></i>
                        <i class="fa-brands fa-instagram hasheminsta"
                            onclick="    window.location.assign('{{url('www.instagram.com/yasminsaad13?igsh=YjMwamg4ZjZnbmhs')}}')"></i>
                        <i class="fa-solid fa-envelope hashemx"
                            onclick="    window.location.href='mailto:yasminsaadhassan@gmail.com'"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ___________________________________ -->


                    </div>

                </div>

                <!-- ______________________________________________________________________________________________________ -->


                <section class=" section100">
                            <div class="div1section100">
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.77448154454!2d31.2237049256424!3d30.07199816726684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fc1158defb%3A0xc53ffe335f9d6297!2sPBIS%20BIS%20Faculty%20of%20Commerce%20and%20Business%20Administration!5e0!3m2!1sar!2seg!4v1714510834416!5m2!1sar!2seg"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            </section>
                            <!-- ____________________________________________ -->

                            <section class="section81">
                                <div class="div1section81 wow animate__animated animate__rotateInDownLeft">Get
                                    <span>10%-Off</span> Your <br> First
                                    Visit
                                </div>
                                <div class="div2section81 wow animate__animated animate__rotateInUpRight">The goal of
                                    SAA'DA is
                                    Spending
                                    less time selecting your planner for your event andmore time enjoying an amazing
                                    event . </span>
                                </div>
                                <div class="div3section81">
                                    <button onclick="window.location='{{ route('home') }}#cards'" class="last-section-btn wow animate__animated animate__rotateIn">Book Now</button>

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
</body>

</html>
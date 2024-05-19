<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Birthday Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="icon" href="{{asset('Logo/link pic.jpg')}}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/birthday.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sevillana&display=swap');
    </style>
    <!-- Demo styles -->


</head>

<body>


    <div class="weedingpage">
        <div class="weedingimg">
            <img class="weedingimg1 wow animate__animated  animate__fadeInRight" src="{{asset('Logo/222.jpg')}}" alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper">
            <div class="weedinghalls">
                <h3 class="weedinghallsh3 animate__animated animate__fadeInDown">Our Birthday Halls</h3>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{asset('Logo/birthday3.jpg')}}" class=" animate__animated  animate__fadeInLeft" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1 animate__animated  animate__fadeInLeft">AL-Masa Hall </h3>
                            <p class="awlqa3ap animate__animated  animate__fadeInLeft"> For reservations and inquiries:
                                01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2 animate__animated  animate__fadeInLeft"> Address: Al-Masa Hall
                                inside the International Park, Abbas Al-Akkad Extension, Nasr City, Gate No. (2)</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated  animate__fadeInLeft">
                                price:2000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/02..jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1 ">le-ciel Hall </h3>
                            <p class="awlqa3ap "> For reservations and inquiries:
                                01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2 "> Address: le-ciel Hall
                                Abdel Wahab El Qadi St., off Salah Salem Road, Ard El Golf, Heliopolis, Cairo </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p ">
                                price:3000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/birthday2.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">AL-Salam Hall </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2"> Address: AL-Salam Hall
                                Al-Thawra Street, intersection with Omar Bin Al-Khattab Street - Nasr City - Cairo. -
                                Inside Dar Al-Ishara</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:5000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/04.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">AL-jawhara Hall </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> Address: AL-jawhara Hall
                                Air Forces House - Salah Salem Road - after Tayaran Street</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:8000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>



        </div>


    </div>
    <!-- ______________________________________________________ -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
</body>

</html>
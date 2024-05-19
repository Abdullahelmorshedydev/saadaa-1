<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>dishparty PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="icon" href="{{asset('Logo/link pic.jpg')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/dishparty.css')}}">
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
            <img class="weedingimg1 animate__animated  animate__fadeInRight" src="{{asset('Logo/dish party.jpg')}}" alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper ">
            <div class="weedinghalls ">
                <h3 class="weedinghallsh3 animate__animated animate__fadeInDown ">Our Dish-Party places</h3>
            </div>

            <div class="swiper-wrapper ">
                <div class="swiper-slide">

                    <img class="animate__animated  animate__fadeInLeft" src="{{asset('Logo/dish4.jpg')}}" alt="">
                    <div class="awlqa3akber animate__animated  animate__fadeInLeft">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1 animate__animated  animate__fadeInLeft ">Saa^ada-villa </h3>
                            <p class="awlqa3ap animate__animated animate__fadeInUp"> For reservations and inquiries:
                                01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2 animate__animated animate__fadeInUp">Address: Masr-Elgdeda, cairo,
                                salah-salem
                                Road, Cairo, Egypt, , Cairo Governorate</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp">
                                price:5000
                            </p>
                            <button class="awlqa3a2button "> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/dish1.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">Cafe-FarhAA </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> Address:80 El korba Street, Heliopolis, Egypt, 17395
                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:10000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/dish2.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">EL-Lagona </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2"> Address: EL-Ein ELsokhna -
                                EL-Ein ELsokhna Road - villa EL-3youn || El ein elsokhna-Goverment

                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:15000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/dish5.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">Cafe-FabrIco </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> Address: Madinet-Nasr
                                DAR-elmodaraat - Salah Salem Road - after Mg building</p>
                        </div>

                        <div class="awlqa3a2  ">
                            <p class="awlqa3a2p ">
                                price:20000
                            </p>
                            <button class="awlqa3a2button "> check out</button>
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
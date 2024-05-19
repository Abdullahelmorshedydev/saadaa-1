<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Engagment Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="icon" href="{{asset('Logo/link pic.jpg')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/engagmentoutdoor.css')}}">
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
            <img class="weedingimg1 animate__animated  animate__fadeInRight" src="{{asset('Logo/engagment.jpg')}}" alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper ">
            <div class="weedinghalls ">
                <h3 class="engagmenthallsh3 animate__animated animate__fadeInDown ">Our EngagEment Halls</h3>
            </div>

            <div class="swiper-wrapper ">
                <div class="swiper-slide">

                    <img class="animate__animated  animate__fadeInLeft" src="{{asset('Logo/engag15.jpg')}}" alt="">
                    <div class="awlqa3akber animate__animated  animate__fadeInLeft">
                        <div class="awlqa3a">
                            <h3 class="engagmenth1 animate__animated  animate__fadeInLeft ">Aچarya house </h3>
                            <p class="engagmentp animate__animated animate__fadeInUp"> For reservations and inquiries:
                                01092055544 - 0105725511
                            </p>
                            <p class="engagmentp2 animate__animated animate__fadeInUp">Address: Acharya House 147 Nile
                                Tourist Street, directly after Abbas Bridge Tunnel / Giza</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="engagmentp animate__animated animate__fadeInUp ">
                                price:8000
                            </p>
                            <button class="engagmentbutton"> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/engag03.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="engagmenth1">Fabriano </h3>
                            <p class="engagmentp"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="engagmentp2"> Address:12 omar ibn el-khattab, elbostan, Heliopolis, Egypt, 11771
                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="engagmentp">
                                price:10000
                            </p>
                            <button class="engagmentbutton"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/engag003.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="engagmenth1">Lozano cuisine </h3>
                            <p class="engagmentp"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="engagmentp2"> Address: Armed Forces Club - Roof of Jewel Plaza Hotel - Maadi
                                Corniche
                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="engagmentp">
                                price:15000
                            </p>
                            <button class="engagmentbutton"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/engag11.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="engagmenth1">AL-Golden Hall </h3>
                            <p class="engagmentp"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="engagmentp2"> Address: AL-Golden Hall GOLDEN House - Salah Salem Road - after
                                EL-Madina Street</p>
                        </div>

                        <div class="awlqa3a2  ">
                            <p class="engagmentp ">
                                price:20000
                            </p>
                            <button class="engagmentbutton "> check out</button>
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
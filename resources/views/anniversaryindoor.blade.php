<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Anniversary Page</title>
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
            <img class="weedingimg1 animate__animated animate__fadeInRight" src="{{asset('Logo/anniversary4.jpg')}}" alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper">
            <div class="weedinghalls">
                <h3 class="weedinghallsh3 animate__animated animate__fadeInDown">Our event planners</h3>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{asset('Logo/anniversary2.jpg')}} " class="animate__animated animate__fadeInLeft" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a animate__animated animate__fadeInLeft">
                            <h3 class="awlqa3ah1 ">hashem mohammed </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp">
                                price:3000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/anniversary1.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">sabrina hesham </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:6000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/anniversary3.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">ezz yahya </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2">proffesinal event planner</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:8000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/anniversary5.jpg')}} ">
                    <div class=" awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">may mahmoud</h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:10000
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
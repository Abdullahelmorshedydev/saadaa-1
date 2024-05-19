<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Engagment Page</title>
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
            <img class="weedingimg1 animate__animated  animate__fadeInRight" src="./logo/indoor engagment logo.jpg"
                alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper">
            <div class="weedinghalls">
                <h3 class="engagmentindoorhallsh3 animate__animated animate__fadeInDown ">Our event planners</h3>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{asset('Logo/indoor engagment 1.jpg')}}" class="animate__animated  animate__fadeInLeft" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a animate__animated  animate__fadeInLeft">
                            <h3 class="awlqa3ah1" style="color: #d400ae; ">Mona Zaki </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2"> Professional event planner </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp" style="color: #d400ae;">
                                price:8000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/indoor engagment 2.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">hossam antika </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:10000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/indoor engagment 4.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">ezz yahya </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2">proffesinal event planner</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:15000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/indoor engagment 3.jpg')}} ">
                    <div class=" awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">Bothina amr </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:20000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
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
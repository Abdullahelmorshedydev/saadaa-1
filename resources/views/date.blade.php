<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DATE PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/date.css')}}">
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
            <img class="weedingimg1 animate__animated  animate__fadeInRight" src="{{asset('Logo/date0.jpg')}}" alt="">
        </div>


        <!-- Swiper -->

        <div class="swiper mySwiper ">
            <div class="weedinghalls ">
                <h3 class="weedinghallsh3 animate__animated animate__fadeInDown ">Our DATE places</h3>
            </div>

            <div class="swiper-wrapper ">
                <div class="swiper-slide">

                    <img class="animate__animated  animate__fadeInLeft" src="{{asset('Logo/date2.jpg')}}" alt="">
                    <div class="awlqa3akber animate__animated  animate__fadeInLeft">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1 animate__animated  animate__fadeInLeft ">IBIZA </h3>
                            <p class="awlqa3ap animate__animated animate__fadeInUp"> For reservations and inquiries:
                                01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2 animate__animated animate__fadeInUp">Address: Ein ELsokhna , Red sea,

                                Suez Road, Cairo, Egypt, , Ein elsokhna Governorate</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp">
                                price:6000
                            </p>
                            <button class="awlqa3a2button "> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/date1.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">HEAVEN </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> Address:33 Kornish Maadi , cairo, Egypt, 12792
                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:3500
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/date4.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">BAHR </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2"> Address: 13 Omar Ibn Elkhattab Alexandria -
                                Stainly Road - Stainly Bridge || Alexandria-Goverment

                            </p>
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
                    <img src="{{asset('Logo/date3.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1"> HYMALYIA</h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> Address: Hadiekt el asmak
                                elzamalek - abu el fada street - </p>
                        </div>

                        <div class="awlqa3a2  ">
                            <p class="awlqa3a2p ">
                                price:10000
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
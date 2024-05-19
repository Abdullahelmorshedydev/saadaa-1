<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Funday PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="icon" href=".{{asset('Logo/link pic.jpg')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/funday.css')}}">
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
            <img class="weedingimg1 animate__animated  animate__fadeInRight" src="{{asset('Logo/party.jpg')}}" alt="">
        </div>

        <!-- Swiper -->

        <div class="swiper mySwiper ">
            <div class="weedinghalls ">
                <h3 class="weedinghallsh3 animate__animated animate__fadeInDown ">Our funday places</h3>
            </div>

            <div class="swiper-wrapper ">
                <div class="swiper-slide">

                    <img class="animate__animated  animate__fadeInLeft" src="{{asset('Logo/fun1.jpg')}}" alt="">
                    <div class="awlqa3akber animate__animated  animate__fadeInLeft">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1 animate__animated  animate__fadeInLeft ">Wadi-Degla protectorate </h3>
                            <p class="awlqa3ap animate__animated animate__fadeInUp"> For reservations and inquiries:
                                01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2 animate__animated animate__fadeInUp">Address: Maadi, Qattamiya, Ain
                                Sokhna Road, Cairo, Egypt, Wadi Degla Road, Tora District, Cairo Governorate</p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp">
                                price:400000
                            </p>
                            <button class="awlqa3a2button "> check out</button>
                        </div>

                    </div>



                </div>

                <div class="swiper-slide">
                    <img src="{{asset('Logo/fun03.jpg')}}" alt="">

                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">Fabriano </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> Address:27 El hegaiz Street, Heliopolis, Egypt, 31721
                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:500000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>


                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/enhanced (7).jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">Lozano cuisine </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2"> Address: Elsheikh-zayed -Mena Garden City- villa 52/9 || Zayed-City

                            </p>
                        </div>

                        <div class="awlqa3a2">
                            <p class="awlqa3a2p">
                                price:600000
                            </p>
                            <button class="awlqa3a2button"> check out</button>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('Logo/fun5.jpg')}}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1">AL-jawhara Hall </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> Address: AL-jawhara Hall
                                Air Forces House - Salah Salem Road - after Tayaran Street</p>
                        </div>

                        <div class="awlqa3a2  ">
                            <p class="awlqa3a2p ">
                                price:300000
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
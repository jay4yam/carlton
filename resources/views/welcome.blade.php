@extends('layouts.app')

@section('content')
<header id="banner" class="flex flex-col justify-start md:justify-between" data-enllax-ratio=".5">
    <div class="container mx-auto flex items-center justify-center md:justify-start px-4 md:px-48 py-12">
        <!--Logo-->
        <div id="logo">

            <!--Logo that is shown on the banner-->
            <img src="images/logo.png" id="banner-logo" alt="Landing Page"/>
            <!--End of Banner Logo-->

        </div>
        <!--End of Logo-->
    </div>
    <!--Banner Content-->
    <div id="banner-content" class="flex flex-wrap container mx-auto px-12 md:px-48 py-2 md:py-16">

        <!-- texte de presentation -->
        <div class="w-full md:w-1/2">

            <div class="section-heading">
                <h1 class="text-2xl md:text-3xl text-center md:text-left">Enjoy a unique experience</h1>
                <h2 class="hidden md:block">Welcome to the Hôtel Carlton in Cannes,
                    a symbol of elegance and refinement on the famous Croisette.
                    This legendary establishment, the jewel of the Côte d'Azur,
                    offers a sumptuous setting where luxury and tradition
                    meet for an unforgettable experience.
                    Enjoy luxurious rooms, a private beach and exceptional service,
                    all with breathtaking views of the Mediterranean.
                </h2>
            </div>

            <!--Call to Action-->
            <a href="https://www.michaelzingraf.com" class="">
                <img class="w-1/6 hidden md:block" src="{{ asset('images/logo-mzre.jpg') }}" alt="logo Michaël Zingraf Real Estate">
            </a>
            <!--End Call to Action-->

        </div>

        <!-- formulaire de réservation -->
        <div class="w-full md:w-1/2 h-fit bg-white/90 rounded-md">
            <form action="{{ route('booking.request') }}" class="p-4 text-center" method="post">
                @csrf
                <h3 class="font-bold text-sky-800 uppercase">Book a dream stay in Cannes' most emblematic hotel</h3>
                <div class="flex gap-4 py-2">
                    <label for="firstname" class="w-full">
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('firstname') border border-red-600 text-red-600 @enderror" type="text" name="firstname" id="firstname" maxlength="100" placeholder="firstname">
                        @error('firstname')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="lastname" class="w-full">
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('lastname') border border-red-600 text-red-600 @enderror" type="text" name="lastname" id="lastname" maxlength="100" placeholder="lastname *">
                        @error('lastname')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <div class="flex gap-4 py-2">
                    <label for="phone" class="w-full">
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('phone') border border-red-600 text-red-600 @enderror" type="text" name="phone" id="phone" maxlength="100" placeholder="phone number">
                        @error('phone')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="email" class="w-full">
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('email') border border-red-600 text-red-600 @enderror" type="email" name="email" id="email" maxlength="100" placeholder="email *">
                        @error('email')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <div class="flex gap-4 py-2">
                    <label for="guest_number" class="w-full">
                        <p class="text-xs text-left text-gray-400">Number of guests</p>
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('guest_number') border border-red-600 text-red-600 @enderror" type="number" name="guest_number" id="guest_number" maxlength="100" value="2">
                        @error('guest_number')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="arrive_date" class="w-full">
                        <p class="text-xs text-left text-gray-400">Arrival date</p>
                        <input class="w-full p-4 hover:border-2 border-sky-800 @error('arrival_date') border border-red-600 text-red-600 @enderror" type="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" max="{{ \Carbon\Carbon::now()->addYear() }}" name="arrival_date" id="arrival_date" maxlength="100" placeholder="email *">
                        @error('arrival_date')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <button type="submit" class="m-2 bg-sky-800 hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">Booking Request</button>
                <p class="text-sm text-gray-500 p-2 italic">An exclusive offer from Michaël Zingraf Real Estate</p>
                <p class="p-2 text-xs text-justify text-gray-400 hidden md:block">By submitting this booking request form, you consent to the collection and use of your personal data by our hotel
                    in accordance with our privacy policy. Your information will only be used to process your booking and to improve
                    our services. We are committed to protecting your privacy and will not share your data with third parties without
                    your explicit consent. For more details, please see our privacy policy on our website.</p>
            </form>
        </div>
    </div><!--End of Banner Content-->
</header><!--End of Header-->

<!--Main Content Area-->
<main id="content">

    <!--Introduction-->
    <section id="about" class="introduction container mx-auto py-12">

        <div class="flex flex-wrap px-4 md:px-32">

            <div class="w-full md:w-1/3">
                <div class="section-heading">
                    <h3 class="uppercase">Carlton Cannes</h3>
                    <h2 class="section-title text-sky-800 text-2xl md:text-3xl">Enjoy your dream holiday</h2>
                    <p class="section-subtitle">
                        Discover the Carlton in Cannes, a remarkable hotel that embodies glamour and elegance.
                        Enjoy exceptional hotel services and splendid flats, for a unique experience that combines
                        luxury and comfort in one of the most sought-after destinations on the Côte d'Azur.
                    </p>
                </div>
            </div>

            <div class="w-full md:w-2/3 flex flex-wrap justify-center items-start md:items-center gap-4 md:gap-0">

                <!--Icon Block-->
                <div class="w-full md:w-1/2 icon-block icon-top wow fadeInUp p-0 md:p-8" data-wow-delay="0.1s">
                    <div class="icon-block-description">
                        <h4 class="text-sky-800 uppercase">High-quality flats</h4>
                        <p class="text-justify">Ranging from 2 to 5 rooms. Each flat is designed to ensure
                            a luxurious and unforgettable experience.
                        </p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="w-full md:w-1/2 icon-block icon-top wow fadeInUp p-0 md:p-8" data-wow-delay="0.3s">
                    <div class="icon-block-description">
                        <h4 class="text-sky-800 uppercase">Garden and Pool</h4>
                        <p>Take advantage of the hotel's magnificent garden and indoor swimming pool to relax and unwind.</p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="w-full md:w-1/2 icon-block icon-top wow fadeInUp p-0 md:p-8" data-wow-delay="0.5s">
                    <div class="icon-block-description">
                        <h4 class="text-sky-800 uppercase">A secure environment</h4>
                        <p>Benefit from the hotel's optimum security for total peace of mind during your stay.</p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="w-full md:w-1/2 icon-block icon-top wow fadeInUp p-0 md:p-8" data-wow-delay="0.5s">
                    <div class="icon-block-description">
                        <h4 class="text-sky-800 uppercase">Luxury hotels in Cannes</h4>
                        <p>benefit from a top-of-the-range hotel offer, including catering and all hotel services.</p>
                    </div>
                </div>
                <!--End of Icon Block-->

            </div>

        </div>


    </section>
    <!--End of Introduction-->


    <!--Gallery-->
    <aside id="gallery" class="container mx-auto flex flex-wrap scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">

        <a href="/image/gallery-images/gallery-image-1.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="0.1s">
            <img src="images/gallery-images/gallery-image-1.jpg" alt="Landing Page"/>
        </a>
        <a href="images/gallery-images/gallery-image-2.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="0.3s">
            <img src="images/gallery-images/gallery-image-2.jpg" alt="Landing Page"/>
        </a>
        <a href="images/gallery-images/gallery-image-3.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="0.5s">
            <img src="images/gallery-images/gallery-image-3.jpg" alt="Landing Page"/>
        </a>
        <a href="images/gallery-images/gallery-image-4.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="1.1s">
            <img src="images/gallery-images/gallery-image-4.jpg" alt="Landing Page"/>
        </a>
        <a href="images/gallery-images/gallery-image-5.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="0.9s">
            <img src="images/gallery-images/gallery-image-5.jpg" alt="Landing Page"/>
        </a>
        <a href="images/gallery-images/gallery-image-6.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn" data-wow-delay="0.7s">
            <img src="images/gallery-images/gallery-image-6.jpg" alt="Landing Page"/>
        </a>

    </aside>
    <!--End of Gallery-->


    <!--Content Section-->
    <div id="services" class="scrollto clearfix py-24 px-2">

        <div class="container mx-auto flex flex-wrap no-padding-bottom clearfix">

            <!--Content Left Side-->
            <div class="w-full md:w-1/4">
                <!--User Testimonial-->
                <blockquote class="testimonial text-center md:text-right bigtest">
                    <q class="uppercase text-gray-400 text-center md:text-left">
                        Carlton Cannes<br>
                        A Place where History is endlessly being written
                    </q>
                </blockquote>
                <!-- End of Testimonial-->

            </div>
            <!--End Content Left Side-->

            <!--Content of the Right Side-->
            <div class="w-full md:w-1/3 p-0 md:pl-12">
                <div class="section-heading">
                    <h3>BOOKING</h3>
                    <h2 class="section-title text-sky-800 text-2xl md:text-3xl">In an outstanding hotel</h2>
                    <p class="section-subtitle">
                        Since its reopening, the Carlton Cannes has once again become the emblem of glamour and hotel excellence in Cannes,
                        offering an unrivalled luxury experience to visitors from all over the world.
                    </p>
                </div>
                <p class="py-2 text-gray-400">
                    Immerse yourself in elegance and absolute security by booking a dream holiday at the Carlton in Cannes,
                    where palatial luxury meets exceptional service for an unforgettable experience.
                </p>
                <p class="py-2 text-gray-400">
                    Make the most of your stay with access to the Carlton Hotel's exclusive services,
                    including a swimming pool, spa, elegant bar and high gourmet dining.
                </p>
                <a href="#" data-videoid="_Hchym7kMxw?si=BNcSWzmz8rKiEz35" data-videosite="youtube" class="button video link-lightbox">
                    WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
                </a>
            </div>
            <!--End Content Right Side-->

            <div class="w-full md:w-1/3">
                <img src="images/carlton-drawing.jpg" alt="Carlton Cannes Entrance"/>
            </div>

        </div>


    </div>
    <!--End of Content Section-->


    <!--restaurants-->
    <section id="clients" class="scrollto py-12 px-2">

        <div class="container mx-auto w-full md:w-3/4 flex flex-wrap">

            <div class="w-full md:w-1/3">

                <div class="section-heading">
                    <h3 class="uppercase">Restaurants & Beach Club</h3>
                    <h2 class="section-title text-sky-800 text-2xl md:text-3xl">Awake your senses</h2>
                    <p class="section-subtitle">
                        Enjoy three exceptional restaurants: Riviera, Ruya and Beach Club,
                        renowned for their refined cuisine and unique atmosphere.
                    </p>
                </div>

            </div>

            <div class="w-full md:w-2/3 flex flex-wrap">
                <a href="#" class="w-full md:w-1/3 p-1">
                    <img class="w-full" src="images/company-images/restaurant-riviera.jpg" alt="Restaurant Riviera Carlton Cannes"/>
                    <div class="client-overlay"><span>Riviera</span></div>
                </a>

                <a href="#" class="w-full md:w-1/3 p-1">
                    <img src="images/company-images/restaurant-ruya.jpg" alt="Restaurant Ruya Carlton Cannes"/>
                    <div class="client-overlay"><span>Ruya</span></div>
                </a>

                <a href="#" class="w-full md:w-1/3 p-1">
                    <img src="images/company-images/restaurant-plage.jpg" alt="Private Beach Carlton Cannes"/>
                    <div class="client-overlay"><span>Beach Club</span></div>
                </a>

            </div>

        </div>
    </section>
    <!--End of Clients-->

    <!--apartement Tables-->
    <section id="pricing" class="secondary-color text-center scrollto clearfix ">
        <div class="row clearfix">

            <div class="section-heading">
                <h3>YOUR CHOICE</h3>
                <h2 class="section-title text-sky-800 text-2xl md:text-3xl">Discover the perfect flat for you</h2>
            </div>

            <div class="w-full mx-auto">
                <div class="flex border-b border-gray-300">
                    <button
                        class="w-1/2 py-4 text-center text-sky-800 uppercase bg-gray-100 focus:outline-none hover:bg-sky-800 hover:text-white active:bg-gray-200"
                        onclick="openTab(event, 'tab1')">4 Bedrooms</button>
                    <button class="w-1/2 py-4 text-center text-sky-800 uppercase bg-gray-100 focus:outline-none hover:bg-sky-800 hover:text-white active:bg-gray-200"
                            onclick="openTab(event, 'tab2')">3 Bedrooms</button>
                    <button class="w-1/2 py-4 text-center text-sky-800 uppercase bg-gray-100 focus:outline-none hover:bg-sky-800 hover:text-white active:bg-gray-200"
                            onclick="openTab(event, 'tab3')">2 Bedrooms</button>
                    <button class="w-1/2 py-4 text-center text-sky-800 uppercase bg-gray-100 focus:outline-none hover:bg-sky-800 hover:text-white active:bg-gray-200"
                            onclick="openTab(event, 'tab4')">1 Bedroom</button>
                </div>
                <div id="tab1" class="tabcontent p-4">
                    <h2 class="text-lg font-bold text-sky-800">4 bedrooms Garden view Residence with balcony</h2>
                    <img src="images/apartments/4-bedrooms.jpg">
                </div>
                <div id="tab2" class="tabcontent p-4 hidden">
                    <h2 class="text-lg font-bold text-sky-800">3 bedrooms Garden view Residence with balcony</h2>
                    <img src="images/apartments/3-bedrooms.jpg">
                </div>
                <div id="tab3" class="tabcontent p-4 hidden">
                    <h2 class="text-lg font-bold text-sky-800">2 bedrooms Garden view Residence with balcony</h2>
                    <img src="images/apartments/2-bedrooms.jpg">
                </div>
                <div id="tab4" class="tabcontent p-4 hidden">
                    <h2 class="text-lg font-bold text-sky-800">2 bedrooms Garden view Residence</h2>
                    <img src="images/apartments/1-bedroom.jpg">
                </div>
            </div>

        </div>
    </section>
    <!--End of Pricing Tables-->
</main>
<!--End Main Content Area-->
@endsection


@section('dedicated_js')
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.add("hidden");
        }
        tablinks = document.getElementsByTagName("button");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active:bg-sky-800");
        }
        document.getElementById(tabName).classList.remove("hidden");
        evt.currentTarget.classList.add("active:bg-sky-800");
    }
</script>
@endsection

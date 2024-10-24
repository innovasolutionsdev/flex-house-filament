<x-app-layout>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg relative bg-cover bg-center" data-setbg="img/hero-bg2.jpg">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span style="color: #F41E1E">TRANSFORM YOUR BODY Now</span>
                        <h1>ACHIEVE YOUR FITNESS GOALS</h1>
                        <p>Your fitness journey starts here! Discover tailored workout plans,<br/> expert coaching, and
                            state-of-the-art equipment to help you succeed.</p>
                        <!-- <a href="#" class="primary-btn">Get Started</a> -->
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Begin -->
    {{-- <section class="about-section spad bg-blue-900">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about.png" alt="">
                        <!-- <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2 class="text-white">Our Journey to Fitness Excellence</h2>
                        <p class="first-para text-black">At Flex House, we are more than just a gym — we are a community committed to helping you reach
                            your full potential. Founded with a passion for fitness and well-being, our goal is to empower individuals to
                            transform their lives through health and exercise.</p>
                        <p class="second-para text-white">With state-of-the-art equipment, experienced trainers, and customized workout plans, we cater
                            to all fitness levels. Whether you're just starting or a seasoned athlete, we are here to support you every step
                            of the way in your fitness journey.</p>
                        <a href="#" class="primary-btn">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h4 class="  font-bold leading-relaxed" style="color: #F41E1E">About Us</h6>
                                <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                    <h2 style="color: #1D2229"
                                        class=" text-4xl font-extrabold font-manrope leading-normal lg:text-start text-center">
                                        The Tale of Our Achievement Story</h2>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                        Our achievement story is a testament to teamwork and perseverance. Together,
                                        we've
                                        overcome challenges, celebrated victories, and created a narrative of progress
                                        and
                                        success.</p>
                                </div>
                        </div>
                        <div class="w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">33+
                                        Years</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Influencing Digital
                                        Landscapes Together</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">125+
                                        Projects
                                    </h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence Achieved
                                        Through Success</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">26+
                                        Awards</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Our Dedication to
                                        Innovation Wins Understanding</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">99% Happy
                                        Clients</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Mirrors our Focus on
                                        Client Satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            style="background-color: #141414" ;
                            onmouseover="this.style.backgroundColor='#141414';"
                            onmouseout="this.style.backgroundColor='#F41E1E';"
                            class="text-white   focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none rounded-sm ">
                        Learn More
                    </button>
                    {{-- <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg> --}}
                    </button>
                </div>
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div
                        class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-black rounded-3xl sm:border border-gray-200 relative">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                             src="img/about.png" alt="about Us image"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our services --}}

    <section class="py-24 relative xl:mr-0 lg:mr-5 mr-0" style="background-color: #141414">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div
                class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1 lg:grid-flow-col-dense">
                <!-- Image section moved up -->
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-red-500 rounded-3xl relative">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                             src="img/about.png" alt="about Us image"/>
                    </div>
                </div>
                <!-- Text section moved down -->
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h4 class="font-bold leading-relaxed" style="color: #F41E1E">About Us</h6>
                                <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                    <h2 style="color: white"
                                        class="text-4xl font-extrabold font-manrope leading-normal lg:text-start text-center">
                                        The Tale of Our Achievement Story</h2>
                                    <p class="text-gray-300 text-base font-normal leading-relaxed lg:text-start text-center">
                                        Our achievement story is a testament to teamwork and perseverance. Together,
                                        we've
                                        overcome challenges, celebrated victories, and created a narrative of progress
                                        and
                                        success.</p>
                                </div>
                        </div>
                        <div class="w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">33+
                                        Years</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Influencing Digital
                                        Landscapes Together</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">125+
                                        Projects
                                    </h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence Achieved
                                        Through Success</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">26+
                                        Awards</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Our Dedication to
                                        Innovation Wins Understanding</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">99% Happy
                                        Clients</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Mirrors our Focus on
                                        Client Satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" style="background-color: #F41E1E;"
                            onmouseover="this.style.backgroundColor='#141414';"
                            onmouseout="this.style.backgroundColor='#F41E1E';"
                            class="text-white focus:ring-4 focus:ring-blue-300 font-medium text-md px-5 py-2.5 me-2 mb-2 focus:outline-none rounded-sm">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section End -->
    {{-- <div class="w-full pl-5 pr-5 py-20 px-10 lg:py-16 lg:px-6" style="background-color: #141414">
        <div class="text-center mb-10">
            <h2 class="text-4xl tracking-tight font-extrabold text-white">Our Services</h2>
        </div>

        <div class="flex flex-col md:flex-row">
            <!-- can help image -->
            <div class="md:mr-20 md:mb-0">
        <img class="w-full md:w-full h-full mx-auto mb-4 rounded-2xl shadow-lg " src="img/about.png" alt="can_help_banner" style="width:500px;">
    </div>

            <!-- end can help image -->

            <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2 ">
        <div class="w-full sm:w-1/2 mb-4 px-2 ">
            <div class="h-full py-4 px-6  transition-all  ease-in-out hover:shadow-lg border-2 rounded-xl bg-gray-100 hover:bg-gray-100" >
                <h3 class="text-2xl font-bold text-black text-md mb-6 hover:text-black">Dynamic Personalization</h3>
                <p class="text-md ">Our platform leverages user data and behavior to provide a highly personalized experience, with dynamic content and product recommendations that change in real-time.</p>

            </div>
        </div>
        <div class="w-full sm:w-1/2 mb-4 px-2">
            <div class="h-full py-4 px-6  transition-all  ease-in-out  hover:shadow-lg border-2 rounded-xl bg-gray-100 hover:bg-gray-100" >
                <h3 class="text-2xl font-bold text-md mb-6 text-black">Mobile-Optimized Interface</h3>
                <p class="text-md ">Our website is designed with a mobile-first approach, offering a seamless browsing experience across all devices, including smartphones and tablets.</p>

            </div>
        </div>

        <div class="w-full sm:w-1/2 mb-4 px-2">
            <div class="h-full py-4 px-6  transition-all  ease-in-out  hover:shadow-lg border-2 rounded-xl bg-gray-100 hover:bg-gray-100" >
                <h3 class="text-2xl font-bold text-md mb-6 text-black">24/7 Customer Support</h3>
                <p class="text-md ">Our U.S.-based customer support team is available around the clock to answer any questions, resolve any issues, and provide helpful solutions. Whether it's through email, phone, or live chat, we're always here to support you.</p>

            </div>
        </div>

        <div class="w-full sm:w-1/2 mb-4 px-2">
            <div class="h-full py-4 px-6  transition-all  ease-in-out  hover:shadow-lg border-2 rounded-xl bg-gray-100 hover:bg-gray-100" >
                <h3 class="text-2xl font-bold text-md mb-6 text-black">Secure Payment Processing</h3>
                <p class="text-md ">We use cutting-edge security measures to protect our customers' sensitive information and ensure the safety of all transactions made on our site.</p>

            </div>
        </div>
    </div>

        </div>
    </div> --}}
    <!-- Services Section Begin -->
    {{-- <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 " style="padding-right: 40px; padding-left:40;">
                    <div class="services-pic">
                        <img src="img/services/hany.png" alt=""  >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="img/services/service-icon-1.png" alt="">
                                    <h4>Body Building</h4>
                                    <p>Build muscle and improve your physique with tailored programs.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="img/services/service-icon-3.png" alt="">
                                    <h4>Strength Training</h4>
                                    <p>Increase strength and endurance with expert-led sessions.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="img/services/service-icon-2.png" alt="">
                                    <h4>Cardio Workouts</h4>
                                    <p>Boost stamina and burn calories with intense cardio routines.</p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="img/services/service-icon-4.png" alt="">
                                    <h4>HIIT</h4>
                                    <p>Burn fat quickly with high-intensity interval training.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> --}}


    <!-- Services Section End -->

    <!-- Membership Section Begin -->
    <section class="membership-section spad  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="color: #1D2229" class="font-extrabold">Membership Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl" style="background-color: #1D2229">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #141414" ;
                                onmouseover="this.style.backgroundColor='#F41E1E';"
                                onmouseout="this.style.backgroundColor='#141414';"
                                class="text-white bg-black hover:bg-red-600 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-10">
                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="membership-item rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <div class="mi-title rounded-t-2xl">
                            <h4>1 Month</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price" style="color: #F41E1E">Rs. 3000</h2>

                        <!-- Added a description section -->
                        <p class="text-gray-600 text-md px-4 py-2">
                            Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes.
                            Ideal for short-term fitness goals!
                        </p>

                        <ul>
                            <!-- List items can be added here -->
                        </ul>
                        <button type="button"
                                style="background-color: #F41E1E" ;
                                class="text-white  hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium  text-md px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                            Register
                            Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Membership Section End -->

    <!-- Classes Section Begin -->
    <!-- <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <div class="row classes-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-1.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>
                            <span><i class="fa fa-user"></i> Ryan Knight</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-4.jpg">
                        <div class="si-text">
                            <h4>Karate</h4>
                            <span><i class="fa fa-user"></i> Kevin McCormick</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>
                            <span><i class="fa fa-user"></i> Randy Rivera</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Dance</h4>
                            <span><i class="fa fa-user"></i> Russell Lane</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Personal Training</h4>
                            <span><i class="fa fa-user"></i> Cole Robertson</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-6.jpg">
                        <div class="si-text">
                            <h4>Weight Loss</h4>
                            <span><i class="fa fa-user"></i> Ryan Scott</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Personal Training</h4>
                            <span><i class="fa fa-user"></i> Cole Robertson</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Weight Loss</h4>
                            <span><i class="fa fa-user"></i> Ryan Scott</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Classes Section End -->
    <div class="font-[manrope] my-4 pt-10 pb-20" style="background-color: #141414">
        <div class="max-w-5xl max-lg:max-w-2xl mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-white text-4xl font-extrabold font-manrope leading-normal lg:text-start text-center">
                    Meet our team</h2>
                <p class="text-gray-400 text-sm mt-4 leading-relaxed">Veniam proident aute magna anim excepteur et ex
                    consectetur velit ullamco veniam minim aute sit. Ullamco nisi enim ipsum irure laboris ad ut. Esse
                    cupidatat deserunt magna aute.</p>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 max-md:justify-center mt-12">
                <div
                    class="border rounded-xl overflow-hidden max-md:max-w-[300px] transition-transform transform hover:scale-105">
                    <img src="https://readymadeui.com/team-1.webp"
                         class="w-full h-60 object-contain object-top bg-gray-200"/>

                    <div class="p-4 bg-white">
                        <h4 class="text-gray-900  font-bold">John Doe</h4>
                        <p class="text-red-500 text-sm font-semibold mt-1">Software Engineer</p>

                        <div class="mt-4">
                            <p class="text-gray-600 text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim
                                non voluptate consectetur.</p>
                        </div>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff"
                                     viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#03a9f4] hover:bg-[#03a1f4] active:bg-[#03a9f4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#0077b5] hover:bg-[#0055b5] active:bg-[#0077b5]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="border rounded-md overflow-hidden max-md:max-w-[300px] transition-transform transform hover:scale-105">
                    <img src="https://readymadeui.com/team-2.webp"
                         class="w-full h-60 object-contain object-top bg-gray-200"/>

                    <div class="p-4 bg-white">
                        <h4 class="text-gray-900  font-bold">Mark Adair</h4>
                        <p class="text-red-500 text-sm font-semibold mt-1">Software Engineer</p>

                        <div class="mt-4">
                            <p class="text-gray-600 text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim
                                non voluptate consectetur.</p>
                        </div>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff"
                                     viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#03a9f4] hover:bg-[#03a1f4] active:bg-[#03a9f4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 448 512">
                                    <path
                                        d="M224,202.66A53.34,53.34,0,1,0,277.34,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a53.34,53.34,0,1,0-53.34,53.34A53.38,53.38,0,0,0,348.71,161.68Zm-37.4-16.63A124.43,124.43,0,1,1,256,224,124.52,124.52,0,0,1,311.31,144.42Zm81.6,16.63A33.39,33.39,0,1,0,359.52,224,33.41,33.41,0,0,0,392.91,161.68ZM224,0C100.3,0,0,100.3,0,224S100.3,448,224,448,448,347.7,448,224,347.7,0,224,0Z"/>
                                </svg>
                            </button>

                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#0077b5] hover:bg-[#0055b5] active:bg-[#0077b5]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div
                    class="border rounded-md overflow-hidden max-md:max-w-[300px] transition-transform transform hover:scale-105">
                    <img src="https://readymadeui.com/team-6.webp"
                         class="w-full h-60 object-contain object-top bg-gray-200"/>

                    <div class="p-4 bg-white">
                        <h4 class="text-gray-900  font-bold">Eleanor</h4>
                        <p class="text-red-500 text-sm mt-1 font-semibold">Web Designer</p>

                        <div class="mt-4">
                            <p class="text-gray-600 text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim
                                non voluptate consectetur.</p>
                        </div>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff"
                                     viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#03a9f4] hover:bg-[#03a1f4] active:bg-[#03a9f4]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-[#0077b5] hover:bg-[#0055b5] active:bg-[#0077b5]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trainer Section Begin -->

    <!-- Trainer Section End -->
    <!-- component -->
    <section class="text-gray-600 body-font ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-extrabold mb-4 text-Black ">Our Fitness Journey in Pictures
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-500">Explore our state-of-the-art facility and get
                    a glimpse of the transformations happening every day. From weightlifting
                    to cardio sessions, and personalized coaching to group classes, each moment captured showcases the
                    dedication, strength,
                    and motivation of our members. Scroll through to see how we're helping individuals achieve their
                    fitness goals and
                    beyond.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4 rounded-md">
                    <div class="flex relative rounded-md">
                        <img alt="gallery"
                             class="absolute inset-0 w-full rounded-xl h-full object-cover object-center shadow-md"
                             src="https://dummyimage.com/600x360">
                        <div
                            class="px-8 py-10 relative z-10 w-full rounded-xl  bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/601x361">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/603x363">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/602x362">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/605x365">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/606x366">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2 class="text-4xl font-extrabold font-manrope leading-normal lg:text-start">Start Your Fitness
                            Journey Today</h2>
                        <p>Unlock your full potential with personalized training programs designed to help you reach
                            your goals. Let’s make
                            progress, together.</p>
                        <button type="button"
                                style="background-color: #F41E1E; "
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#F41E1E'; this.style.color='white';"
                                class=" focus:ring-4 focus:ring-blue-300 font-medium text-md px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            Register Now
                        </button>


                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    {{--    <!-- Testimonial Section Begin -->--}}
    {{--    <section class="testimonial-section spad bg-blue-900">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="section-title">--}}
    {{--                        <h2 class="text-white">success stories</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-10 offset-lg-1">--}}
    {{--                    <div class="testimonial-slider owl-carousel">--}}
    {{--                        <div class="testimonial-item">--}}
    {{--                            <p>Joining Flex House completely changed my life. With the support of the trainers and the--}}
    {{--                                tailored programs, I lost 15kg--}}
    {{--                                and feel stronger than ever. It's more than just a gym—it's a family! </p>--}}
    {{--                            <div class="ti-pic">--}}
    {{--                                <img src="img/testimonial/testimonial-1.jpg" alt="">--}}
    {{--                                <div class="quote">--}}
    {{--                                    <img src="img/testimonial/quote-left.png" alt="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ti-author">--}}
    {{--                                <h4 class="text-white">Patrick Cortez</h4>--}}
    {{--                                <span>Leader</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="testimonial-item">--}}
    {{--                            <p>I never thought I could achieve my fitness goals until I started training here. The coaches--}}
    {{--                                pushed me beyond my limits--}}
    {{--                                and I gained 10kg of muscle in just 6 months! </p>--}}
    {{--                            <div class="ti-pic">--}}
    {{--                                <img src="img/testimonial/testimonial-1.jpg" alt="">--}}
    {{--                                <div class="quote">--}}
    {{--                                    <img src="img/testimonial/quote-left.png" alt="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="ti-author">--}}
    {{--                                <h4>Patrick Cortez</h4>--}}
    {{--                                <span>Leader</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <!-- Testimonial Section End -->--}}

    <!-- Register Section Begin -->
    {{-- <section class="register-section spad" style="background-color: #1e1e1e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>Booking</h2>
                            <!-- <p>The First 7 Day Trial Is Completely Free With The Teacher</p> -->
                        </div>
                        <form action="{{ route('bookings.store') }}" method="POST" class="register-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" name="first_name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Your email address</label>
                                    <input type="text" id="email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name" name="last_name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="mobile">Mobile No*</label>
                                    <input type="text" id="mobile" name="mobile">
                                </div>
                            </div>
                            @auth
                                <button class="btn btn-primary w-100 py-3" type="submit" style="background-color: #13C5DD">Booking</button>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-primary w-100 py-3" style="background-color: #13C5DD">Log In</a>
                            @endguest
                        </form>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="img/register-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div
        class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-3xl max-w-6xl mx-auto  mt-16 mb-16 font-[sans-serif] before:absolute before:right-0 before:w-[300px] before:bg-black before:h-full max-md:before:hidden">
        <div>
            <h2 class="text-4xl font-extrabold font-manrope leading-normal lg:text-start">Get In Touch</h2>
            <p class="text-md text-gray-500 mt-4 leading-relaxed">Have a specific inquiry or looking to explore new
                opportunities? Our
                experienced team is ready to engage with you.</p>

            <form>
                <div class="space-y-4 mt-8">

                    <div class="grid grid-cols-2 gap-6">
                        <input type="text" placeholder="First Name"
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>

                        <input type="text" placeholder="Last Name"
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <input type="number" placeholder="Phone No."
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>

                        <input type="email" placeholder="Email"
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <input type="date" placeholder="Date"
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>

                        <input type="time" placeholder="Time"
                               class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"/>
                    </div>

                    <textarea placeholder="Write Message"
                              class="px-2 pt-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"></textarea>
                </div>

                <button type="button"
                        class="mt-8 flex items-center justify-center text-sm w-full rounded-xl px-6 py-3 bg-black hover:bg-red-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2"
                         viewBox="0 0 548.244 548.244">
                        <path fill-rule="evenodd"
                              d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                              clip-rule="evenodd" data-original="#000000"/>
                    </svg>
                    Send Message
                </button>
            </form>

            <ul class="mt-4 flex flex-wrap justify-center gap-6">
                <li class="flex items-center text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
                         viewBox="0 0 479.058 479.058">
                        <path
                            d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                            data-original="#000000"/>
                    </svg>
                    <a class="text-sm ml-4 text-black">
                        <strong>info@example.com</strong>
                    </a>
                </li>
                <li class="flex items-center text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
                         viewBox="0 0 482.6 482.6">
                        <path
                            d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-15.5 6.4-28.5 16.7-38.7l37.4-37.4c6.7-6.7 13.4-10.2 19.9-10.2 6.6 0 13.5 3.4 20.6 10.5 3.2 3.1 6.4 6.4 9.8 9.9 3.3 3.3 6.7 6.8 10.3 10.3l29.8 29.8c6.3 6.3 9.5 13 9.5 20.2s-3.3 13.9-9.5 20.2c-3.1 3.1-6.2 6.2-9.2 9.2-9.6 9.6-19.1 19.2-29.1 28.4l-11.3 10.8 6.6 13.1c8.6 17.2 18.9 34.1 34.1 54.2 30.7 38.9 63.5 67.4 98.6 88.6 4.6 2.9 9.4 5.3 14.2 7.8 6.7 3.4 13.6 6.9 20.7 10.7l13.2 6.9 10.3-10.3 36.1-36.1c5.9-5.9 11.8-8.8 17.9-8.8s12.1 2.9 18.1 8.9l60.1 60.1c10.9 10.9 10.9 21.4-.2 32.7-4.4 4.6-9.1 9.2-13.9 13.7-6.9 6.5-13.8 13.1-19.9 20.9-9.6 11.5-21.2 16.7-37.5 16.7-1.9 0-3.8-.1-5.7-.2-33-2.3-63.3-15.5-86.1-26.4-62.2-29.4-115.6-71.8-160.1-128.1-37-45.2-61.3-86.2-77.5-130.2-10.8-29.1-14.8-51.9-13.2-72.1z"
                            data-original="#000000"/>
                    </svg>
                    <a class="text-sm ml-4 text-black">
                        <strong>+1 (234) 567 890</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div class="z-10 relative h-full max-md:min-h-[350px]">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
                    allowfullscreen></iframe>
        </div>
    </div>

    <!-- Register Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section spad" style="background-color: #1e1e1e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="text-white text-4xl font-extrabold font-manrope leading-normal lg:text-start">Latest
                            Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4 ><a href="#" class="text-white">10 States At Risk of Rural Hospital Closures</a></h4>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6">
                    <div
                        class="single-blog-item bg-gray-200 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:bg-gray-100 p-4">
                        <img src="img/blog/blog-1.jpg" alt="" class="w-full h-auto rounded-t-lg">
                        <div class="blog-widget mt-4">
                            <div class="bw-date text-gray-500">February 17, 2019</div>
                            <a href="#" class="tag text-white bg-red-500 rounded-full px-3 py-1 text-sm">Gym</a>
                        </div>
                        <h4 class="text-white mt-4">
                            <a href="#" class="text-black hover:underline">10 States At Risk of Rural Hospital
                                Closures</a>
                        </h4>
                        <p class="text-gray-500 mt-2 line-clamp-2">
                            Many rural hospitals are at risk of closure due to financial strain. This article discusses
                            the states most affected by these closures.
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div
                        class="single-blog-item bg-gray-200 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:bg-gray-100 p-4">
                        <img src="img/blog/blog-1.jpg" alt="" class="w-full h-auto rounded-t-lg">
                        <div class="blog-widget mt-4">
                            <div class="bw-date text-gray-500">February 17, 2019</div>
                            <a href="#" class="tag text-white bg-red-500 rounded-full px-3 py-1 text-sm">Gym</a>
                        </div>
                        <h4 class="text-white mt-4">
                            <a href="#" class="text-black hover:underline">10 States At Risk of Rural Hospital
                                Closures</a>
                        </h4>
                        <p class="text-gray-500 mt-2 line-clamp-2">
                            Many rural hospitals are at risk of closure due to financial strain. This article discusses
                            the states most affected by these closures.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div
                        class="single-blog-item bg-gray-200 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:bg-gray-100 p-4">
                        <img src="img/blog/blog-1.jpg" alt="" class="w-full h-auto rounded-t-lg">
                        <div class="blog-widget mt-4">
                            <div class="bw-date text-gray-500">February 17, 2019</div>
                            <a href="#" class="tag text-white bg-red-500 rounded-full px-3 py-1 text-sm">Gym</a>
                        </div>
                        <h4 class="text-white mt-4">
                            <a href="#" class="text-black hover:underline">10 States At Risk of Rural Hospital
                                Closures</a>
                        </h4>
                        <p class="text-gray-500 mt-2 line-clamp-2">
                            Many rural hospitals are at risk of closure due to financial strain. This article discusses
                            the states most affected by these closures.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">The Blog</h2>
        <p class="mt-1 text-gray-600">See how game-changing companies are making the most of every engagement with Preline.</p>
      </div>
      <!-- End Title -->

      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5" href="#">
          <div class="aspect-w-16 aspect-h-11">
            <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1633114128174-2f8aa49759b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
          </div>
          <div class="my-6">
            <h3 class="text-xl font-semibold text-gray-800">
              Announcing a free plan for small teams
            </h3>
            <p class="mt-3 text-gray-600">
              At Wake, our mission has always been focused on bringing openness.
            </p>
          </div>
          <div class=" flex items-center gap-x-3">
            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            <div>
              <h5 class="text-sm text-gray-800">By Lauren Waller</h5>
            </div>
          </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5" href="#">
          <div class="aspect-w-16 aspect-h-11">
            <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1562851529-c370841f6536?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
          </div>
          <div class="my-6">
            <h3 class="text-xl font-semibold text-gray-800">
              How Google Assistant now helps you record stories for kids
            </h3>
            <p class="mt-5 text-gray-600">
              Google is constantly updating its consumer AI, Google Assistant, with new features.
            </p>
          </div>
          <div class="mt-auto flex items-center gap-x-3">
            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            <div>
              <h5 class="text-sm text-gray-800">By Aaron Larsson</h5>
            </div>
          </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5" href="#">
          <div class="aspect-w-16 aspect-h-11">
            <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1521321205814-9d673c65c167?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
          </div>
          <div class="my-6">
            <h3 class="text-xl font-semibold text-gray-800">
              Front accounts - let's work together
            </h3>
            <p class="mt-5 text-gray-600">
              Are you an accountant? Are you a company formation advisor?
            </p>
          </div>
          <div class="mt-auto flex items-center gap-x-3">
            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            <div>
              <h5 class="text-sm text-gray-800">By Lauren Waller</h5>
            </div>
          </div>
        </a>
        <!-- End Card -->
      </div>
      <!-- End Grid -->

      <!-- Card -->
      <div class="mt-12 text-center">
        <a class="py-3 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
          Read more
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Card Blog --> --}}



    <!-- Latest Blog Section End -->
</x-app-layout>

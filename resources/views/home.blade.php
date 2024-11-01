<x-app-layout>

    <!-- Hero Section Begin -->

    <div
        class="mt-14 container px-4 relative py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col items-center justify-between lg:flex-row">
            <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                <div class="max-w-xl mb-6">

                    <h2
                        class="max-w-lg mb-6 font-sans text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Achieve Your Fitness Goals<br class="hidden md:block" />
                        with Our Expert Trainers

                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Join us to transform your body and mind. Our personalized workout plans, expert coaching, and
                        top-notch facilities are designed to help you succeed in your fitness journey.
                    </p>
                </div>
                <div class="flex flex-col items-center md:flex-row">

                    <button
                        class="mt-6 bg-[#F41E1E] text-white uppercase text-lg py-2 px-6 font-bold rounded-sm shadow-md hover:bg-[#141414] transition duration-300">
                        Register Now
                    </button>
                    <button
                        class="mt-6 ml-8 text-black py-2 text-lg uppercase px-6 font-bold rounded-sm hover:bg-[#F41E1E] transition duration-300 border border-red-500">
                        View Pricing
                    </button>
                </div>
            </div>
            <div class="relative lg:w-1/2">
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96"
                    src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                    alt="" />

            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const images = [
                        'https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260',
                        'https://images.pexels.com/photos/1231231/pexels-photo-1231231.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260',
                        // 'https://images.pexels.com/photos/4564564/pexels-photo-4564564.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260',
                        'https://images.pexels.com/photos/7897897/pexels-photo-7897897.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260'
                    ];
                    let currentIndex = 0;
                    const imageElement = document.querySelector('.relative.lg\\:w-1\\/2 img');

                    setInterval(() => {
                        currentIndex = (currentIndex + 1) % images.length;
                        imageElement.src = images[currentIndex];
                    }, 3000); // Change image every 5 seconds
                });
            </script>
        </div>
    </div>

    <!-- Hero Section End -->


    {{-- About us --}}
    <section class="py-24 relative xl:mr-0 lg:mr-5 mr-0" style="background-color: #141414">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl text-center font-extrabold mb-10 text-gray-200">
            Easy Step To Achieve Your Goals.
        </h1>
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div
                class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1 lg:grid-flow-col-dense">
                <!-- Image section moved up -->
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div class="sm:w-[564px] w-full sm:h-[646px] h-[646px]   relative">
                        <img class="sm:mt-5 sm:ml-5 w-full  rounded-sm object-cover" src="img/about.png"
                            alt="about Us image" />
                    </div>
                </div>
                <!-- Text section moved down -->
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">

                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="">
                            {{-- <h4 class="font-bold leading-relaxed" style="color: #F41E1E">About Us</h6> --}}
                            <div class="">

                                <p class="text-gray-300 text-lg text-center">
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
                                    class="w-full h-full p-3.5 rounded-md border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">33+
                                        Years</h4>
                                    <p class="text-gray-500 text-large leading-relaxed">Influencing Digital
                                        Landscapes Together</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-md border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">125+
                                        Projects
                                    </h4>
                                    <p class="text-gray-500 text-large leading-relaxed">Excellence Achieved
                                        Through Success</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full p-3.5 rounded-md border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">26+
                                        Awards</h4>
                                    <p class="text-gray-500 text-large leading-relaxed">Our Dedication to
                                        Innovation Wins Understanding</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-md border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex hover:bg-gray-200 hover:shadow-lg bg-gray-100">
                                    <h4 class="text-gray-900 text-2xl font-extrabold font-manrope leading-9">99% Happy
                                        Clients</h4>
                                    <p class="text-gray-500 text-large leading-relaxed">Mirrors our Focus on
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
    {{-- About us end --}}
    {{-- Our servces --}}
    <div class="container mx-auto py-12 px-4">
        <div class="text-center mb-8">
            <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
                Work Process
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
            </h2>
            <h1 class="text-4xl text-center font-extrabold mb-20 text-gray-900">
                Easy Step To Achieve Your Goals.
            </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img alt="Personal Training - Trainer assisting a client with weights" class="w-full h-48 object-cover"
                    height="400"
                    src="https://storage.googleapis.com/a1aa/image/5YXzH8QB0O5KO1uJ5vNIagHIkS1ZDEs8dheiPmnfSSC3tfYnA.jpg"
                    width="600" />
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white bg-[#F41E1E] inline-block px-3 py-1 rounded-md mb-4">
                        Personal Training
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Our personal trainers will work with you one-on-one to create a customized workout plan that
                        fits your goals and fitness level.
                    </p>
                    <a class="text-[#F41E1E] hover:text-black hover:underline flex items-center font-bold justify-center"
                        href="#">
                        Read More
                        {{-- <i class="fas fa-arrow-right ml-2">
                        </i> --}}
                    </a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img alt="Group Classes - People participating in a group fitness class"
                    class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/kXljhtp7znLrKpLbSrQ5QYyxhxp4yNSyE1aiXfnxTDE72P2JA.jpg"
                    width="600" />
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white bg-[#F41E1E] inline-block px-3 py-1 rounded-md mb-4">
                        Group Classes
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Join our group classes to stay motivated and have fun while working out. We offer a variety of
                        classes including yoga, pilates, and HIIT.
                    </p>
                    <a class="text-[#F41E1E] hover:text-black hover:underline flex items-center font-bold justify-center"
                        href="#">
                        Read More
                        {{-- <i class="fas fa-arrow-right ml-2">
                        </i> --}}
                    </a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img alt="Nutrition Counseling - Nutritionist consulting with a client"
                    class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/GezjOexcYuqBJknmTMT5mxBnWvkoract4uqoH8IGQrr5tfYnA.jpg"
                    width="600" />
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white bg-[#F41E1E] inline-block px-3 py-1 rounded-md mb-4">
                        Nutrition Counseling
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Our nutrition counseling services will help you create a balanced diet plan that complements
                        your fitness routine and helps you achieve your health goals.
                    </p>
                    <a class="text-[#F41E1E] hover:text-black hover:underline flex font-bold items-center justify-center"
                        href="#">
                        Read More
                        {{-- <i class="fas fa-arrow-right ml-2">
                        </i> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Our servces end --}}

    {{-- proccess steps start --}}
    <div class="container mx-auto text-center py-10 mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-16 text-gray-900">
            Easy Step To Achieve Your Goals.
        </h1>
        <div
            class="relative flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-16">
            <div class="line-connector hidden md:block"
                style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: #e5e7eb; z-index: -1;">
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person doing gym movement" height="200"
                        src="https://storage.googleapis.com/a1aa/image/ouuI6ijEGS7vHlUpcpJ2ru4lUGOfqEOQus02GsSUSFpMK90JA.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-01
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Gym Movement
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Start with basic gym movements to build your foundation.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person practicing fitness" height="200"
                        src="https://storage.googleapis.com/a1aa/image/ucsa1qcU95K9EJsWJZzf41LYh24MypaJbOCfeOfu016fiSPdC.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-02
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Fitness Practice
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Engage in regular fitness practice to improve your skills.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person achieving fitness goal" height="200"
                        src="https://storage.googleapis.com/a1aa/image/lt0xfLKxXr0aB6akywTdYB4lEj0OqPB3p50v9dgkTEfaU6pTA.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-03
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Achievement
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Achieve your fitness goals and maintain a healthy lifestyle.
                </p>
            </div>
        </div>
        <div
            class="relative flex flex-col md:flex-row justify-center items-center mt-10 space-y-8 md:space-y-0 md:space-x-16">
            <div class="line-connector hidden md:block"
                style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: #e5e7eb; z-index: -1;">
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person doing gym movement" height="200"
                        src="https://storage.googleapis.com/a1aa/image/ouuI6ijEGS7vHlUpcpJ2ru4lUGOfqEOQus02GsSUSFpMK90JA.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-01
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Gym Movement
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Start with basic gym movements to build your foundation.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person practicing fitness" height="200"
                        src="https://storage.googleapis.com/a1aa/image/ucsa1qcU95K9EJsWJZzf41LYh24MypaJbOCfeOfu016fiSPdC.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-02
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Fitness Practice
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Engage in regular fitness practice to improve your skills.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="step-circle"
                    style="position: relative; width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 5px solid #e5e7eb; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img alt="Person achieving fitness goal" height="200"
                        src="https://storage.googleapis.com/a1aa/image/lt0xfLKxXr0aB6akywTdYB4lEj0OqPB3p50v9dgkTEfaU6pTA.jpg"
                        style="width: 100%; height: 100%; object-fit: cover;" width="200" />
                    <div class="step-label"
                        style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background-color: #F41E1E; color: white; padding: 5px 10px; border-radius: 20px; font-weight: bold;">
                        STEP-03
                    </div>
                </div>
                <h3 class="text-2xl font-bold mt-4">
                    Achievement
                </h3>
                <p class="text-gray-600 mt-2 text-lg">
                    Achieve your fitness goals and maintain a healthy lifestyle.
                </p>
            </div>
        </div>
    </div>
    {{-- proccess steps end --}}



    <div class="text-center mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-12 text-gray-900">
            Membership Plans
        </h1>
        <div class="flex flex-wrap justify-center space-x-0 md:space-x-8">
            <!-- Card 1 -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition duration-500 hover:scale-105 w-72 relative m-4">
                <img alt="Gym facilities image" class="rounded-t-lg" height="160"
                    src="https://storage.googleapis.com/a1aa/image/5hpyld0E9WbBJxIxy5PCLgCt0dq9dMwLgNaB0Mff7LHcR8pTA.jpg"
                    width="288" />
                <div class="absolute top-0 right-0 bg-[#F41E1E] text-white text-xs font-bold py-1 px-2 rounded-bl-lg">
                    Valid till only
                </div>
                <div class="bg-gray-800 text-white text-center py-4">
                    <h2 class="text-xl font-bold">
                        1 Month
                    </h2>
                </div>
                <div class="text-center mt-4 px-6">
                    <p class="text-gray-600 text-2xl line-through">
                        Rs. 4000
                    </p>
                    <p class="text-[#F41E1E] text-4xl font-extrabold">
                        Rs. 3000
                    </p>
                    <p class="mt-4 text-gray-600 ">
                        Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes. Ideal
                        for short-term fitness goals!
                    </p>
                    <button
                        class="mt-6 bg-[#141414] text-white py-2 px-6 font-bold rounded-md shadow-md hover:bg-[#F41E1E] transition duration-300">
                        Register Now
                    </button>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition duration-500 hover:scale-105 w-72 relative m-4">
                <img alt="Gym facilities image" class="rounded-t-lg" height="160"
                    src="https://storage.googleapis.com/a1aa/image/5hpyld0E9WbBJxIxy5PCLgCt0dq9dMwLgNaB0Mff7LHcR8pTA.jpg"
                    width="288" />
                <div class="absolute top-0 right-0 bg-[#F41E1E] text-white text-xs font-bold py-1 px-2 rounded-bl-lg">
                    Valid till only
                </div>
                <div class="bg-gray-800 text-white text-center py-4">
                    <h2 class="text-xl font-bold">
                        1 Month
                    </h2>
                </div>
                <div class="text-center mt-4 px-6">
                    <p class="text-gray-600 text-2xl line-through">
                        Rs. 4000
                    </p>
                    <p class="text-[#F41E1E] text-4xl font-extrabold">
                        Rs. 3000
                    </p>
                    <p class="mt-4 text-gray-600">
                        Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes. Ideal
                        for short-term fitness goals!
                    </p>
                    <button
                        class="mt-6 bg-[#141414] text-white font-bold py-2 px-6 rounded-md shadow-md hover:bg-[#F41E1E] transition duration-300">
                        Register Now
                    </button>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition duration-500 hover:scale-105 w-72 relative m-4">
                <img alt="Gym facilities image" class="rounded-t-lg" height="160"
                    src="https://storage.googleapis.com/a1aa/image/5hpyld0E9WbBJxIxy5PCLgCt0dq9dMwLgNaB0Mff7LHcR8pTA.jpg"
                    width="288" />
                <div class="absolute top-0 right-0 bg-[#F41E1E] text-white text-xs font-bold py-1 px-2 rounded-bl-lg">
                    Valid till only
                </div>
                <div class="bg-gray-800 text-white text-center py-4">
                    <h2 class="text-xl font-bold">
                        1 Month
                    </h2>
                </div>
                <div class="text-center mt-4 px-6">
                    <p class="text-gray-600 text-2xl line-through">
                        Rs. 4000
                    </p>
                    <p class="text-[#F41E1E] text-4xl font-extrabold">
                        Rs. 3000
                    </p>
                    <p class="mt-4 text-gray-600">
                        Enjoy 1 month of full access to all our gym facilities, personal trainers, and classes. Ideal
                        for short-term fitness goals!
                    </p>
                    <button
                        class="mt-6 mb-6 bg-[#141414] font-bold text-white py-2 px-6 rounded-md shadow-md hover:bg-[#F41E1E] transition duration-300">
                        Register Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Membership Section End -->
    {{-- bmi start --}}
    <div class="container mx-auto p-8 text-center mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-20 text-gray-900">
            Easy Step To Achieve Your Goals.
        </h1>
        <div class="flex flex-col lg:flex-row justify-between items-start">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                {{-- <h1 class="text-4xl font-extrabold">WHAT IS BMI ?</h1>
                <p class="text-gray-500 text-lg mt-2 mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p> --}}
                <form class="space-y-4" onsubmit="event.preventDefault(); calculateBMI();">
                    <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                        <input type="text" id="height" placeholder="Height / Feet"
                            class="w-full lg:w-1/2 p-3 border border-gray-300 rounded">
                        <input type="text" id="weight" placeholder="Weight / kg"
                            class="w-full lg:w-1/2 p-3 border border-red-500 rounded">
                    </div>
                    <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                        <input type="text" id="age" placeholder="Age"
                            class="w-full lg:w-1/2 p-3 border border-gray-300 rounded">
                        <select id="gender" class="w-full lg:w-1/2 p-3 border border-gray-300 rounded">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <select id="activityFactor" class="w-full p-3 border border-gray-300 rounded">
                        <option value="">Select an activity factor:</option>
                        <option value="1.2">Sedentary (little or no exercise)</option>
                        <option value="1.375">Lightly active (light exercise/sports 1-3 days/week)</option>
                        <option value="1.55">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                        <option value="1.725">Very active (hard exercise/sports 6-7 days a week)</option>
                        <option value="1.9">Super active (very hard exercise/sports & physical job)</option>
                    </select>
                    <button type="submit"
                        class="w-full p-3 bg-black text-white text-md font-bold rounded-md hover:bg-[#F41E1E] uppercase">Calculate</button>
                </form>
                <p id="bmiResult" class="mt-4 text-xl font-bold"></p>
            </div>
            <div class="w-full lg:w-1/3">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="p-3 bg-[#141414] text-white text-center">BMI</th>
                            <th class="p-3 bg-[#141414] text-[#F41E1E] text-center">WEIGHT STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border border-gray-300">Below 18.5</td>
                            <td class="p-3 border border-gray-300">Underweight</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-gray-300">18.5 - 24.9</td>
                            <td class="p-3 border border-gray-300">Healthy</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-gray-300">25.0 - 29.9</td>
                            <td class="p-3 border border-gray-300">Overweight</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-gray-300">30.0 - and Above</td>
                            <td class="p-3 border border-gray-300">Obese</td>
                        </tr>
                    </tbody>
                </table>
                {{-- <p class="mt-4 text-sm text-gray-500">BMR Metabolic Rate / <span class="font-bold">BMI</span> Body
                    Mass Index</p> --}}
            </div>
        </div>
    </div>
    <script>
        function calculateBMI() {
            const heightFeet = parseFloat(document.getElementById('height').value);
            const weightKg = parseFloat(document.getElementById('weight').value);
            const age = parseInt(document.getElementById('age').value);
            const gender = document.getElementById('gender').value;
            const activityFactor = document.getElementById('activityFactor').value;

            if (isNaN(heightFeet) || isNaN(weightKg) || isNaN(age) || !gender || !activityFactor) {
                alert('Please fill in all fields correctly.');
                return;
            }

            const heightMeters = heightFeet * 0.3048;
            const bmi = weightKg / (heightMeters * heightMeters);
            document.getElementById('bmiResult').innerText = `Your BMI is ${bmi.toFixed(2)}`;
        }
    </script>
    {{-- bmi end --}}

    {{-- Team section start  --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-6 flex items-center justify-center">
            <span class="inline-block w-12 h-1 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-1 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-16 text-gray-900">
            The Expert Trainers Behind the Scenes
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-md shadow-md text-center relative">
                <div class="absolute top-0 left-0 w-full h-28 bg-[#F41E1E] rounded-t-lg">
                </div>
                <div class="relative">
                    <img alt="Portrait of Andres Berlin" class="w-32 h-32 rounded-full mx-auto mt-12 relative z-10"
                        height="128" onmouseout="this.style.transform='scale(1)'"
                        onmouseover="this.style.transform='scale(1.1)'"
                        src="https://storage.googleapis.com/a1aa/image/v1IikuSg8oZwIRt72wLrpu8r7j5EbyBuj9QwaUx94WWfHF2JA.jpg"
                        style="transition: transform 0.3s ease-in-out;" width="128" />
                </div>
                <h3 class="text-xl font-bold mt-4 text-black">
                    Andres Berlin
                </h3>
                <p class="text-gray-500">
                    Chief Executive Officer
                </p>
                <p class="mt-4 text-gray-600">
                    The CEO's role in raising a company's corporate IQ is to establish an atmosphere that promotes
                    knowledge sharing and collaboration.
                </p>
                <div
                    class="absolute pt-4 bottom-0 left-0 w-full h-12 bg-gray-900 rounded-b-lg flex justify-center items-center space-x-4 p-4">
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                </div>
            </div>
            <div class="bg-white p-6 rounded-md shadow-md text-center  relative">
                <div class="absolute top-0 left-0 w-full h-28 bg-[#F41E1E] rounded-t-lg">
                </div>
                <div class="relative">
                    <img alt="Portrait of Andres Berlin" class="w-32 h-32 rounded-full mx-auto mt-12 relative z-10"
                        height="128" onmouseout="this.style.transform='scale(1)'"
                        onmouseover="this.style.transform='scale(1.1)'"
                        src="https://storage.googleapis.com/a1aa/image/v1IikuSg8oZwIRt72wLrpu8r7j5EbyBuj9QwaUx94WWfHF2JA.jpg"
                        style="transition: transform 0.3s ease-in-out;" width="128" />
                </div>
                <h3 class="text-xl font-bold mt-4 text-black">
                    Silene Tokyo
                </h3>
                <p class="text-gray-500">
                    Product Design Head
                </p>
                <p class="mt-4  text-gray-600">
                    The emphasis on innovation and technology in our companies has resulted in a few of them
                    establishing global benchmarks in product design and development.
                </p>
                <div
                    class="absolute bottom-0 left-0 w-full h-12 bg-gray-900 rounded-b-lg flex justify-center items-center space-x-4 p-4">
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                </div>
            </div>
            <div class="bg-white p-6 rounded-md shadow-md text-center  relative">
                <div class="absolute top-0 left-0 w-full h-28 bg-[#F41E1E] rounded-t-lg">
                </div>
                <div class="relative">
                    <img alt="Portrait of Andres Berlin" class="w-32 h-32 rounded-full mx-auto mt-12 relative z-10"
                        height="128" onmouseout="this.style.transform='scale(1)'"
                        onmouseover="this.style.transform='scale(1.1)'"
                        src="https://storage.googleapis.com/a1aa/image/v1IikuSg8oZwIRt72wLrpu8r7j5EbyBuj9QwaUx94WWfHF2JA.jpg"
                        style="transition: transform 0.3s ease-in-out;" width="128" />
                </div>
                <h3 class="text-xl font-bold mt-4 text-black">
                    Johnson Stone
                </h3>
                <p class="text-gray-500">
                    Manager Development
                </p>
                <p class="mt-4 text-gray-600">
                    Our services encompass the assessment and repair of property damage caused by water, fire, smoke, or
                    mold. We can also be a part of the restoration.
                </p>
                <div
                    class="absolute bottom-0 left-0 w-full h-12 bg-gray-900 rounded-b-lg flex justify-center items-center space-x-4 p-4">
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a class="text-gray-200 text-xl hover:text-[#F41E1E]" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Team section end  --}}

    <div class="max-w-6xl mx-auto py-10 text-center mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-20 text-gray-900">
            Easy Step To Achieve Your Goals.
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative">
                <img alt="Skydivers in the sky" class="w-full h-auto rounded-lg" height="400"
                    src="https://storage.googleapis.com/a1aa/image/AAN0AAnlsTbzOh1OGheK2c7f14wcl983T5kgaejiSlJqW6XnA.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2016
                </div>
            </div>
            <div class="relative">
                <img alt="Person taking a photo in a palm tree lined street" class="w-full h-auto rounded-lg"
                    height="400"
                    src="https://storage.googleapis.com/a1aa/image/6YXKG2O22yKUJxA2Zr81DL4GBNvfOekf7QgF6sbDFpKlW6XnA.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2017
                </div>
            </div>
            <div class="relative">
                <img alt="Scuba diver underwater" class="w-full h-auto rounded-lg" height="400"
                    src="https://storage.googleapis.com/a1aa/image/n3584SeID6QFU68KW6EDyEbxp3qJ2lCvQgV0WIZmRe0YL9rTA.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2018
                </div>
            </div>
            <div class="relative">
                <img alt="Yellow van driving through a desert landscape" class="w-full h-auto rounded-lg"
                    height="400"
                    src="https://storage.googleapis.com/a1aa/image/feTu0flNXMNf6SI2KEk05GUWQk4tGzmsdkeej5seOZbOolerTA.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2019
                </div>
            </div>
            <div class="relative">
                <img alt="Person wakeboarding on a lake" class="w-full h-auto rounded-lg" height="400"
                    src="https://storage.googleapis.com/a1aa/image/oTdY8n93O57qDdKmXebBJsR9QGy2DqME7Uf4M4mWsZFWL9rTA.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2020
                </div>
            </div>
            <div class="relative">
                <img alt="People dancing at a party" class="w-full h-auto rounded-lg" height="400"
                    src="https://storage.googleapis.com/a1aa/image/ah7fQApwQ5xJbyxxOufzT0cAUlvDfCfsn5YzMkueL6HyZpf6E.jpg"
                    width="600" />
                <div class="absolute bottom-2 left-2 text-white text-lg font-bold">
                    2021
                </div>
            </div>

        </div>
    </div>

    <!-- Banner Section Begin -->
    <section class="mt-20"
        style="background-image: url('img/banner-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <div class=" pt-16 lg:pt-40">
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-white ">
                            Register To Get A Free Personal Training Session!
                        </h2>
                        <p class="lg:text-lg text-gray-300 mt-10">
                            Unlock your full potential with personalized training programs designed to help you reach
                            your goals. Let’s make progress, together.
                        </p>
                        <button
                            class="mt-12  rounded-md bg-[#F41E1E] text-white font-bold text-md px-5 py-3.5 focus:ring-4 focus:ring-blue-300 focus:outline-none uppercase transition duration-300 ease-in-out hover:bg-black"
                            type="button">
                            Register Now
                        </button>
                    </div>
                </div>
                <div
                    class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center lg:items-end mt-8 lg:mt-0 h-full">
                    <img alt="A person in athletic wear performing a fitness exercise" class="w-3/4 lg:w-auto "
                        src="img/banner-person.png" />
                </div>
            </div>
        </div>
    </section>


    {{--    <!-- Testimonial Section Begin --> --}}
    {{--    <section class="testimonial-section spad bg-blue-900"> --}}
    {{--        <div class="container"> --}}
    {{--            <div class="row"> --}}
    {{--                <div class="col-lg-12"> --}}
    {{--                    <div class="section-title"> --}}
    {{--                        <h2 class="text-white">success stories</h2> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="row"> --}}
    {{--                <div class="col-lg-10 offset-lg-1"> --}}
    {{--                    <div class="testimonial-slider owl-carousel"> --}}
    {{--                        <div class="testimonial-item"> --}}
    {{--                            <p>Joining Flex House completely changed my life. With the support of the trainers and the --}}
    {{--                                tailored programs, I lost 15kg --}}
    {{--                                and feel stronger than ever. It's more than just a gym—it's a family! </p> --}}
    {{--                            <div class="ti-pic"> --}}
    {{--                                <img src="img/testimonial/testimonial-1.jpg" alt=""> --}}
    {{--                                <div class="quote"> --}}
    {{--                                    <img src="img/testimonial/quote-left.png" alt=""> --}}
    {{--                                </div> --}}
    {{--                            </div> --}}
    {{--                            <div class="ti-author"> --}}
    {{--                                <h4 class="text-white">Patrick Cortez</h4> --}}
    {{--                                <span>Leader</span> --}}
    {{--                            </div> --}}
    {{--                        </div> --}}
    {{--                        <div class="testimonial-item"> --}}
    {{--                            <p>I never thought I could achieve my fitness goals until I started training here. The coaches --}}
    {{--                                pushed me beyond my limits --}}
    {{--                                and I gained 10kg of muscle in just 6 months! </p> --}}
    {{--                            <div class="ti-pic"> --}}
    {{--                                <img src="img/testimonial/testimonial-1.jpg" alt=""> --}}
    {{--                                <div class="quote"> --}}
    {{--                                    <img src="img/testimonial/quote-left.png" alt=""> --}}
    {{--                                </div> --}}
    {{--                            </div> --}}
    {{--                            <div class="ti-author"> --}}
    {{--                                <h4>Patrick Cortez</h4> --}}
    {{--                                <span>Leader</span> --}}
    {{--                            </div> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}
    {{--    <!-- Testimonial Section End --> --}}

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
    <div class="container mx-auto p-8 text-center mt-20">
        <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
            Work Process
            <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
            </span>
        </h2>
        <h1 class="text-4xl font-extrabold mb-20 text-gray-900">
            Easy Step To Achieve Your Goals.
        </h1>

        <div
            class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-3xl max-w-6xl mx-auto  mt-16 mb-16 font-[sans-serif] before:absolute before:right-0 before:w-[300px] before:bg-black before:h-full max-md:before:hidden">
            <div>

                <p class="text-md text-gray-500 mt-4 leading-relaxed">Have a specific inquiry or looking to explore new
                    opportunities? Our
                    experienced team is ready to engage with you.</p>

                <form method="post" action="{{ route('bookings.store') }}">
                    @csrf
                    <div class="space-y-4 mt-8">

                        <div class="grid grid-cols-2 gap-6">
                            <input type="text" placeholder="First Name"
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />

                            <input type="text" placeholder="Last Name"
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <input type="number" placeholder="Phone No."
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />

                            <input type="email" placeholder="Email"
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <input type="date" placeholder="Date"
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />

                            <input type="time" placeholder="Time"
                                class="px-2 py-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl" />
                        </div>

                        <textarea placeholder="Write Message"
                            class="px-2 pt-3 bg-white w-full text-gray-800 text-sm border border-gray-300 focus:border-red-600 outline-none rounded-2xl"></textarea>
                    </div>

                    <button type="button"
                        class="mt-8 flex items-center justify-center text-md w-full uppercase rounded-xl px-6 py-3 bg-[#141414] hover:bg-red-600 font-bold text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                            class="mr-6" viewBox="0 0 548.244 548.244">
                            <path fill-rule="evenodd"
                                d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                                clip-rule="evenodd" data-original="#000000" />
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
                                data-original="#000000" />
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
                                data-original="#000000" />
                        </svg>
                        <a class="text-sm ml-4 text-black">
                            <strong>+1 (234) 567 890</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="z-10 relative h-full max-md:min-h-[350px]">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <!-- Register Section End -->

    <!-- Latest Blog Section Begin -->


    <div class="container mx-auto p-8 mt-20">
        <div class="text-center">
            <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
                Blog
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
            </h2>
            <h1 class="text-4xl font-extrabold mb-20 text-gray-900">
                Easy Step To Achieve Your Goals.
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-500">
                <img alt="Person lifting weights in a gym" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/84ibsd5bCAZ3PdfkjCdZEGwxYhlStvFZzl0CDQKmiur3XF2JA.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <img alt="Author profile image" class="w-10 h-10 rounded-full mr-4" height="40"
                            src="https://storage.googleapis.com/a1aa/image/zogkwSebVw0PPyNhep90JVDFAtwXpnlFwEtkwan3uCIuxKsTA.jpg"
                            width="40" />
                        <div>
                            <p class="text-gray-500 text-sm">
                                February 17, 2019
                                <span class="bg-red-500 text-white text-xs font-bold ml-2 px-2 py-1 rounded-full">
                                    Gym
                                </span>
                            </p>
                        </div>
                    </div>
                    <h2 class="font-bold text-lg mt-2">
                        10 States At Risk of Rural Hospital Closures
                    </h2>
                    <p class="text-gray-700 mt-2">
                        Many rural hospitals are at risk of closure due to financial strain. This article discusses the
                        state...
                    </p>
                </div>
            </div>
            <div
                class="bg-white transition-transform transform hover:scale-105 duration-500 text-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img alt="Person lifting weights in a gym" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/84ibsd5bCAZ3PdfkjCdZEGwxYhlStvFZzl0CDQKmiur3XF2JA.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <img alt="Author profile image" class="w-10 h-10 rounded-full mr-4" height="40"
                            src="https://storage.googleapis.com/a1aa/image/zogkwSebVw0PPyNhep90JVDFAtwXpnlFwEtkwan3uCIuxKsTA.jpg"
                            width="40" />
                        <div>
                            <p class="text-gray-500 text-sm">
                                February 17, 2019
                                <span class="bg-red-500 text-white text-xs font-bold ml-2 px-2 py-1 rounded-full">
                                    Gym
                                </span>
                            </p>
                        </div>
                    </div>
                    <h2 class="font-bold text-lg mt-2">
                        10 States At Risk of Rural Hospital Closures
                    </h2>
                    <p class="text-gray-700 mt-2">
                        Many rural hospitals are at risk of closure due to financial strain. This article discusses the
                        state...
                    </p>
                </div>
            </div>
            <div
                class="bg-white transition-transform transform hover:scale-105 duration-500 text-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img alt="Person lifting weights in a gym" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/84ibsd5bCAZ3PdfkjCdZEGwxYhlStvFZzl0CDQKmiur3XF2JA.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <img alt="Author profile image" class="w-10 h-10 rounded-full mr-4" height="40"
                            src="https://storage.googleapis.com/a1aa/image/zogkwSebVw0PPyNhep90JVDFAtwXpnlFwEtkwan3uCIuxKsTA.jpg"
                            width="40" />
                        <div>
                            <p class="text-gray-500 text-sm">
                                February 17, 2019
                                <span class="bg-red-500 text-white text-xs font-bold ml-2 px-2 py-1 rounded-full">
                                    Gym
                                </span>
                            </p>
                        </div>
                    </div>
                    <h2 class="font-bold text-lg mt-2">
                        10 States At Risk of Rural Hospital Closures
                    </h2>
                    <p class="text-gray-700 mt-2">
                        Many rural hospitals are at risk of closure due to financial strain. This article discusses the
                        state...
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

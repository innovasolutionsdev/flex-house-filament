<x-app-layout>
    <div id="pricing" class="w-full dark:bg-[#141414] py-12 text-center px-4 pt-8">
        <div class="text-center mt-20">
            <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
                Membership plans
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
            </h2>
            <h1 class="text-4xl font-extrabold mb-12 text-gray-900 dark:text-white">
                Best Plans For You
            </h1>
            <div class="flex overflow-x-auto space-x-4 px-4 pl-16 sm:ml-2 scrollbar-hide">

                @foreach($plans as $plan)
                    <!-- Card 1 -->
                    <div
                        class="bg-white dark:bg-[#171717] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 w-72 relative m-4 flex-shrink-0">
                        <img alt="Gym facilities image" class="rounded-t-lg" height="160"
                             src="{{$plan->getFirstMediaUrl('membership_thumbnail') }}"
                             width="288" />
                        <div
                            class="absolute top-0 right-0 bg-[#F41E1E] text-white text-xs font-bold py-1 px-2 rounded-bl-lg">
                            Valid till only
                        </div>
                        <div class="bg-gray-800 text-white text-center py-4">
                            <h2 class="text-xl font-bold">
                                {{$plan->name}}
                            </h2>
                        </div>
                        <div class="text-center mt-4 px-6">
                            @if($plan->discount == 1)
                                <p class="text-gray-600 dark:text-gray-300 text-2xl line-through">
                                    {{$plan->discount_price}}
                                </p>
                            @endif
                            <p class="text-[#F41E1E] text-4xl font-extrabold">
                                Rs.{{$plan->price}}
                            </p>
                            <p class="mt-4 text-gray-600 dark:text-gray-400">
                                {{$plan->description}}
                            </p>
                            <button
                                class="mt-6 mb-2 bg-[#141414] dark:bg-[#F41E1E] text-white py-2 px-6 font-bold rounded-md shadow-md hover:bg-[#F41E1E] transition duration-300">
                                Register Now
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <style>
        /* Hide scrollbar */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <!-- Membership Section End -->
</x-app-layout>

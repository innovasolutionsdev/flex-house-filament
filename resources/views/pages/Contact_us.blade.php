<x-app-layout>




    <div  id="contact" class="w-full dark:bg-[#171717] py-12 text-center px-4 pt-12">
        <div class="container mx-auto text-center">
            <h2 class="text-[#F41E1E] text-lg font-bold uppercase mb-2 flex items-center justify-center">
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
                Contact Us
                <span class="inline-block w-12 h-0.5 bg-[#F41E1E] mx-2">
                </span>
            </h2>
            <h1 class="text-4xl font-extrabold mb-20 text-gray-900  dark:text-white">
                We are here to assist you.
            </h1>

            <div
                class="grid md:grid-cols-2 dark:bg-[#141414] gap-16 items-center relative overflow-hidden p-8  rounded-3xl max-w-6xl mx-auto  mt-16 mb-16 font-[sans-serif] before:absolute before:right-0 before:w-[300px] before:bg-black before:h-full max-md:before:hidden">
                <div>

                    <p class="text-md text-gray-500  dark:text-gray-400 mt-4 leading-relaxed">Have a specific inquiry or looking to explore
                        new
                        opportunities? Our
                        experienced team is ready to engage with you.</p>

                    <form method="post" action="{{ route('bookings.store') }}">
                        @csrf
                        <div class="space-y-4 mt-8">

                            <div class="grid grid-cols-2 gap-6">
                                <input type="text" placeholder="First Name" name="first_name"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />

                                <input type="text" placeholder="Last Name" name="last_name"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <input type="number" placeholder="Phone No." name="phone"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />

                                <input type="email" placeholder="Email" name="email"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <input type="date" placeholder="Date" name="date"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />

                                <input type="time" placeholder="Time" name="time"
                                       class="px-2 py-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl" />
                            </div>

                            <textarea placeholder="Write Message" name="note"
                                      class="px-2 pt-3 bg-white w-full dark:bg-[#171717] text-gray-800 text-sm border border-gray-300 dark:border-gray-600 focus:border-red-600 outline-none rounded-2xl"></textarea>
                        </div>

                        <button type="submit"
                                class="mt-8 flex items-center justify-center text-lg w-full rounded-md font-bold px-6 py-3 bg-[#F41E1E] hover:bg-white text-white dark:hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                 class="mr-2" viewBox="0 0 548.244 548.244">
                                <path fill-rule="evenodd"
                                      d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                                      clip-rule="evenodd" data-original="#000000" />
                            </svg>
                            Send Message
                        </button>
                    </form>

                    <ul class="mt-4 flex flex-wrap justify-center gap-6">
                        <li class="flex items-center text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                 fill='currentColor' viewBox="0 0 479.058 479.058">
                                <path
                                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                    data-original="#000000" />
                            </svg>
                            <a class="text-sm ml-4 text-black dark:text-gray-400">
                                <strong>info@example.com</strong>
                            </a>
                        </li>
                        <li class="flex items-center text-black dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                 fill='currentColor' viewBox="0 0 482.6 482.6">
                                <path
                                    d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-15.5 6.4-28.5 16.7-38.7l37.4-37.4c6.7-6.7 13.4-10.2 19.9-10.2 6.6 0 13.5 3.4 20.6 10.5 3.2 3.1 6.4 6.4 9.8 9.9 3.3 3.3 6.7 6.8 10.3 10.3l29.8 29.8c6.3 6.3 9.5 13 9.5 20.2s-3.3 13.9-9.5 20.2c-3.1 3.1-6.2 6.2-9.2 9.2-9.6 9.6-19.1 19.2-29.1 28.4l-11.3 10.8 6.6 13.1c8.6 17.2 18.9 34.1 34.1 54.2 30.7 38.9 63.5 67.4 98.6 88.6 4.6 2.9 9.4 5.3 14.2 7.8 6.7 3.4 13.6 6.9 20.7 10.7l13.2 6.9 10.3-10.3 36.1-36.1c5.9-5.9 11.8-8.8 17.9-8.8s12.1 2.9 18.1 8.9l60.1 60.1c10.9 10.9 10.9 21.4-.2 32.7-4.4 4.6-9.1 9.2-13.9 13.7-6.9 6.5-13.8 13.1-19.9 20.9-9.6 11.5-21.2 16.7-37.5 16.7-1.9 0-3.8-.1-5.7-.2-33-2.3-63.3-15.5-86.1-26.4-62.2-29.4-115.6-71.8-160.1-128.1-37-45.2-61.3-86.2-77.5-130.2-10.8-29.1-14.8-51.9-13.2-72.1z"
                                    data-original="#000000" />
                            </svg>
                            <a class="text-sm ml-4 text-black dark:text-gray-400">
                                <strong>+1 (234) 567 890</strong>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="z-1 relative h-full max-md:min-h-[350px]">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                            frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </div>

    </div>



</x-app-layout>

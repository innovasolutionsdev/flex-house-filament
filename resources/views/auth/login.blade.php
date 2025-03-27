<x-app-layout>
    <div class="font-[sans-serif] dark:bg-[#171717]">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div
                class="grid md:grid-cols-2 items-center gap-4 max-md:gap-8 max-w-6xl max-md:max-w-lg w-full p-4 m-4  rounded-md">
                <div class="md:max-w-md w-full px-4 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-12 text-center">
                            <h3 class="text-black dark:text-white text-3xl font-semibold">Log In</h3>
                            <p class="text-sm mt-4 text-gray-800 dark:text-gray-400">Don't have an account?
                                <a href="{{ route('register') }}"
                                    class="text-[#F41E1E] font-semibold hover:underline ml-1 whitespace-nowrap">Register
                                    here</a>
                            </p>
                        </div>

                        <div>
                            {{-- <label class="text-gray-800 text-xs block mb-2">Email</label> --}}
                            <div class="relative flex items-center ">
                                <input name="email" type="email" required
                                    class="w-full text-gray-300 text-sm border-2 border-black focus:border-gray-600 focus:ring-0 px-4 py-2 outline-none bg-[#141414] rounded-lg"
                                    placeholder="Email" />
                            </div>
                        </div>


                        <div class="mt-8">
                            <div class="relative flex items-center">
                                <input id="password" name="password" type="password" required
                                    class="w-full text-gray-300 text-sm border-2 border-black focus:border-gray-600 focus:ring-0 px-4 py-2 outline-none bg-[#141414] rounded-lg"
                                    placeholder="Password" />

                                <!-- Eye Icon Button -->
                                <button type="button" id="togglePassword"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                                    <!-- You can replace this SVG with any icon library like FontAwesome -->
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>


                        <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
                            {{-- <div class="flex items-center">
                                <input id="remember-me" name="remember" type="checkbox"
                                    class="h-4 w-4 shrink-0 text-[#F41E1E] focus:ring-[#F41E1E] border-gray-300 rounded" />
                                <label for="remember-me"
                                    class="ml-3 block text-sm text-gray-800 dark:text-gray-400">Remember me</label>
                            </div> --}}
                            <div>
                                <a href="{{ route('password.request') }}"
                                    class="text-black dark:text-gray-100 font-semibold text-sm hover:underline">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                        <x-validation-errors class="mb-4" />
                        <div class=" mt-4 md:mt-12 flex justify-center">
                            <button type="submit"
                                class="w-1/2 shadow-xl py-1.5 px-2 text-lg font-bold tracking-wide rounded-3xl text-white dark:hover:text-black bg-[#F41E1E] dark:hover:bg-white dark:bg-[#F41E1E] hover:bg-[#F41E1E] focus:outline-none transform transition-all duration-300 ease-in-out">
                                Log In
                            </button>
                        </div>

                        {{-- <div class="space-x-6 flex justify-center mt-6">
                            <!-- Social login buttons (optional) -->
                            <button type="button" class="border-none outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32px" class="inline"
                                    viewBox="0 0 512 512">
                                    <path fill="#fbbd00"
                                        d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                                        data-original="#fbbd00" />
                                    <path fill="#0f9d58"
                                        d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                                        data-original="#0f9d58" />
                                    <path fill="#31aa52"
                                        d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                                        data-original="#31aa52" />
                                    <path fill="#3c79e6"
                                        d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                                        data-original="#3c79e6" />
                                    <path fill="#cf2d48"
                                        d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                        data-original="#cf2d48" />
                                    <path fill="#eb4132"
                                        d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                                        data-original="#eb4132" />
                                </svg>
                            </button>
                            <button type="button" class="border-none outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32px" fill="#000"
                                    viewBox="0 0 22.773 22.773">
                                    <path
                                        d="M15.769 0h.162c.13 1.606-.483 2.806-1.228 3.675-.731.863-1.732 1.7-3.351 1.573-.108-1.583.506-2.694 1.25-3.561C13.292.879 14.557.16 15.769 0zm4.901 16.716v.045c-.455 1.378-1.104 2.559-1.896 3.655-.723.995-1.609 2.334-3.191 2.334-1.367 0-2.275-.879-3.676-.903-1.482-.024-2.297.735-3.652.926h-.462c-.995-.144-1.798-.932-2.383-1.642-1.725-2.098-3.058-4.808-3.306-8.276v-1.019c.105-2.482 1.311-4.5 2.914-5.478.846-.52 2.009-.963 3.304-.765.555.086 1.122.276 1.619.464.471.181 1.06.502 1.618.485.378-.011.754-.208 1.135-.347 1.116-.403 2.21-.865 3.652-.648 1.733.262 2.963 1.032 3.723 2.22-1.466.933-2.625 2.339-2.427 4.74.176 2.181 1.444 3.457 3.028 4.209z"
                                        data-original="#000000"></path>
                                </svg>
                            </button>
                            <button type="button" class="border-none outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32px" fill="#007bff"
                                    viewBox="0 0 167.657 167.657">
                                    <path
                                        d="M83.829.349C37.532.349 0 37.881 0 84.178c0 41.523 30.222 75.911 69.848 82.57v-65.081H49.626v-23.42h20.222V60.978c0-20.037 12.238-30.956 30.115-30.956 8.562 0 15.92.638 18.056.919v20.944l-12.399.006c-9.72 0-11.594 4.618-11.594 11.397v14.947h23.193l-3.025 23.42H94.026v65.653c41.476-5.048 73.631-40.312 73.631-83.154 0-46.273-37.532-83.805-83.828-83.805z"
                                        data-original="#010002"></path>
                                </svg>
                            </button>
                        </div> --}}
                    </form>
                </div>
                <div class="lg:h-[400px] md:h-[300px] max-md:mt-8 hidden md:block ">
                    <img src="/img/login.jpg" class="w-full h-full object-contain rounded-md" alt="Sign up image" />
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon (if you want to change it to an eye-slash icon when the password is visible)
            togglePassword.classList.toggle('text-blue-600'); // Add a style change if needed
        });
    </script>

</x-app-layout>

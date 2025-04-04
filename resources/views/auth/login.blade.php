{{-- <x-app-layout>
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

                               
                                <button type="button" id="togglePassword"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                                    
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
           
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            
            togglePassword.classList.toggle('text-blue-600'); 
        });
    </script>

</x-app-layout> --}}
<x-app-layout>
    <div class="bg-[#171717]">
        <div class=" py-12 text-white flex flex-col md:flex-row items-center md:items-start p-8 md:p-16 space-y-8 md:space-y-0 md:space-x-16 max-w-4xl mx-auto">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-8 text-center">Log In</h2>
                <p class="mb-4">
                    Don't have an account?
                    <a href="{{ route('register') }}" style="color: rgb(250, 49, 49);" class="ml-2">Register here</a>
                </p>
                
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    
                    <div>
                        <input name="email" type="email" required
                            class="w-full py-2 px-4 bg-[#141414] border border-gray-700 rounded focus:outline-none focus:ring-0 focus:border-red-500"
                            placeholder="Email" />
                    </div>
                    
                    <div class="relative">
                        <input id="password" name="password" type="password" required
                            class="w-full py-2 px-4 bg-[#141414] border border-gray-700 rounded focus:outline-none focus:ring-0 focus:border-red-500"
                            placeholder="Password" />
                        <i class="fas fa-eye absolute right-3 top-3 text-gray-500 cursor-pointer" id="togglePassword"></i>
                    </div>
                    
                    <div>
                        <a href="{{ route('password.request') }}" class="text-white font-bold">
                            Forgot Password?
                        </a>
                    </div>
                    
                    <x-validation-errors class="mb-4" />
                    
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-1/2 p-2 bg-red-600 rounded-full text-white font-bold hover:bg-red-700">
                            Log In
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="w-full md:w-1/2">
                <img src="/img/login.jpg" class="rounded w-full h-auto max-w-md mx-auto" alt="Login image" />
            </div>
        </div>
    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</x-app-layout>
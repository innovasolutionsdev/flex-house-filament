<x-app-layout>
    <div class="font-[sans-serif] dark:bg-[#171717]">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div
                class="grid md:grid-cols-2 items-center gap-4 max-md:gap-8 max-w-6xl max-md:max-w-lg w-full p-4 m-4 rounded-md">

                <!-- Registration Form Section -->
                <div class="md:max-w-md w-full px-4 py-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-12 text-center">
                            <h3 class="text-black dark:text-white text-3xl font-extrabold">Register</h3>
                            <p class="text-sm mt-4 text-gray-800 dark:text-gray-400">
                                Already have an account?
                                <a href="{{ route('login') }}"
                                    class="text-[#F41E1E] font-semibold hover:underline ml-1 whitespace-nowrap">Sign in
                                    here</a>
                            </p>
                        </div>
                        <x-validation-errors class="mb-4" />
                        <!-- Section 1: Initial Registration Fields -->
                        <div id="section1">
                            <div class="mb-4">
                                <input name="name" type="text"
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Name" />
                            </div>
                            <div class="mb-4">
                                <input name="email" type="email"
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Email" />
                            </div>
                            <div class="mb-4">
                                <select id="membership_plan" name="membership_plan"
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none">
                                    @foreach ($membershipPlans as $plan)
                                        <option value="{{ $plan->id }}" data-duration="{{ $plan->duration }}">
                                            {{ $plan->name }} ({{ $plan->duration }} Months)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="button" onclick="showSection2()"
                                    class="w-full shadow-xl py-2.5 px-4 text-lg  font-bold   rounded-md text-white dark:hover:text-black bg-[#F41E1E] dark:hover:bg-white dark:bg-[#F41E1E] hover:bg-[#F41E1E] focus:outline-none transition duration-300">
                                    Continue Registration
                                </button>
                            </div>
                        </div>


                        <!-- Section 2: Additional Registration Fields -->
                        <div id="section2" style="display: none;">
                            <div class="mb-4">
                                <input id="start_date" type="date" name="start_date" required
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Start Date" />
                            </div>
                            <div class="mb-4">
                                <input id="end_date" type="date" name="end_date" required readonly
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="End Date" />
                            </div>
                            {{-- <div class="mb-4">
                                <input name="password" type="password" required
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Password" />
                            </div>
                            <div class="mb-4">
                                <input name="password_confirmation" type="password" required
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Confirm Password" />
                            </div> --}}
                            <div class="mb-4 relative">
                                <input id="password" name="password" type="password" required
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Password" />
                                <button type="button" id="togglePassword"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                                    <svg id="eyeIconPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="mb-4 relative">
                                <input id="password_confirmation" name="password_confirmation" type="password" required
                                    class="w-full rounded-lg text-gray-800 text-sm border-b border-gray-300 focus:border-[#F41E1E] px-2 py-3 outline-none"
                                    placeholder="Confirm Password" />
                                <button type="button" id="toggleConfirmPassword"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                                    <svg id="eyeIconConfirmPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>


                            <div class="mt-8 flex justify-between">
                                <!-- Back Button to Section 1 -->
                                <button type="button" onclick="showSection1()"
                                    class="w-1/2 mr-2 shadow-xl py-2.5 px-4 text-lg font-bold rounded-md text-black dark:text-white bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-600 focus:outline-none">
                                    Back
                                </button>

                                <!-- Sign Up Button -->
                                <button type="submit"
                                    class="w-1/2 ml-2 shadow-xl py-2.5 px-4 text-lg font-bold uppercase tracking-wide rounded-md text-white dark:hover:text-black bg-[#F41E1E] dark:hover:bg-white dark:bg-[#F41E1E] hover:bg-[#F41E1E] focus:outline-none">
                                    Sign Up
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Image Section -->
                <div class="lg:h-[400px] md:h-[300px] max-md:mt-8 hidden md:block ">
                    <img src="/img/login.jpg" class="w-full h-full object-contain rounded-md" alt="Sign up image" />
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show Section 2 of the form
        function showSection2() {
            document.getElementById('section1').style.display = 'none';
            document.getElementById('section2').style.display = 'block';
        }

        // Show Section 1 of the form
        function showSection1() {
            document.getElementById('section2').style.display = 'none';
            document.getElementById('section1').style.display = 'block';
        }

        // Calculate membership end date based on selected plan
        document.getElementById('membership_plan').addEventListener('change', calculateEndDate);
        document.getElementById('start_date').addEventListener('change', calculateEndDate);

        function calculateEndDate() {
            const membershipSelect = document.getElementById('membership_plan');
            const startDateInput = document.getElementById('start_date');
            const endDateInput = document.getElementById('end_date');

            const selectedMembership = membershipSelect.options[membershipSelect.selectedIndex];
            const duration = selectedMembership.getAttribute('data-duration');

            const startDate = new Date(startDateInput.value);
            if (startDate && duration) {
                const endDate = new Date(startDate);
                endDate.setDate(endDate.getDate() + parseInt(duration));
                endDateInput.value = endDate.toISOString().split('T')[0];
            } else {
                endDateInput.value = '';
            }
        }

        // Toggle password visibility
        // Toggle password visibility for password field
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');
        const eyeIconPassword = document.getElementById('eyeIconPassword');

        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            // Toggle the icon
            eyeIconPassword.classList.toggle('eye-slash');
        });

        // Toggle password visibility for confirm password field
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const toggleConfirmPasswordButton = document.getElementById('toggleConfirmPassword');
        const eyeIconConfirmPassword = document.getElementById('eyeIconConfirmPassword');

        toggleConfirmPasswordButton.addEventListener('click', () => {
            const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
            confirmPasswordInput.type = type;
            // Toggle the icon
            eyeIconConfirmPassword.classList.toggle('eye-slash');
        });
    </script>

</x-app-layout>

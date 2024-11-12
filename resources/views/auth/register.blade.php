{{--
<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Section 1: Initial fields -->
            <div id="section1">
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                </div>


                <div class="mt-4">
                    <label for="membership_plan" class="block mt-1 w-full">{{ __('Membership Plan') }}</label>
                    <select id="membership_plan" name="membership_plan"
                        class="block mt-1 w-full p-2 border-gray-300 rounded-md">
                        <option value="">Select a Membership Plan</option>
                        @foreach ($membershipPlans as $plan)
                            <option value="{{ $plan->id }}" data-duration="{{ $plan->duration }}">
                                {{ $plan->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('membership_plan')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="button" onclick="showSection2()"
                        class="my-2 font-bold px-4 py-2 bg-[#F41E1E] text-white rounded-md hover:bg-[#141414] transition duration-300">
                        Continue Registration
                    </button>
                </div>


            </div>

            <!-- Section 2: Remaining fields -->
            <div id="section2" style="display: none;">
                <div class="mt-4">
                    <x-label for="start_date" value="{{ __('Start Date') }}" />
                    <x-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" required
                        autocomplete="Membership Start Date" />
                </div>

                <div class="mt-4">
                    <x-label for="end_date" value="{{ __('End Date') }}" />
                    <x-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" required
                        autocomplete="Membership End Date" readonly />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <!-- Additional fields here -->

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ms-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-app-layout>

<script>
    function showSection2() {
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'block';
    }

    // Existing calculateEndDate function if needed
    document.getElementById('membership_plan').addEventListener('change', calculateEndDate);
    document.getElementById('start_date').addEventListener('change', calculateEndDate);

    function calculateEndDate() {
        const membershipSelect = document.getElementById('membership_plan');
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        const selectedMembership = membershipSelect.options[membershipSelect.selectedIndex];
        const duration = selectedMembership.getAttribute('data-duration'); // Duration in days

        const startDate = new Date(startDateInput.value);
        if (startDate && duration) {
            const endDate = new Date(startDate);
            endDate.setDate(endDate.getDate() + parseInt(duration)); // Add the membership duration to start date
            endDateInput.value = endDate.toISOString().split('T')[0]; // Format the date to YYYY-MM-DD
        } else {
            endDateInput.value = ''; // Clear the end date if inputs are invalid
        }
    }
</script> --}}
<x-app-layout>
<div class="font-[sans-serif]">
    <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full">
            <div class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
                <!-- Initial Registration Form -->
                <form class="space-y-4">
                    <div id="section1">
                        <div class="mb-8">
                            <h3 class="text-gray-800 text-3xl font-extrabold">Register</h3>
                            <p class="text-gray-500 text-sm mt-4 leading-relaxed">Start your journey by creating an account.</p>
                        </div>

                        <!-- Username and Email -->
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Name</label>
                            <input name="name" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter your name" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Email</label>
                            <input name="email" type="email" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter your email" />
                        </div>

                        <!-- Membership Plan Selection -->
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Membership Plan</label>
                            <select id="membership_plan" name="membership_plan" class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600">
                                <option value="">Select a Membership Plan</option>
                                <!-- Example plans; replace with dynamic options -->
                                <option value="1" data-duration="30">Plan A (1 Month)</option>
                                <option value="2" data-duration="90">Plan B (3 Months)</option>
                            </select>
                        </div>

                        <!-- Continue Registration Button -->
                        <div class="mt-4">
                            <button type="button" onclick="showSection2()" class="w-full font-bold px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">
                                Continue Registration
                            </button>
                        </div>
                    </div>

                    <!-- Section 2: Additional Fields -->
                    <div id="section2" style="display: none;">
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Start Date</label>
                            <input id="start_date" type="date" name="start_date" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">End Date</label>
                            <input id="end_date" type="date" name="end_date" required readonly class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Password</label>
                            <input name="password" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter password" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
                            <input name="password_confirmation" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Confirm password" />
                        </div>

                        <!-- Register Button -->
                        <div class="mt-4">
                            <button type="submit" class="w-full font-bold px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-300">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Image Section -->
            <div class="lg:h-[400px] md:h-[300px] max-md:mt-8">
                <img src="https://readymadeui.com/login-image.webp" class="w-full h-full max-md:w-4/5 mx-auto block object-cover" alt="Sign up image" />
            </div>
        </div>
    </div>
</div>

<script>
    function showSection2() {
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'block';
    }

    document.getElementById('membership_plan').addEventListener('change', calculateEndDate);
    document.getElementById('start_date').addEventListener('change', calculateEndDate);

    function calculateEndDate() {
        const membershipSelect = document.getElementById('membership_plan');
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        const selectedMembership = membershipSelect.options[membershipSelect.selectedIndex];
        const duration = selectedMembership.getAttribute('data-duration'); // Duration in days

        const startDate = new Date(startDateInput.value);
        if (startDate && duration) {
            const endDate = new Date(startDate);
            endDate.setDate(endDate.getDate() + parseInt(duration)); // Add the membership duration to start date
            endDateInput.value = endDate.toISOString().split('T')[0]; // Format the date to YYYY-MM-DD
        } else {
            endDateInput.value = ''; // Clear the end date if inputs are invalid
        }
    }
</script>
</x-app-layout>

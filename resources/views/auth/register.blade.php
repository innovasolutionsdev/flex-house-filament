{{-- <x-app-layout>
    <div class="mb-24">

    </div>
    <x-authentication-card >
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="start_date" value="{{ __('Start Date') }}" />
                <x-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" required autocomplete="Membership Start Date" />
            </div>

            <div class="mt-4">
                <x-label for="end_date" value="{{ __('End Date') }}" />
                <x-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" required autocomplete="Membership End Date" readonly />
            </div>

            <div class="mt-4">
                <label for="membership_plan" class="block mt-1 w-full">{{ __('Membership Plan') }}</label>
                <select id="membership_plan" name="membership_plan" class="block mt-1 w-full p-2 border-gray-300 rounded-md">
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
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

    </x-authentication-card>



    </div>
</x-app-layout>

<script>
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
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

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
</script>

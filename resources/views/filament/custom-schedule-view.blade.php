<x-filament::page>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div>
            <h2 class="text-xl font-bold">{{ $schedule->name }}</h2>
            <p><strong>Created At:</strong> {{ $schedule->created_at->format('Y-m-d H:i') }}</p>

            <h3 class="text-lg font-semibold mt-4">Workouts:</h3>
            <ul>
                @foreach($schedule->workouts as $workout)
                    <li class="mt-2">
                        <strong>{{ $workout->name }}</strong>
                        <ul class="ml-4">
                            @foreach($workout->exercises as $exercise)
                                <li>
                                    <strong>{{ $exercise->name }}</strong> -
                                    {{ $exercise->sets }} sets,
                                    {{ $exercise->reps }} reps,
                                    Rest: {{ $exercise->rest_time }} seconds
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-filament::page>

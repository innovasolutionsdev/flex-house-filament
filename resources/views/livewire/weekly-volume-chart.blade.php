<div>


    <select wire:model="selectedExercise" wire:change="updatedSelectedExercise">
        <option value="">Select the Exercise</option>
        @foreach($exercises as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>


    <canvas id="volumeChart"></canvas>

    <script>
        document.addEventListener('livewire:load', function () {
            const ctx = document.getElementById('volumeChart').getContext('2d');
            let chart;

            Livewire.on('updateChart', volumeData => {
                const labels = volumeData.map(data => data.date);
                const volumes = volumeData.map(data => data.volume);

                if (chart) {
                    chart.destroy(); // Destroy the previous chart instance
                }

                chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Weekly Volume',
                            data: volumes,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 2,
                            fill: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Date'
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Volume'
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            });

            // Livewire.on('updateChart', this.calculateVolume);
        });
    </script>
</div>

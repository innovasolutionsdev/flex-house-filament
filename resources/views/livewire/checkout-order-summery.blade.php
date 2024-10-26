<div class="bg-white p-6 rounded-lg shadow-md h-96 overflow-y-auto">
    <h2 class="text-xl font-semibold mb-4">
        Order Summary
    </h2>
    @foreach($cartItems as $item)
        <div class="flex items-center mb-4 p-4 border-b last:border-b-0">
            <img alt="{{ $item['name'] }}" class="w-16 h-16 rounded-md" height="60" src="{{ $item['image'] }}" width="60"/>
            <div class="ml-4 flex-1">
                <p class="text-sm font-medium text-gray-700 truncate">
                    {{ $item['name'] }}
                </p>
                <p class="text-sm text-gray-500">
                    Qty: {{ $item['qty'] }}
                </p>
                <p class="text-sm font-medium text-gray-900">
                    රු.{{ $item['total'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>

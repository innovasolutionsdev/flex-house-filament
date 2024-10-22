<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">
        Order summary
    </h2>
@foreach($cartItems as $item)

    <div class="flex items-center mb-4">
        <img alt="Black T-shirt" class="w-16 h-16 rounded-md" height="60" src="https://storage.googleapis.com/a1aa/image/ldFq6kQGvZLeRCWNx32snxfRag5nTkeF1aWP3p4P4NkMCFSnA.jpg" width="60"/>
        <div class="ml-4">
            <p class="text-sm font-medium text-gray-700">
                Basic Tee
            </p>
            <p class="text-sm text-gray-500">
                Black
            </p>
            <p class="text-sm text-gray-500">
                Large
            </p>
            <p class="text-sm font-medium text-gray-900">
                $32.00
            </p>
        </div>

    </div>
@endforeach
</div>

<div class="flex items-center">
    <!-- Input for quantity -->
    <input type="number" wire:model.lazy="quantity" wire:change="updateCartQuantity"
           class="border border-gray-300 rounded-md p-2 text-center w-16"
           min="1" max="{{$stock}}"
              oninput="checkMaxQuantity(this)"
    />

    <!-- Optionally, you can show a success message after the quantity is updated -->
    <div wire:loading wire:target="quantity" class="ml-2">
        <i class="fas fa-spinner fa-spin"></i> Updating...
    </div>
</div>

<script>
    function checkMaxQuantity(input) {
        let max = input.max;
        if (parseInt(input.value) > parseInt(max)) {
            input.value = max;
        } else if (input.value < 1) {
            input.value = 1; // Ensures value doesn't drop below 1
        }
    }
</script>

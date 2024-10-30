<div id="bottom-nav" class="flex items-center justify-center pt-20" style="display: none;">
    <div class="fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-800 rounded-t-full p-4 flex justify-around">
        <a href="#" class="nav-item flex items-center justify-center w-12 h-12 rounded-full cursor-pointer active" onclick="activateNavItem(this)" style="transition: background-color 0.2s; background-color: #f87171;">
            <i class="fas fa-th-large text-black text-xl"></i> <!-- Dashboard Icon (Four Squares Block) -->
        </a>
        <a href="#" class="nav-item flex items-center justify-center w-12 h-12 rounded-full cursor-pointer" onclick="activateNavItem(this)" style="transition: background-color 0.2s;">
            <i class="fas fa-shopping-cart text-black text-xl"></i> <!-- Shop Icon -->
        </a>
        <a href="#" class="nav-item flex items-center justify-center w-12 h-12 rounded-full cursor-pointer" onclick="activateNavItem(this)" style="transition: background-color 0.2s;">
            <i class="fas fa-store text-black text-xl"></i> <!-- Store Icon -->
        </a>
        <a href="#" class="nav-item flex items-center justify-center w-12 h-12 rounded-full cursor-pointer" onclick="activateNavItem(this)" style="transition: background-color 0.2s;">
            <i class="fas fa-user text-black text-xl"></i> <!-- Profile Icon -->
        </a>
    </div>
</div>

<script>
    function activateNavItem(element) {
        // Remove active class from all nav items
        document.querySelectorAll('.nav-item').forEach(item => {
            item.style.backgroundColor = '';
            item.classList.remove('active');
        });
        // Add active class to the clicked nav item
        element.style.backgroundColor = '#f87171'; // Red-500
        element.classList.add('active');
    }

    // Check if in standalone mode
    if (window.matchMedia('(display-mode: standalone)').matches) {
        // Show the bottom navigation
        document.getElementById('bottom-nav').style.display = 'flex'; // or 'block' based on your layout
    }
</script>

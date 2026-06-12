<div id="contact" class="bg-neutral-900 text-gray-200 px-6 md:px-20 py-6">
    <div class="grid md:grid-cols-4 gap-12">
        <!-- Logo + Motto + Social -->
        <div>
            <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Nineteen Alpha" class="h-28 mb-4">
            <p class="mb-6">Empowering Defense, Defending Future.</p>

            <div class="flex gap-3">
                <a href="https://facebook.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="<?php echo e(asset('images/social/facebook.png')); ?>" alt="Facebook" class="w-5 h-5">
                </a>
                <a href="https://twitter.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="<?php echo e(asset('images/social/x.png')); ?>" alt="Twitter" class="w-5 h-5">
                </a>
                <a href="https://linkedin.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="<?php echo e(asset('images/social/linkedin.png')); ?>" alt="LinkedIn" class="w-5 h-5">
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h2 class="font-bold mb-4">Quick Links</h2>
            <ul class="space-y-2">
                <li><a href="<?php echo e(route('home')); ?>" class="hover:text-red-400">Home</a></li>
                <li><a href="<?php echo e(route('about')); ?>" class="hover:text-red-400">About Us</a></li>
                <li><a href="<?php echo e(route('founder_message')); ?>" class="hover:text-red-400">Founder Message</a></li>
                <li><a href="<?php echo e(route('products.index')); ?>" class="hover:text-red-400">Products</a></li>
                <li><a href="<?php echo e(route('capabilities')); ?>" class="hover:text-red-400">Capabilities</a></li>
                <li><a href="<?php echo e(route('contact.index')); ?>" class="hover:text-red-400">Contact Us</a></li>
            </ul>
        </div>
        <!-- Capabilities -->
        <div>
            <h2 class="font-bold mb-4">Capabilities</h2>
            <ul class="space-y-2">
                <li><a href="<?php echo e(route('capability.air')); ?>" class="hover:text-red-400">Air</a></li>
                <li><a href="<?php echo e(route('capability.land')); ?>" class="hover:text-red-400">Land</a></li>
                <li><a href="<?php echo e(route('capability.sea')); ?>" class="hover:text-red-400">Sea</a></li>
                <li><a href="<?php echo e(route('capability.weapons')); ?>" class="hover:text-red-400">Weapons</a></li>
            </ul>

            <!-- Gap + Black Divider -->
            <div class="mt-6 border-t border-transparent pt-4">
                <a href="https://mail.hostinger.com/" target="_blank" class="hover:text-red-400">
                    Check Email
                </a>
            </div>

        </div>


        <!-- Contact Info -->
        <div>
            <h2 class="font-bold mb-4">Contact Info</h2>

            <div class="mb-3 flex items-start gap-2">
                <span class="mt-1">📞</span>
                <a href="tel:+8801711190343" class="text-blue-400 hover:underline break-all">+880-171-119-0343</a>
            </div>

            <div class="mb-3 flex items-start gap-2">
                <span class="mt-1">📧</span>
                <a href="mailto:info@nineteenalpha.com"
                    class="text-blue-400 hover:underline break-all">info@nineteenalpha.com</a>
            </div>

            <div class="mb-3 flex items-start gap-2">
                <span class="mt-1">📍</span>
                <a href="https://www.google.com/maps/search/?api=1&query=House+908,+Road+12+West,+Mirpur+DOHS,+Dhaka+1216,+Bangladesh"
                    class="text-blue-400 hover:underline">
                    <span class="block">Road - 12 (West), House - 908,</span>
                    <span class="block">Mirpur DOHS, Dhaka 1216, Bangladesh</span>
                </a>
            </div>

            <div class="flex items-start gap-2">
                <span class="mt-1">🌐</span>
                <a href="https://www.nineteenalpha.com" class="text-blue-400 hover:underline">www.nineteenalpha.com</a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-700 mt-10 pt-4 text-sm text-gray-400">
        <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-2">
            <div>
                <p>
                    © <span id="year"></span>
                    <strong class="text-white">Nineteen Alpha.</strong> All rights reserved.
                </p>
            </div>
            <div>
                <p>
                    Design and Developed by
                    <a href="https://www.totalofftec.com" target="_blank" class="hover:underline text-white">
                        <span class="custom-name">
                            <span class="total">total</span><span class="offtec">offtec</span>
                        </span>
                    </a>
                </p>
            </div>
        </div>
    </div>

    <style>
        .custom-name {
            font-family: "OnStage", sans-serif;
            font-weight: normal;
            margin-left: 5px;
        }

        .custom-name .total {
            color: #ff9900;
            font-size: 18px;
        }

        .custom-name .offtec {
            color: #d9d9d9;
            font-size: 18px;
            margin-left: 1px;
        }

        @font-face {
            font-family: "OnStage";
            src: url("<?php echo e(asset('fonts/Onstage_regular.ttf')); ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</div>
<?php /**PATH E:\laragon\www\tot_nineteenalpha\resources\views/partial/footer.blade.php ENDPATH**/ ?>
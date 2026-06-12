<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partial.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-red-700 mb-12 tracking-wide">SYSTEM CAPABILITIES</h2>

        <!-- Force 2x2 Layout on All Screens -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 max-w-6xl mx-auto">
            <?php
                $capabilities = [
                    ['name' => 'AIR', 'route' => 'capability.air', 'image' => 'images/capabilities/cap_air.JPG'],
                    ['name' => 'LAND', 'route' => 'capability.land', 'image' => 'images/capabilities/cap_land.jpg'],
                    ['name' => 'SEA', 'route' => 'capability.sea', 'image' => 'images/capabilities/cap_sea.jpg'],
                    ['name' => 'WEAPONS', 'route' => 'capability.weapons', 'image' => 'images/capabilities/cap_weapon.jpg'],
                ];
            ?>

            <?php $__currentLoopData = $capabilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route($cap['route'])); ?>">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden text-center hover:scale-105 transition transform duration-300">
                        <!-- Increased Image Height -->
                        <div class="w-full h-80">
                            <img src="<?php echo e(asset($cap['image'])); ?>" alt="<?php echo e($cap['name']); ?>"
                                class="w-full h-full object-cover opacity-70">
                        </div>
                        <div class="py-6 text-2xl font-bold text-gray-800 tracking-wide"><?php echo e($cap['name']); ?></div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php echo $__env->make('partial.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\tot_nineteenalpha\resources\views/capabilities.blade.php ENDPATH**/ ?>
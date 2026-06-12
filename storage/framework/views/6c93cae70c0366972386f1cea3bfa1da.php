<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('partial.header', ['title' => 'Products & Services'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <div id="headerSection"
         class="relative group h-[500px] bg-cover bg-center flex items-center justify-center text-white"
         style="background-image:url('<?php echo e(asset('images/product/gun_wallpaper.jpg')); ?>')">

        
        <div class="absolute inset-0 bg-opacity-50"></div>

        
        <h2 class="relative z-10 text-4xl font-bold">Products &amp; Services</h2>

        
        <input id="headerImageInput" type="file" accept="image/*" class="hidden">
    </div>

    
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 mt-10 px-4 md:px-8">
        <?php
            $products = [
                [
                    'title' => 'Multiple Launch Rocket System',
                    'description' => 'A Multiple Launch Rocket System (MLRS) is a mobile artillery platform that fires multiple rockets in rapid succession. It provides long-range attacks on enemy targets, enhancing ground combat effectiveness.',
                    'image' => 'images/military equipment/TRG-300 Tiger.JPG'
                ],
                [
                    'title' => 'Drone',
                    'description' => 'A drone is an unmanned aerial vehicle (UAV) that is operated remotely or autonomously using software-controlled flight plans. Drones are commonly used for aerial photography, surveillance, delivery services, agriculture, and recreational purposes.',
                    'image' => 'images/product/drone.png'
                ],
                [
                    'title' => 'Anti-Drone',
                    'description' => 'An anti-drone system is a technology designed to detect, track, and neutralize unauthorized or hostile drones. These systems use radar, RF sensors, jamming signals, and physical interceptors to protect restricted areas.',
                    'image' => 'images/antidrone/Oerlikon Skyshield.jpg'
                ],
                [
                    'title' => 'Jammer',
                    'description' => 'A jammer disrupts or blocks wireless signals like GPS, radio, or mobile networks. It is widely used in security, military operations, and drone defense to prevent unauthorized communication.',
                    'image' => 'images/jammer/1km-Jammer-1.jpg'
                ],
                [
                    'title' => 'Land System',
                    'description' => 'Our advanced land systems include armored vehicles and tactical equipment designed to enhance mobility, protection, and combat efficiency on the battlefield.',
                    'image' => 'images/product/land1.png'
                ],
                [
                    'title' => 'Fighter Aircraft',
                    'description' => 'A fighter aircraft is a fast, agile military airplane equipped with weapons and radar. It excels in air-to-air combat and ensures air superiority during missions.',
                    'image' => 'images/product/aerospace.jpg'
                ],
                [
                    'title' => 'Tank',
                    'description' => 'A tank is a heavily armored vehicle armed with powerful weapons, designed for front-line combat and offensive ground operations.',
                    'image' => 'images/tank/Type 85 AFV.jpg'
                ],
                [
                    'title' => 'Helicopter',
                    'description' => 'Helicopters use rotating blades for vertical lift, ideal for transport, rescue, surveillance, and tactical military operations.',
                    'image' => 'images/helicopter/Bell 407 GXi.jpg'
                ],
                [
                    'title' => 'Ship',
                    'description' => 'A ship is a large watercraft designed to transport people or goods across seas and oceans, it is used for commercial trade, military operations, travel, and exploration.',
                    'image' => 'images/product/ship.jpg'
                ],
            ];
        ?>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">
                
                <div class="absolute top-3 right-3 flex space-x-2 z-20 opacity-0 group-hover:opacity-100 transition-opacity">

                </div>

                
                <div class="h-60 overflow-hidden">
                    <img src="<?php echo e(asset($product['image'])); ?>" alt="<?php echo e($product['title']); ?>"
                         class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                </div>

                
                <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                    <h2 class="text-lg font-bold mb-2"><?php echo e($product['title']); ?></h2>
                    <p class="text-sm leading-relaxed text-justify"><?php echo e($product['description']); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
      <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 mt-10 px-4 md:px-8">

    </div>
    <?php echo $__env->make('partial.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laragon\www\tot_nineteenalpha\resources\views/product/index.blade.php ENDPATH**/ ?>
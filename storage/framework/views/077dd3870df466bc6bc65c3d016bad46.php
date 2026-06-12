<!-- Served Section -->
<section id="services" class="bg-white dark:bg-neutral-950 py-16 px-6 md:px-20">
    <link rel="stylesheet" href="<?php echo e(asset('asset/custom.css')); ?>">

    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">
        We Are Serving For
    </h2>

    <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <?php
            $items = [
                ['img' => 'image1.png', 'label' => 'DGDP', 'url' => 'https://dgdp.gov.bd'],
                ['img' => 'image2.png', 'label' => 'Bangladesh Army', 'url' => 'https://www.army.mil.bd'],
                ['img' => 'image3.png', 'label' => 'Bangladesh Navy', 'url' => 'https://www.navy.mil.bd'],
                ['img' => 'image11.png', 'label' => 'Bangladesh Ansar & VDP', 'url' => 'https://www.ansarvdp.gov.bd'],
                ['img' => 'image10.png', 'label' => 'Border Guard Bangladesh', 'url' => 'https://www.bgb.gov.bd'],
                ['img' => 'image4.png', 'label' => 'Bangladesh Coastguard', 'url' => 'https://coastguard.gov.bd'],
                ['img' => 'image5.png', 'label' => 'Military Engineering Service', 'url' => '#'],
                ['img' => 'image6.png', 'label' => 'Bangladesh Ordinance Factory', 'url' => 'https://bof.gov.bd'],
                ['img' => 'image12.png', 'label' => 'Bangladesh Fire Service & Civil Defence', 'url' => 'https://fireservice.gov.bd'],
                ['img' => 'image7.png', 'label' => 'Central Mechanical Transport Depot (CMTD)', 'url' => 'https://www.army.mil.bd'],
                ['img' => 'image8.png', 'label' => 'Bangladesh Machine Tools Factory Limited', 'url' => 'https://www.bmtf.com.bd/'],
                ['img' => 'image9.png', 'label' => 'Directorate General of Medical Service', 'url' => 'https://dgmsbd.net'],
            ];
        ?>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($item['url']); ?>" target="_blank" class="transition-transform duration-300 hover:scale-105">
                <div class="served-box w-full h-auto flex flex-col items-center border rounded-lg p-4 bg-white dark:bg-neutral-900">
                    <img src="<?php echo e(asset('images/served/' . $item['img'])); ?>" alt="<?php echo e($item['label']); ?>"
                         class="served-logo mb-4 object-contain transition-transform duration-300 hover:scale-125" />
                    <p class="text-center text-sm font-medium text-gray-700 dark:text-gray-300">
                        <?php echo e($item['label']); ?>

                    </p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <style>
        .served-logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
    </style>
</section>
<?php /**PATH E:\xampp\htdocs\Nineteenalpha\resources\views/partial/we_served.blade.php ENDPATH**/ ?>
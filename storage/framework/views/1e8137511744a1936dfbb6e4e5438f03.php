<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 tracking-tight">
                                Product List
                            </h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                Manage your product inventory
                            </p>
                        </div>
                        
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-product')): ?>
                            <?php if (isset($component)) { $__componentOriginald22187679b343659efe5612179e43c61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald22187679b343659efe5612179e43c61 = $attributes; } ?>
<?php $component = App\View\Components\AddProduct::resolve(['url' => route('product.create'),'name' => 'Product'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('add-product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AddProduct::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald22187679b343659efe5612179e43c61)): ?>
<?php $attributes = $__attributesOriginald22187679b343659efe5612179e43c61; ?>
<?php unset($__attributesOriginald22187679b343659efe5612179e43c61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald22187679b343659efe5612179e43c61)): ?>
<?php $component = $__componentOriginald22187679b343659efe5612179e43c61; ?>
<?php unset($__componentOriginald22187679b343659efe5612179e43c61); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                    
                    <?php if(session('success')): ?>
                        <div class="mb-4 px-4 py-3 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-700 text-green-700 dark:text-green-300 rounded-lg text-sm">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    
                    <div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-sm">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider w-8">
                                        #
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Quantity
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Price
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Owner
                                    </th>
                                    <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="hover:bg-gray-200/50 dark:hover:bg-gray-700 transition duration-100">
                                    <td class="px-6 py-4 text-gray-400 dark:text-gray-500">
                                        <?php echo e($loop->iteration); ?>

                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">
                                        <?php echo e($product->name); ?>

                                    </td>
                                    <td class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                        <span 
                                            class="inline-flex items-center px-2.5  py-0.5 rounded-full text-xs font-medium
                                            <?php echo e($product->quantity > 10 ? 'bg-green-100 text-green-800 dark:bg-green-900/40 dark:text-green-300' : 'bg-red-100 text-red-700 dark:bg-red-900/40 dark:text-red-300'); ?>">
                                            <?php echo e($product->quantity); ?>

                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-200 font-mono">
                                        Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

                                    </td>
                                    <td class="px-6 py-4 text-gray-500 dark:text-gray-400">
                                        <?php echo e($product->user->name ?? '-'); ?>

                                    </td>
                                    <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        
                                        <a href="<?php echo e(route('product.show', $product->id)); ?>" class="p-1.5 rounded-md text-gray-400 hover:text-indigo-600 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>

                                        
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $product)): ?>
                                            <?php if (isset($component)) { $__componentOriginal5f8db95e16827ebd3500ce550edd117e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f8db95e16827ebd3500ce550edd117e = $attributes; } ?>
<?php $component = App\View\Components\EditButton::resolve(['url' => route('product.edit', $product->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\EditButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $attributes = $__attributesOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $component = $__componentOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__componentOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $product)): ?>
                                            <?php if (isset($component)) { $__componentOriginal2550ac35d7599d92e03b1bde3934d26a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a = $attributes; } ?>
<?php $component = App\View\Components\DeleteButton::resolve(['url' => route('product.delete', $product->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DeleteButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $attributes = $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $component = $__componentOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" 
                                    class="px-6 py-12 text-center text-gray-400 dark:text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        class="h-10 w-10 mx-auto mb-3 opacity-40" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    No products found.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

           
            

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Pertemuan2-PWF-149\resources\views/product/index.blade.php ENDPATH**/ ?>
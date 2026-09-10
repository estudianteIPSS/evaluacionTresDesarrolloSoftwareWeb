

<?php $__env->startSection('title', 'Proyectos'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginal29d632b20531e84bc5b4f90a1eda606a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29d632b20531e84bc5b4f90a1eda606a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app','data' => ['title' => 'Proyectos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Proyectos']); ?>

    <div class="space-y-8">

        
        <div class="flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-semibold text-gray-900">
                    Proyectos
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Administración de los proyectos registrados.
                </p>
            </div>

            <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'button','onclick' => 'window.location=\''.e(route('projects.create')).'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','onclick' => 'window.location=\''.e(route('projects.create')).'\'']); ?>
                Nuevo proyecto
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>

        </div>

        
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Valor de la UF
                    </p>

                    <p class="mt-1 text-2xl font-semibold text-gray-900">
                        $<?php echo e(number_format($ufValue, 2, ',', '.')); ?>

                    </p>

                    <p class="mt-1 text-xs text-gray-500">
                        Valor correspondiente al día de hoy
                    </p>
                </div>

            </div>

        </div>

        
        <?php if(session('success')): ?>

            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                <?php echo e(session('success')); ?>

            </div>

        <?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.project-table','data' => ['projects' => $projects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('organisms.project-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f)): ?>
<?php $attributes = $__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f; ?>
<?php unset($__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f)): ?>
<?php $component = $__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f; ?>
<?php unset($__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f); ?>
<?php endif; ?>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29d632b20531e84bc5b4f90a1eda606a)): ?>
<?php $attributes = $__attributesOriginal29d632b20531e84bc5b4f90a1eda606a; ?>
<?php unset($__attributesOriginal29d632b20531e84bc5b4f90a1eda606a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29d632b20531e84bc5b4f90a1eda606a)): ?>
<?php $component = $__componentOriginal29d632b20531e84bc5b4f90a1eda606a; ?>
<?php unset($__componentOriginal29d632b20531e84bc5b4f90a1eda606a); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Eduardo\Downloads\tech\resources\views/pages/projects/index.blade.php ENDPATH**/ ?>
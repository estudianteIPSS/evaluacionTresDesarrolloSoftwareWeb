

<?php $__env->startSection('title', 'Nuevo proyecto'); ?>

<?php $__env->startSection('content'); ?>


<?php if (isset($component)) { $__componentOriginal29d632b20531e84bc5b4f90a1eda606a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29d632b20531e84bc5b4f90a1eda606a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app','data' => ['title' => 'Nuevo proyecto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nuevo proyecto']); ?>

    <div class="mx-auto max-w-3xl space-y-8">

        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Nuevo proyecto
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Registra un nuevo proyecto en el sistema.
            </p>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

            <?php if (isset($component)) { $__componentOriginal79f3bee4b83c0e052f6c49d34bd71188 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79f3bee4b83c0e052f6c49d34bd71188 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.project-form','data' => ['action' => route('projects.store'),'submitText' => 'Crear proyecto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('organisms.project-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.store')),'submit-text' => 'Crear proyecto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79f3bee4b83c0e052f6c49d34bd71188)): ?>
<?php $attributes = $__attributesOriginal79f3bee4b83c0e052f6c49d34bd71188; ?>
<?php unset($__attributesOriginal79f3bee4b83c0e052f6c49d34bd71188); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79f3bee4b83c0e052f6c49d34bd71188)): ?>
<?php $component = $__componentOriginal79f3bee4b83c0e052f6c49d34bd71188; ?>
<?php unset($__componentOriginal79f3bee4b83c0e052f6c49d34bd71188); ?>
<?php endif; ?>

        </div>

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Eduardo\Downloads\tech\resources\views/pages/projects/create.blade.php ENDPATH**/ ?>
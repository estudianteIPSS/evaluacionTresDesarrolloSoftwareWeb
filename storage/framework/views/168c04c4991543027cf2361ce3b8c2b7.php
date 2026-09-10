<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'projects',
    'ufValue',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'projects',
    'ufValue',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        ID
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Proyecto
                    </th>

                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Fecha de inicio
                    </th>

                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Estado
                    </th>

                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Responsable
                    </th>

                    <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Monto
                    </th>

                    <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">
                        Acciones
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">

                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr class="transition hover:bg-gray-50">

                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                            #<?php echo e($project->id); ?>

                        </td>

                        <td class="whitespace-nowrap px-6 py-4">
                            <a
                                href="<?php echo e(route('projects.show', $project)); ?>"
                                class="font-medium text-gray-900 hover:text-indigo-600"
                            >
                                <?php echo e($project->nombre); ?>

                            </a>
                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                            <?php echo e($project->fecha_inicio->format('d/m/Y')); ?>

                        </td>

                        <td class="whitespace-nowrap px-6 py-4">
                            <?php
                                $statusVariant = match ($project->estado) {
                                    'Completado' => 'success',
                                    'En desarrollo' => 'info',
                                    'Pendiente' => 'warning',
                                    'Cancelado' => 'danger',
                                    default => 'default',
                                };
                            ?>

                            <?php if (isset($component)) { $__componentOriginald550e4f46a9f9637f084f5df2326e52c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald550e4f46a9f9637f084f5df2326e52c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.badge','data' => ['variant' => $statusVariant]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statusVariant)]); ?>
                                <?php echo e($project->estado); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $attributes = $__attributesOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $component = $__componentOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__componentOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                            <?php echo e($project->responsable); ?>

                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium text-gray-900">
                            $<?php echo e(number_format($project->monto, 0, ',', '.')); ?>

                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                            <div class="flex justify-end gap-3">

                                <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route('projects.show', $project)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.show', $project))]); ?>
                                    Ver
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $attributes = $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $component = $__componentOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route('projects.edit', $project)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.edit', $project))]); ?>
                                    Editar
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $attributes = $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $component = $__componentOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>

                            </div>
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td
                            colspan="6"
                            class="px-6 py-12 text-center text-sm text-gray-500"
                        >
                            No existen proyectos registrados.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>
    </div>

</div><?php /**PATH C:\Users\Eduardo\Downloads\tech\resources\views/components/organisms/project-table.blade.php ENDPATH**/ ?>
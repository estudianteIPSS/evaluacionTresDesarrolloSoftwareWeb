<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'project' => null,
    'action',
    'method' => 'POST',
    'submitText' => 'Guardar proyecto',
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
    'project' => null,
    'action',
    'method' => 'POST',
    'submitText' => 'Guardar proyecto',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<form
    action="<?php echo e($action); ?>"
    method="POST"
    class="space-y-6"
>
    <?php echo csrf_field(); ?>

    <?php if($method !== 'POST'): ?>
        <?php echo method_field($method); ?>
    <?php endif; ?>

    <div class="grid gap-6 md:grid-cols-2">

        <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Nombre del proyecto','name' => 'nombre','value' => $project?->nombre,'placeholder' => 'Ej: Sistema de gestión']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre del proyecto','name' => 'nombre','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project?->nombre),'placeholder' => 'Ej: Sistema de gestión']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Fecha de inicio','name' => 'fecha_inicio','type' => 'date','value' => $project?->fecha_inicio?->format('Y-m-d')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Fecha de inicio','name' => 'fecha_inicio','type' => 'date','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project?->fecha_inicio?->format('Y-m-d'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Estado','name' => 'estado','value' => $project?->estado,'placeholder' => 'Ej: En desarrollo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Estado','name' => 'estado','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project?->estado),'placeholder' => 'Ej: En desarrollo']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Responsable','name' => 'responsable','value' => $project?->responsable,'placeholder' => 'Nombre del responsable']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Responsable','name' => 'responsable','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project?->responsable),'placeholder' => 'Nombre del responsable']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Monto','name' => 'monto','type' => 'number','value' => $project?->monto,'placeholder' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Monto','name' => 'monto','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project?->monto),'placeholder' => '0']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>

    </div>

    <div class="flex items-center justify-end gap-3 border-t border-gray-200 pt-6">

        <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route('projects.index'),'class' => 'px-4 py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.index')),'class' => 'px-4 py-2']); ?>
            Cancelar
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

        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>
            <?php echo e($submitText); ?>

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

</form><?php /**PATH C:\Users\Eduardo\Downloads\tech\resources\views/components/organisms/project-form.blade.php ENDPATH**/ ?>
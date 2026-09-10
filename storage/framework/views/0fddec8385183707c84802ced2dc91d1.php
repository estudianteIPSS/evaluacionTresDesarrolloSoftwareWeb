<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Gestión de Proyectos'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">

    <main class="mx-auto max-w-7xl px-6 py-8">
        <?php echo e($slot); ?>

    </main>

</body>
</html><?php /**PATH C:\Users\Eduardo\Downloads\tech\resources\views/components/templates/app.blade.php ENDPATH**/ ?>
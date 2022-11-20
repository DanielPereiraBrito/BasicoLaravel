<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Listar as Maquinas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Listar as Maquinas']); ?>
    <a href="<?php echo e(route('machines.create')); ?>">Cadastrar</a>

    <h1>Listar as Máquinas</h1>

    <?php echo $__env->make('components/flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>ações</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $machine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($machine->id); ?></td>
                <td><?php echo e($machine->name); ?></td>
                <td style="display: flex;">
                    <button type="button">
                        <a href="<?php echo e(route('machines.show', $machine->id)); ?>">Visualizar</a>
                    </button>&nbsp;
                    <button type="button">
                        <a href="<?php echo e(route('machines.edit', $machine->id)); ?>">Editar</a>
                    </button>&nbsp;
                    <form action="<?php echo e(route('machines.destroy', $machine->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>


    </table>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH E:\Projetos\php\AprendendoLaravel\aprendendo-laravel\resources\views/machines/index.blade.php ENDPATH**/ ?>
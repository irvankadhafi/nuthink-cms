<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Welcome to the Blog </h1>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-4">
                        <img class="card-img-top" src=" <?php echo !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300'; ?> " alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title text-center"><?php echo e($post->title); ?></h2>
                            <p class="card-text"> <?php echo e(Str::limit($post->body, $limit = 280, $end = '...')); ?> </p>
                            <a href="/board/posts/<?php echo e($post->id); ?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted <?php echo e($post->created_at->diffForHumans()); ?> by
                            <a href="#"><?php echo e($post->user->name); ?> </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/irvan/cms/resources/views/landing.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="mt-4"><?php echo e($post->title); ?> <span class="lead"> by <a href="#"> <?php echo e($post->user->name); ?> </a></span> </h3>
                <hr>
                <p>Posted <?php echo e($post->created_at->diffForHumans()); ?> </p>
                <hr>
                <img class="img-fluid rounded" src=" <?php echo !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300'; ?> " alt="">
                <hr>
                <p class="lead"><?php echo e($post->body); ?></p>
                <hr>
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/irvan/cms/resources/views/single.blade.php ENDPATH**/ ?>
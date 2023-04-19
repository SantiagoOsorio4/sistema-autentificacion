<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Comunas</title>
</head>

<body>

    <div class="container">
      <div class="p-3 d-flex justify-content-center">
      <div class="card w-75">
        <div class="card-header">
        <h1 class="h1 text-center fw-light">Listado de Comunas</h1>
      </div>
      <div class="card-body">
         <a href="<?php echo e(route('comunas.create')); ?>" class="btn btn-success mb-3">Add</a>
        <table class="table table table-bordered">
            <thead>
              <tr class="text-center" style="background-color: black; color: white " >
                <th scope="col">Id</th>
                <th scope="col">Commune</th>
                <th scope="col">municipality</th>
                <th scope="col">options</th>
              </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $comunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comuna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <tr>
                    <th class="text-center" scope="row"><?php echo e($comuna->comu_codi); ?></th>
                    <td class="text-center"><?php echo e($comuna->comu_nomb); ?></td>
                    <td class="text-center"><?php echo e($comuna->muni_nomb); ?></td>
                    <td class="text-center">

                      <a href="<?php echo e(route('comunas.edit',['comuna'=>$comuna->comu_codi])); ?>" class="btn btn-info">Edit</a>

                      <form method="POST" action="<?php echo e(route('comunas.destroy', ['comuna' => $comuna->comu_codi])); ?>" style="display: inline-block">
                      <?php echo method_field('delete'); ?>
                      <?php echo csrf_field(); ?>
                      <input type="submit" class="btn btn-danger" value="delete">
                      </form>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
        </div>
        </div>
      </div>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html><?php /**PATH C:\Laravel-9.0-projects\personas-app\resources\views/comunas/index.blade.php ENDPATH**/ ?>
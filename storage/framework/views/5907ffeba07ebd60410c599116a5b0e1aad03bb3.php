<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Comuna</title>
</head>

<body>
    <div class="container">
      <div class="p-3 d-flex justify-content-center" style="margin-top: 10%">
        <div class="card">
          <div class="card-header" style = "background-color: green">
        <h1>Edit commune</h1>  
      </div>
<div class="card-body">
        <form method="POST" action="<?php echo e(route('comunas.update', ['comuna'=>$comuna->comu_codi])); ?>">
          <?php echo method_field('put'); ?>
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="codigo" class="form-label">Id</label>
              <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" 
                   disabled="disabled" values="<?php echo e($comuna->comu_codi); ?>">
              <div id="codigoHelp" class="form-text">Commune Id</div>
            </div>


            <div class="mb-3">
              <label for="name" class="form-label">Commune</label>
              <input type="text" required class="form-control" id="name" placeholder="Commune name"
                name="name" value="<?php echo e($comuna->comu_nomb); ?>">
            </div>

        <label for="municipality">municipality</label>
        <select class="form-select" id="municipality" name="code" required>
            <option selected disabled value="">Choose one...</option>
            <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($municipio->muni_codi == $comuna->muni_codi): ?>
                   <option selected value="<?php echo e($municipio->muni_codi); ?>"><?php echo e($municipio->muni_nomb); ?></option>
              <?php else: ?>
                    <option value="<?php echo e($municipio->muni_codi); ?>"><?php echo e($municipio->muni_nomb); ?></option>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
            <div class="mt-3">
           <button type="submit" class="btn btn-primary">update</button>
           <a href="<?php echo e(route('comunas.index')); ?>" class="btn btn-warning">Close</a>
            </div>
          </form>
        </div>
        </div>
        </div>      
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html><?php /**PATH C:\Laravel-9.0-projects\personas-app\resources\views/comunas/edit.blade.php ENDPATH**/ ?>
esto es para agregar un nuevo academico (entro a nueva.php)

<div class="container">
    <form action="<?php echo base_url(); ?>index.php/academico/agregar" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">RUT</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <input type="submit" class="button" value="Agregar">
    </form> 
</div>


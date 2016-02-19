<div class="panel-form">
<div class="box">
  <div class="box-header">
    <div class="pull-left">
      <h4>Nuevo Usuario</h4>  
    </div>
    
    <div class="pull-right">
      
        <a href="<?php echo base_url().$controller.'/show'; ?>" class="btn btn-info">Regresar</a>
    </div>
  </div>
</div>

<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Datos del Usuario</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">  
      <div class="box-body">
        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
          </div>
        </div>
        <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="apellidos" name"apellidos" placeholder="Apellidos">
          </div>
        </div>
        <div class="form-group">
          <label for="dni" class="col-sm-2 control-label">DNI</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="dni" name"dni" placeholder="DNI">
          </div>
        </div>
       
      </div><!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo base_url().$controller.'/show'; ?>" class="btn btn-danger">Regresar</a>
        <button type="submit" class="btn btn-info pull-right">Registrar</button>
      </div><!-- /.box-footer -->
    </form>
</div>

</div>
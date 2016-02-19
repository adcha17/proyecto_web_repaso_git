<?php print_r($items) ?>

<div class="panel-form">
<div class="box">
  <div class="box-header">
    <div class="pull-left">
      <h4>Editar Cliente</h4>  
    </div>
    
    <div class="pull-right">
      
        <a href="<?php echo base_url().$controller.'/show'; ?>" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Regresar</a>
    </div>
  </div>
</div>

<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Datos del Cliente</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="<?php echo base_url().$controller.'/update'; ?>" method="POST">  
      <div class="box-body">
        <div class="form-group">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
          <label for="nombre" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-5">
            <input value="<?php echo set_value('nombre'); ?>" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
              <div class="u-error"><?php echo form_error('nombre'); ?></div>
          </div>
        </div>
        <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-5">
           <input value="<?php echo set_value('apellidos'); ?>" type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
             <div class="u-error"><?php echo form_error('apellidos'); ?></div>
          </div>
        </div>
        <div class="form-group">
          <label for="dni" class="col-sm-2 control-label">DNI</label>
          <div class="col-sm-5">
            <input value="<?php echo set_value('dni'); ?>" type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
             <div class="u-error"><?php echo form_error('dni'); ?></div>
          </div>
        </div>
       
      </div><!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo base_url().$controller.'/show'; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-left" aria-hidden="true"></span>Cancelar</a>
        <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Registrar</button>
      </div><!-- /.box-footer -->
    </form>
</div>

</div>
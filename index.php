<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Tablas  dinamicas con datatable y php
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#modalagregar">
							Agregar nuevo <span class="fas fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By Perez Juarez Cesar Augusto 16106462
					</div>
				</div>
			</div>
		</div>
	</div>

	 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>

<script type="text/Javascript">
  $(document).ready(function(){
    $('#btnnuevo').click(function(){
      datos=$('#formulario').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/agregar.php",
        success:function(r){
          if(r==1){
            $('#formulario')[0].reset();
            $('#tablaCrudLoad').load('Vistas/tablaCrud.php');
            alertify.success("Agregado con exito ");
          }else{
            alertify.error("Fallo al agregar");
          }
        }
      });
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>
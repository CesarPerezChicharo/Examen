
<?php
	require_once "../clases/conexion.php";
	$con = new conectar();
	$conexion = $con->conexion();
	$sql = "SELECT id_videojuego, Nombre, Tipo, Fecha_Lanzamiento, Descripcion FROM t_videojuegos";
	$result = mysqli_query($conexion, $sql);  
?>

<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
	Agregar nuevo <span class="fas fa-plus-circle"></span>
</button>
<hr>
<table class="table table-hover" id="tablaDatos">
	<thead style="background-color: #dc3545;color:white; font-weight: bold;">
		<tr>
			<td>Id persona</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Fecha de Lanzamiento</td>
			<td>Descripción</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody style="background-color: #ccc;color: white; font-weight: bold;">
		<?php 
		while ($mostrar=mysqli_fetch_row($result)) {
			?>
			<tr>
				<td><?php echo $mostrar[0] ?></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td><?php echo $mostrar[4] ?></td>
				<td style="text-align: center">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
						<span class="fas fa-edit"></span>
					</span>
				</td>
				<td style="text-align: center">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-trash"></span>
					</span>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatos').DataTable();

	});

</script>
	<div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>RUT</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $query):?>
					<tr>
						<td><?php echo $query->id_academico; ?>
						<td><?php echo $query->nombre_academico; ?></td>
						<td><?php echo $query->rut_academico; ?></td>
						<td><a class="button tiny round" href="<?php echo base_url(); ?>academico/editar/<?php echo $query->id_academico; ?>">Modificar</a></td>
						<td><a class="button tiny round alert" href="<?php echo base_url(); ?>academico/eliminar/<?php echo $query->id_academico; ?>">Eliminar</a></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
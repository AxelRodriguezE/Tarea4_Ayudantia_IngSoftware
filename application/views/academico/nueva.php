	<div class="row">
		<div class="large-12 columns">
			<form action="<?php echo base_url(); ?>academico/agregar" method="post">
				<div class="row">
					<div class="four columns">
						<label>Nombre</label>
						<input name="nombre_academico" type="text" />
						<label>RUT</label>
						<input name="rut_academico" type="text" />
						<input type="submit" class="button" value="Agregar">
					</div>
				</div>
			</form>
		</div>
	</div>
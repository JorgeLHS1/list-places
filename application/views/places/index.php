<h1><?php echo ($title); ?></h1>

<?php echo validation_errors(); ?>
<?php echo form_open(''); ?>

<label for="text">Query de Consulta</label>
<input type="text" name="query" placeholder="Dentista"/>

<label for="key">API KEY(Google Maps)</label>
<input type="text" name="key" placeholder="" value=""/>

<input type="submit" name="submit" value="Buscar lugares" />
<?php echo form_close(); ?>

<table class="styledTable" cellspacing=0>
	<thead>
		<tr>
			<th>Nome</th>
			<th>ID</th>
			<th>Endereço</th>
			<th>Vila</th>
			<th>Nota</th>
			<th>Avaliações</th>
			<th>Categorias</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$result = json_decode($result, true);
		foreach ($result['results'] as $item) : ?>
			<tr>
				<td><?php echo ($item['name']); ?></td>
				<td><?php echo ($item['place_id']); ?></td>
				<td><?php echo ($item['formatted_address']); ?></td>
				<td><?php echo ($item['plus_code']['compound_code']); ?></td>
				<td><?php echo ($item['rating']); ?></td>
				<td><?php echo ($item['user_ratings_total']); ?></td>
				<td><?php echo (implode(", ", $item['types'])); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

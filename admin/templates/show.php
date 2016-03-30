<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>List of APIs</h2>

			<a href="<?php echo URL; ?>/create" class="btn btn-primary">Add New</a>
<p>&nbsp;</p>
			<table border="1" width="100%" class="methodtable">
				<thead>
					<tr>
						<th width="10%"><legend> Count </legend></th>
						<th width="30%"><legend> Url </legend></th>
						<th width="10%"><legend> Method </legend></th>
						<th width="10%"><legend> Id </legend></th>
						<th width="10%"><legend> Tag </legend></th>
						<th width="30%"><legend> Description </legend></th>
						<th width="10%"><legend> Action </legend></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$index = 1;

					foreach ($allMethods as $method){ ?>

						<tr>
							<td><?php echo $index; $index++ ?></td>
							<td><?php echo $method['route']; ?></td>
							<td><?php echo $method['method']; ?> </td>
							<td><?php echo $method['method_id']; ?> </td>
							<td><?php echo $method['tags']; ?> </td>
							<td><?php echo $method['description']; ?> </td>

							<td>
								<a href="<?php echo URL; ?>/update/editapi/<?php echo $method['method_id']; ?>">Edit</a>
							</td>
						</tr>

					<?php } //End foreach ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
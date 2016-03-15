<h1>Site Settings</h1>

<div class="row">

	<div class="col-md-12">
<?php
		if (isset($message)) {
			echo $message;
		}
?>
			
<?php

$query = "SELECT * FROM settings ORDER BY id ASC";
$result = mysqli_query($dbc, $query);

while ($opened = mysqli_fetch_assoc($result)) {
			?>
			<form class="form-inline" action="index.php?page=users&id=<?php  echo $opened['id']; ?>" method="post" role="form">

				<div class ="form-group">

					<label class="sr-only" for="id">ID:</label>
					<input class="form-control" type="id" name="id" id="id" value="<?php echo $opened['id']; ?>" placeholder="id-name" autocomplete="off">

				</div>

				<div class ="form-group">

					<label class="sr-only" for="label">Label:</label>
					<input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label']; ?>" placeholder="Label" autocomplete="off">

				</div>

				<div class ="form-group">

					<label class="sr-only" for="value">Value:</label>
					<input class="form-control" type="text" name="value" id="value" value="<?php echo $opened['value']; ?>" placeholder="Value" autocomplete="off">

				</div>

				<button type="submit" class="btn btn-warning">Save</button>
				<input type="hidden" name="submitted" value="1">
				
				<input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
				
			</form>

			<?php } ?>

	</div>
	<!-- End of col-md-12 -->

</div>
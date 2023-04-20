<?php
include ('db.php');
if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$query = "SELECT * FROM task WHERE id = $id";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);
		$title = $row['title'];
		$description = $row['description'];
	}
}
if(isset($_POST['update'])){
	$id = $_GET['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Query Failed");
	}
	$_SESSION['message'] = 'Task Updated Successfully';
	$_SESSION['message_type'] = 'warning';
	header("Location: index.php");
}
?>

<?php include ('includes/header.php'); ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group m-2">
						<input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Update Title">
					</div>
					<div class="form-group m-2">
						<textarea name="description" rows="2" class="form-control" placeholder="Update Description"><?php echo $description; ?></textarea>
					</div>
					<div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="update">
								Update
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include ('includes/footer.php'); ?>

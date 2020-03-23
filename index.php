<?php require_once __dir__ . '/header.php'; ?>
<?php 
	if($_SESSION['login'] != true)
		header('location: login.php');
 ?>


<main class="uk-container">
	<table class="uk-table uk-width-expand">
		<thead>
			<tr>
				<th>Filename</th>
				<th>Filesize</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php $files = scandir(__dir__ . '/files');
	foreach ($files as $key => $file):
	 	if($key < 2) continue; ?>
		
		<tr>
			<td><?php echo ucfirst($file); ?></td>
			<td><?php echo round(filesize(__dir__ . '/files/' . $file)/1024, 2); ?> KB</td>
			<td>
				<a href="edit.php?filename=<?=$file;?>" class="uk-button uk-button-primary">Edit</a>
				<a href="delete.php?filename=<?=$file;?>" class="uk-button uk-button-danger">Delete</a>
				<a href="read.php?filename=<?=$file;?>" class="uk-button uk-button-secondary">Read</a>
			</td>
		</tr>

	 <?php	endforeach; ?>
	 </tbody>
	</table>
</main>


<?php //echo basename( __file__); ?>


<?php require_once 'footer.php'; ?>
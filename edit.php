<?php require_once 'header.php'; 

if(isset($_POST['submit'])){
	$filename = $_POST['filename'];
	$contents = $_POST['contents'];
	file_put_contents(__dir__ . '/files/' . $filename, $contents);
	$success = true;
}


$file = $_REQUEST['filename'] ?? $filename ?? false; 

if(file_exists(__dir__ . '/files/' . $file)): ?>

<div class="uk-container uk-margin-top">
	<h2>Edit File</h2>
	<form action="edit.php" method="POST">
<div class="uk-margin">
	<input type="text" class="uk-input" name="filename" value="<?=$file;?>">
</div>

<div class="uk-margin">
	<textarea name="contents" id="" cols="30" rows="10" class="uk-textarea"><?php echo file_get_contents(__dir__ . '/files/' . $file); ?></textarea>
</div>

<div class="uk-margin">
	<?php if(isset($success)): ?>
		<div class="uk-alert uk-alert-success uk-text-center">Changes Saved!</div>
	<?php endif; ?>
	<button class="uk-button uk-button-primary" name="submit">Submit</button>
</div>

</form>
</div>
<?php endif; ?>

<?php require_once 'footer.php'; 
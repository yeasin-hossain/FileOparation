<?php require_once 'header.php'; ?>
<?php 

if(isset($_POST['submit'])){
	$filename = $_POST['filename'];
	$contents = $_POST['contents'];
	file_put_contents(__dir__ . '/files/' . $filename, $contents);
    $success = true;
    header('location: index.php');
}


?>
<div class="uk-container uk-margin-top">
	<h2>New File</h2>
	<form action="new.php" method="POST">
<!-- file name -->
<div class="uk-margin">
	<input type="text" class="uk-input" name="filename" ">
</div>
<!-- file body -->
<div class="uk-margin">
	<textarea name="contents" id="" cols="30" rows="10" class="uk-textarea"></textarea>
</div>



<div class="uk-margin">
    <?php if(isset($success)): ?>
        <div class="uk-alert uk-alert-success uk-text-center">New file Saved!</div>
    <?php endif; ?>
    <button class="uk-button uk-button-primary" name="submit">Submit</button>
</div>

</form>
</div>


<?php require_once 'footer.php'; ?>

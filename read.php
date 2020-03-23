<?php require_once 'header.php'; 

$file = $_REQUEST['filename'] ?? $filename ?? false; ?>


<div class="uk-container uk-margin-top">

        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title"><?=$file;?></h3>
            <p><?php echo file_get_contents(__dir__ . '/files/' . $file); ?></p>
        </div>

</div>

<?php require_once 'footer.php'; ?>
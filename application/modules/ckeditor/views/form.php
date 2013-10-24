<form action="<?php echo base_url(); ?>ckeditor/ckupload/save" method="post">
    <textarea name="content" id="content" class="textarea"><?php echo $content_html; ?></textarea>
    <?php echo display_ckeditor($ckeditor); ?>
 
    <input type="submit" value="Save" />
</form>
<fileupload class="fileupload fileupload-new"  data-url="<?php echo URL::base('') ?>" data-bucket="<?php echo $self['bucket'] ?>">
    <div class="input-group">
        <div class="form-control uneditable-input input-fixed" >
            <i class="fa fa-file fileinput-exists"></i>&nbsp;
            <span class="fileupload-filename"> </span>
            <?php if(count($value) > 0): ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" value='<?php echo json_encode($value) ?>'/>
            <?php else : ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" />
            <?php endif; ?>
        </div>
        <span class="input-group-addon btn default btn-file">
            <span class="fileupload-new"> Select file </span>
            <span class="fileupload-exists"> Change </span>
            <input type="file"> </span>
        <a href="javascript:;" class="input-upload-addon btn red fileupload-exists" data-dismiss="fileinput"> Remove </a>
    </div>
</fileupload>
 <thumbnail class="thumbnailreference filethumbnail filethumbnail-new" data-provides="filethumbnail" style="width: 100%" data-url="<?php echo URL::base('') ?>" data-bucket="<?php echo $self['bucket'] ?>" >
    <div class="filethumbnail-preview thumbnail" data-trigger="filethumbnail" style="width: 100%; height: 150px; max-width: 180px"> </div>
    <div>
        <span class="btn red btn-outline btn-file">
            <span class="filethumbnail-new"> Select image </span>
            <span class="filethumbnail-exists"> Change </span>
            <input type="file" class="file-upload"> 
            <?php if(count($value) > 0): ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" value='<?php echo json_encode($value) ?>'/>
            <?php else : ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" />
            <?php endif; ?>
        </span>
        <a href="javascript:;" class="btn red filethumbnail-exists" data-dismiss="filethumbnail"> Remove </a>
    </div>
</thumbnail>

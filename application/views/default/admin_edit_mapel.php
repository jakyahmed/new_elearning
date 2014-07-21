
<form class="form-horizontal row-fluid" method="post" action="{site_url}/admin/mapel/edit/<?php echo $mapel['id']; ?>">
    <div class="control-group">
        <label class="control-label">Nama <span class="text-error">*</span></label>
        <div class="controls">
            <input type="text" name="nama" class="span8" value="<?php echo set_value('nama', $mapel['nama']); ?>">
            <br><?php echo form_error('nama'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Deskripsi</label>
        <div class="controls">
            <textarea name="info" id="info" style="height:400px;"><?php echo set_value('info', $mapel['info']); ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Status</label>
        <div class="controls">
            <label class="checkbox inline">
                <input type="checkbox" value="1" name="status" <?php echo set_checkbox('status', '1', ($mapel['aktif'] == 1) ? TRUE : FALSE); ?>>
                Aktif
            </label>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-primary">Update</button> 
            <a href="{site_url}/admin/mapel" class="btn">Batal</a>
        </div>
    </div>
</form>
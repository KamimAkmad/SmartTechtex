
<h5 class="ath-heading title contentTitle">Update Article</h5>
<form method="post" id="posting-update" action="<?=base_url();?>update">
    <div class="field-item">
        <label class="field-label">Title</label>
        <div class="field-wrap">
            <input name="titleUpdate" type="text" class="input-bordered" placeholder="Title Article" value="<?=$article->title_posting;?>">
        </div>
    </div>
    <div class="field-item">
        <label class="field-label">Description</label>
        <div class="field-wrap">
            <textarea name="deskripsiUpdate" class="input-bordered input-textarea" placeholder="Fill your Description"><?=$article->description;?></textarea>
        </div>
    </div>
    <div class="field-item">
        <label class="field-label">Posting Type</label>
        <div class="field-wrap">
            <select name="typeUpdate" id="typeUpdate<?=$this->uri->segment(2);?>" class="select selectUpdate" data-select2-theme="bordered" >
                <option value="">Select Type</option>
                <?php
                    $types = $type->post_type;
                    foreach($post_type->result() as $type){
                        if($types == $type->id_postType){
                ?>
                            <option value="<?= $type->id_postType?>" selected><?= $type->jenis_postType?></option>
                <?php
                        }else{
                ?>
                            <option value="<?= $type->id_postType?>"><?= $type->jenis_postType?></option>
                <?php
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="field-item">
        <label class="field-label">Created:</label>
        <span class="badge badge-xs badge-hot"><?=$session['name'];?></span>
    </div>
    <div class="field-item"  style="float:right;">
    <button type="reset" class="reset btn btn-primary btn-outline"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
    <button type="submit" dataid="<?=$this->uri->segment(2);?>" class="btnUpdate btn btn-grad">Save</button>
    </div>
</form>
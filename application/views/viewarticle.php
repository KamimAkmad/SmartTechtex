
<h5 class="ath-heading title contentTitle">View Article<small class="tc-default"><?=$article->jenis_postType;?></small></h5>
        <div class="field-item">
            <label class="field-label">Title</label>
            <div class="field-wrap">
                <input name="titleCreate" type="text" class="input-bordered" placeholder="Title Article" value="<?=$article->title_posting;?>" readonly>
            </div>
        </div>
        <div class="field-item">
            <label class="field-label">Description</label>
            <div class="field-wrap">
                <textarea name="deskripsiCreate" class="input-bordered input-textarea" readonly><?=$article->description;?></textarea>
            </div>
        </div>
        <div class="field-item">
            <label class="field-label">Created:</label>
            <span class="badge badge-xs badge-info"><?=$article->fullName;?></span>
            <?php
            if($article->updateName != null)
            {
            ?>
                    <br><label class="field-label">Updated:</label>
                    <span class="badge badge-xs badge-hot"><?=$article->updateName;?></span>
            <?php
            }
            ?>
        </div>
        <div class="field-item"  style="float:right;">
        <button type="button" class="btn btn-primary btn-outline"data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
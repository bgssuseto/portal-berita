<?php $this->view('admin-templates/header') ?>

<?php $this->view('admin-templates/sidebar') ?>

<?php $this->view('admin-templates/topbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data Artikel</h1>
    </div>

    <!-- Content Row -->
    <!-- content update artikel-->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php foreach ($artikel as $a) : ?>
                <form method="post" action="<?= base_url('admin/update_artikel_act') ?>" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label for="tgl">Tanggal :</label>
                        <input type="hidden" name="id" value="<?= $a->id ?>">
                        <input type="date" class="form-control" name="tgl" value="<?= $a->tanggal ?>">
                        <?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Artikel :</label>
                        <input type="text" class="form-control" name="judul" value="<?= $a->judul_artikel ?>" required>
                        <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Iframe Embed Video :</label>
                        <textarea name="video" id="video" class="form-control" cols="30" rows="10" required><?= $a->video ?></textarea>
                        <?= form_error('video', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Author :</label>
                        <input type="text" class="form-control" name="author" value="<?= $a->author ?>" required>
                        <?= form_error('author', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Tag :</label>
                        <input type="text" class="form-control" name="tag" value="<?= $a->tag ?>" required>
                        <?= form_error('tag', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <textarea cols="80" name="deskripsi" id="editor1" name="editor1" rows=" 10" data-sample-short><?= htmlspecialchars_decode($a->deskripsi) ?></textarea>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group ">
                        <label for="customFile">Pilih Gambar :</label>
                        <div class="mb-3 col-12">
                            <img src="<?= base_url('assets/img/artikel/') . $a->image ?>" class="imgPreview">
                        </div>
                        <input type="hidden" name="old_image" value="<?= $a->image ?>">
                        <input type="file" name="image" class="form-control" id="image" />
                        <p class="text-small text-primary mt-1">Gambar max 2MB</p>
                        <?= form_error('image', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?= base_url('admin/artikel') ?>" class="btn btn-outline-danger ml-3">Cancel</a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end of content tambah artikel -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $this->view('admin-templates/footer') ?>
<script>
    CKEDITOR.addCss('.cke_editable { font-size: 15px; padding: 2em; }');

    CKEDITOR.replace('editor1', {
        toolbar: [{
                name: 'document',
                items: ['Print']
            },
            {
                name: 'clipboard',
                items: ['Undo', 'Redo']
            },
            {
                name: 'styles',
                items: ['Format', 'Font', 'FontSize']
            },
            {
                name: 'colors',
                items: ['TextColor', 'BGColor']
            },
            {
                name: 'align',
                items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
            },
            '/',
            {
                name: 'basicstyles',
                items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
            },
            {
                name: 'links',
                items: ['Link', 'Unlink']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
            },
            {
                name: 'insert',
                items: ['Image', 'Table']
            },
            {
                name: 'tools',
                items: ['Maximize']
            },
            {
                name: 'editing',
                items: ['Scayt']
            }
        ],

        extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

        // Adding drag and drop image upload.
        extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
        uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',



        height: 560,

        removeDialogTabs: 'image:advanced;link:advanced'
    });
    var editor = CKEDITOR.replace('ckfinder');
    CKFinder.setupCKEditor(editor);
</script>
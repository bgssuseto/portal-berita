<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4" style="font-style: oblique;">Menampilkan Berdasarkan Tag : </div>
                </div>
                <?php foreach ($artikel as $row) : ?>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="<?= base_url('assets/img/artikel/') . $row['image'] ?>" alt="" /></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="<?= base_url('Blog/artikel/') . $row['id'] ?>" class="fh5co_magna py-2"> <?= $row['judul_artikel'] ?> </a>

                            <div class="fh5co_consectetur"> <?= htmlspecialchars_decode(character_limiter($row['deskripsi'], 350)); ?>
                            </div>
                            <p style="font-style: oblique; text-color:grey; font-size:12px;">Author : <?= $row['author'] ?> &nbsp; <i class="fas fa-clock"></i> <?= $row['tanggal'] ?></p>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class=" col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php foreach ($artikel as $row) : ?>
                        <a href="<?= base_url('Blog/tag/') . $row['tag'] ?>" class="fh5co_tagg"><?= $row['tag'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Berita Populer</div>
                </div>
                <?php foreach ($artikel as $row) : ?>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <a href="<?= base_url('Blog/artikel/') . $row['id'] ?>"><img src="<?= base_url('assets/img/artikel/') . $row['image'] ?>" alt="img" class="fh5co_most_trading"></a>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font" style="text-decoration:none;"> <a href="<?= base_url('Blog/artikel/') . $row['id'] ?>"><?= character_limiter($row['judul_artikel'], 30) ?></a></div>
                            <div class="most_fh5co_treding_font_123">
                                <p style="font-style: oblique; text-color:grey; font-size:12px;">Author : <?= $row['author'] ?> &nbsp; <i class="fas fa-clock"></i> <?= $row['tanggal'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
            </div>
        </div>
    </div>
</div>
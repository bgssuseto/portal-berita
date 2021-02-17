<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div class="container" style="margin-bottom: 20px;">
                    <iframe width="560" height="315" src="<?= $artikel['video']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h2 style="text-align:center; margin-bottom:10px;"><?= $artikel['judul_artikel']; ?></h2>
                <?= htmlspecialchars_decode($artikel['deskripsi']); ?>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <?php foreach ($attr as $row) : ?>
                    <a href="<?= base_url('Blog/tag/') . $row['tag'] ?>" class="fh5co_tagg"><?= $row['tag'] ?></a>
                <?php endforeach; ?>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Berita Populer</div>
                </div>
                <?php foreach ($attr as $row) : ?>
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
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php foreach ($attr as $row) : ?>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="<?= base_url('assets/img/artikel/') . $row['image'] ?>" alt="" /></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class=""><?= $row['judul_artikel'] ?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Author : <?= $row['author'] ?> &nbsp; <i class="fas fa-clock"></i> <?= $row['tanggal'] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
        $(window).stellar();
    }
</script>
<div class="container-fluid fh5co_video_news_bg pb-4">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Sedang Hangat</div>
		</div>
		<div>
			<div class="owl-carousel owl-theme" id="slider3">
				<?php foreach ($artikel as $row) : ?>
					<div class="item px-2">
						<div class="fh5co_hover_news_img">
							<div class="fh5co_hover_news_img_video_tag_position_relative">
								<div class="fh5co_news_img">
									<iframe id="video" width="100%" height="200" src="<?= $row['video'] ?>" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
									<img src="images/ariel-lustre-208615.jpg" alt="" />
								</div>
								<div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
									<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
										<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
											<span><i class="fa fa-play"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="pt-2">
								<a href="<?= base_url('Blog/artikel/') . $row['id'] ?>" style="text-decoration: none;">
									<span class=""><?= $row['judul_artikel'] ?></span></a>
								<div class=" c_g" style="font-style: oblique; font-size:13px;">Author : <?= $row['author'] ?>&nbsp; <i class="fa fa-clock"></i> <?= $row['tanggal'] ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
	<div class="container paddding">
		<div class="row mx-0">
			<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Video Storytelling</div>
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

							<div class="fh5co_consectetur" style=""> <?= htmlspecialchars_decode(character_limiter($row['deskripsi'], 350)); ?>
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
<div class="container-fluid pt-3">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
		</div>
		<div class="owl-carousel owl-theme js" id="slider1">
			<?php foreach ($artikel as $row) : ?>
				<div class="item px-2">
					<div class="fh5co_latest_trading_img_position_relative">
						<div class="fh5co_latest_trading_img"><img src="<?= base_url('assets/img/artikel/') . $row['image'] ?>" alt="" class="fh5co_img_special_relative"></div>
						<div class="fh5co_latest_trading_img_position_absolute"></div>
						<div class="fh5co_latest_trading_img_position_absolute_1">
							<a href="single.html" class="text-white"> <?= $row['judul_artikel'] ?></a>
							<div class="fh5co_latest_trading_date_and_name_color"> Fatimatul Zahro <?= $row['tanggal'] ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="container-fluid fh5co_video_news_bg pb-4">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
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
								<div class=" c_g"><i class="fa fa-clock-o"></i> Oct 16,2017
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
					<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
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
							<a href="single.html" class="fh5co_mini_time py-3"><?= $row['author'] ?> </a>
							<div class="fh5co_consectetur"> <?= htmlspecialchars_decode(character_limiter($row['deskripsi'], 350)); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
				</div>
				<div class="clearfix"></div>
				<div class="fh5co_tags_all">
					<a href="#" class="fh5co_tagg">Business</a>
					<a href="#" class="fh5co_tagg">Technology</a>
					<a href="#" class="fh5co_tagg">Sport</a>
					<a href="#" class="fh5co_tagg">Art</a>
					<a href="#" class="fh5co_tagg">Lifestyle</a>
					<a href="#" class="fh5co_tagg">Three</a>
					<a href="#" class="fh5co_tagg">Photography</a>
					<a href="#" class="fh5co_tagg">Lifestyle</a>
					<a href="#" class="fh5co_tagg">Art</a>
					<a href="#" class="fh5co_tagg">Education</a>
					<a href="#" class="fh5co_tagg">Social</a>
					<a href="#" class="fh5co_tagg">Three</a>
				</div>
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="images/download (1).jpg" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 18, 2016</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
						<div class="most_fh5co_treding_font_123"> April 18, 2016</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="images/download (2).jpg" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 18, 2016</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img" class="fh5co_most_trading" /></div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 18, 2016</div>
					</div>
				</div>
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
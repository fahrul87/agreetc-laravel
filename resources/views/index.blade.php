
@extends('layouts.app')
@section('content')

	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="agileits-about-grids">
				<div class="col-md-4 agileinfo-about-left">
					<div class="about-left-img">
						
					</div>
				</div>
				<div class="col-md-8 wthree-about-right">
					<div class="about-right-info">
						<h2>About Us</h2>
						<div class="border"> </div>
					</div>
					<div class="about-slider">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider4">
									<li>
										<div class="w3ls-text">
											<p style="text-align:justify;">
												<b>Nama Lembaga</b> <br>
											Lembaga ini bernama Agriculture Training and Consulting disingkat AgriTC (dibaca: ᴂgritisi).</p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<p style="text-align:justify;">
											<b>Tujuan Pendirian</b> <br>
										Lembaga ini didirikan dengan tujuan ikut berperan memajukan sektor pertanian dalam arti luas dengan penekanan pada pengembangan sumber daya manusia bidang pertanian melalui pendampingan masyarakat khususnya di pedesaan. </p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<p style="text-align:justify;"><b>Visi:</b> <br>
												“Menjadi lembaga terdepan dan handal dalam bidang pelatihan dan konsultasi pertanian serta menjadi mitra semua pihak dalam memperkuat sektor pertanian menuju terwujudnya pertanian tangguh.”
												</p>


												<p style="text-align:justify;"><b>Misi:</b> <br>
													
												1.	Mengembangkan sumber daya manusia di bidang pertanian melalui layanan pelatihan (training) dan layanan informasi dan penyuluhan (consulting) serta pendampingan.<br>
												2.	Membangun pusat informasi (data base) untuk memperkuat kapasitas internal sebagai sebuah lembaga pelatihan dan konsultasi serta.<br>
												3.	Membangun sinergi dan jalinan kerja sama yang kuat dengan berbagai pihak dalam mewujudkan tujuan lembaga.<br>
												4.	Memberikan advokasi terhadap hal – hal yang merugikan dan melanggar hak – hak serta kepentingan para petani berdasarkan undang – undang dan peraturan hukum yang berlaku.<br>

												</p>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="services-heading">
				<h3>Activity</h3>
				<div class="border border1"> </div>
			</div>
			<div class="w3-agileits-services-grids">
				<div class="col-md-6 agile-services-left">
					<div class="agile-services-left-grid">
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Pelatihan </h4>
							</div>
						</div>
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-magnet" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Penyuluhan </h4>
							</div>
						</div>
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Research</h4>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agile-services-left-grid">
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Pusat Data</h4>
							</div>
						</div>
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-paw" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Kerja Sama</h4>
							</div>
						</div>
						<div class="col-md-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-envira" aria-hidden="true"></i>
							</div>
							<div class="services-icon-text">
								<h4>Permodalan</h4>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3-agile-services-right">
					<h5 style="text-align:justify;">Agreemitra adalah program pendampingan usaha tani yang merupakan kesepakatan multi pihak untuk membatu para petani dalam memperoleh berbagai kebutuhan usaha tani dimulai dari proses olah tanah, penyediaan sarana  produksi, penanaman, pemeliharaan, panen, pasca panen hingga pemasaran hasil panen. Melalui program ini diharapkan bahwa setiap petani memperoleh kesempatan yang sama untuk melakukan usaha budidaya pertanian, memperoleh pendampingan, menghasilkan pendapatan dan tentu saja merasakan peningkatan kesejahteraan.</h5>
					<p style="text-align:justify;">Program ini digagas sebagai upaya memberikan solusi atas realita di lapangan bahwa meskipun telah banyak kegiatan atau bantuan yang dihajatkan untuk membantu para petani namun tidak sedikit dari petani yang belum dapat mengakses bantuan dimaksud. Begitu pula, masih banyak petani yang kesulitan dalam memasarkan hasil panen atau terpaksa harus menjual produksinya dengan harga yang rendah. Pada saat yang sama, di sisi yang lain terdapat pihak pembeli yang bergerilya membeli barang dan tetap kesulitan memperoleh pasokan. Atas dasar kondisi inilah AgriTC menggagas program AgreeMitra sebagi jembatan (bridging program) yang akan mempertemukan berbagai kepentingan tersebut.</p>

					<br>

					<center><img src="images/AgrimitraLogo.png" alt="Italian Trulli"></center>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<div class="works" id="news">
		<div class="container">
			<div class="services-heading">
				<h3>News</h3>
				<div class="border border2"> </div>
			</div>
			<div class="contact" id="contact">
				
			</div>
			{{-- <div class="gallery-grids">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/8.jpg" alt="" />
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 gallery-grids-left-subl">
							<div class="gallery-grid"><a class="example-image-link" href="images/14.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/14.jpg" alt="" />
							</a>
						</div>
						<div class="gallery-grid gallery-grid-sub">
							<a class="example-image-link" href="images/11.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/11.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-left-subr">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/12.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/12.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 gallery-grids-left">
				<div class="col-md-6 gallery-grids-right">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/10.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/10.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-right">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/9.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="gallery-grids-right1">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/13.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/13.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-right">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/15.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/15.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-right">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/16.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/16.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>  --}}
	</div>
</div>
	<!-- works -->
	<div class="works" id="works">
		<div class="container">
			<div class="services-heading">
				<h3>Our Works</h3>
				<div class="border border2"> </div>
			</div>
			<div class="gallery-grids">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/8.jpg" alt="" />
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 gallery-grids-left-subl">
							<div class="gallery-grid"><a class="example-image-link" href="images/14.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/14.jpg" alt="" />
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub">
								<a class="example-image-link" href="images/11.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/11.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-6 gallery-grids-left-subr">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/12.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/12.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-left">
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/10.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/10.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/9.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/13.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/13.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/15.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/15.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/16.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/16.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //works -->
	<!-- testimonial -->
	<div class="testimonial">
		<div class="container">
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Agriculture, manufactures, commerce and navigation, the four pillars of our prosperity, are the most thriving when left most free to individual enterprise..</p>
											<h5>Muhammad Munir, SP <span>- Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Earth is here so kind, that just tickle her with a hoe and she laughs with a harvest.</p>
											<h5>Lalu Muhammad Zarwazi, SP., M.Sc. <span>- CO Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Agriculture is the foundation of manufactures, since the productions of nature are the materials of art.</p>
											<h5>Liana Suryaningsih, B., SP., M.Sc. <span>- CO Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Karna kita banyak anggota yaa kannn..,   dan kita banyak berbagai pihakkk yaaa kaannnn..</p>
											<h5>Alm. Syamsul Hadi, AMD, SPK, ODA <span>- influencer</span></h5>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="services-heading">
				<h3>Our Team</h3>
				<div class="border border2"> </div>
			</div>
			<div class="team-grids">
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/pakmunir.jpeg" alt="" width="425" height="380">
					<div class="captn">
						<h4>Muhammad Munir, SP.</h4>
						<p>CEO & Founder </p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/paklalu.jpg" alt="" width="425" height="380">
					<div class="captn">
						<h4>Lalu Muhammad Zarwazi, SP., M.Sc.</h4>
						<p>CO Founder</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/buliana.jpg" alt="" width="425" height="380">
					<div class="captn">
						<h4>Liana Suryaningsih, B., SP., M.Sc.</h4>
						<p>CO Founder</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/syamsul.jpg" alt="" width="425" height="380">
					<div class="captn">
						<h4>Alm. Syamsul Hadi AMD, INTEL, ADO</h4>
						<p>Motivator & Influencer</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- map -->
	{{-- <div class="map-grid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen></iframe>
	</div> --}}
	<!-- //map -->
	<!-- contact -->
	@endsection
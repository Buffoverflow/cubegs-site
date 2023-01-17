<? 
	$gameName = "Dash of the Dead";
	$pageTitle = "CubeGS | Team Portfolio | $gameName";

	$albumPhotosPath = "img/albums/album_dotd/";

	$albumFiles = array_values(array_diff(scandir(realpath($albumPhotosPath)), array('.', '..')));

	include("includes/header.php");
?>
	<!-- Page Background -->
	<div class="anita-page-background-wrap">
        <div class="anita-page-background is-video" data-src="video/albums/album_dotd_02.mp4" data-opacity="0.05"></div>
    </div>

    <!-- Page Main -->
    <main class="anita-main">

        <!-- Page Container -->
		<div class="anita-container">

            <!-- Page Title -->
            <section class="anita-section">
                <div class="anita-album-title">
                    <div class="anita-albums-back-wrap" data-aos="fade-up">
                        <a href="#" class="anita-albums-back">Back to Listing</a>
                    </div>
                    <h1 class="anita-page-title" data-aos="fade-up" data-aos-delay="50"><?= $gameName ?></h1>
                    <div class="anita-post-meta anita-meta" data-aos="fade-up" data-aos-delay="100">
                        <span><?= $gameName ?></span>
                        <span><?= count($albumFiles) ?> Photos</span>
                    </div>
                </div><!-- .anita-album-title -->
                <div class="anita-page-intro anita-offset-left--33 anita-offset--tablet-left--25" data-aos="fade-up" data-aos-delay="150">
                    <p>Dash of the Dead is a play to earn game already released and with a solid community. The game was released for WebGL, Android and iOS platforms. The Cube Game Studio team worked in partnership with the Digital Fusion and the Doge Dash team. The Cube Game Studio was responsible for all game developing process, that includes: Game Architecture, Complete game programming, 3D models and animations adjustments and optimizations, Back-end services using AWS Lambda and Blockchain contracts integration.
					</p>
					
					<p>The full game version is not public yet, but the demo version can be played here: <a href="https://www.hello.one/arcade/dashofthedead" target="_blank">www.hello.one/arcade/dashofthedead</a>
                </div>
            </section>
			
            <!-- Page Content -->
            <section class="anita-section">
                <div class="anita-grid-gallery anita-grid--3cols anita-zoom-hover anita-item-zoom-hover anita-item-fade-hover">
<?	
	for($i = 0; $i < count($albumFiles); $i++)
	{
		$albumFile = $albumFiles[$i];
?>
                    <!-- Gallery Item -->
                    <div class="anita-grid-gallery-item" data-aos="fade-up" data-aos-delay="<?= (($i % 3) + 1) * 100 ?>">
                        <div class="anita-grid-item__inner">
                            <div class="anita-grid-item__image">
                                <img src="<?= $albumPhotosPath . $albumFile ?>" class="anita-lazy" data-src="<?= $albumPhotosPath . $albumFile ?>" alt="Photo" width="1920" height="1080">
                            </div>
                            <a href="<?= $albumPhotosPath . $albumFile ?>" class="anita-lightbox-link" data-size="1920x1080"></a>
                        </div>
                    </div>
<?
	}
?>
                </div><!-- .anita-works-grid -->
			</section>

            <!-- Next Album Link -->
            <section class="anita-section">
                <div class="anita-next-album-wrap">
                    <div class="anita-next-album-title">
                        <h4 data-aos="fade-up" data-aos-offset="20">
                            Next Game
                        </h4>
                        <a href="album-psg.html" class="anita-underline anita-caption" data-aos="fade-up" data-aos-delay="50" data-aos-offset="20">
                            PSG Football Freestyle
                        </a>
                        <div class="anita-page-background" data-src="img/albums/covers_512/album_psg.jpg"></div>
                    </div>
                </div><!-- .anita-next-album-wrap -->
            </section>
		</div><!-- .anita-container -->
	</main>

<? include("includes/footer.php") ?>
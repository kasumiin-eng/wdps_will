<?php

/*
Googleフォント設定
*/

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		get_stylesheet(),
		get_stylesheet_uri(),
		[ get_template() ]
	);
} );

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		get_stylesheet(),
		get_stylesheet_uri(),
		[get_template()]
	);

	/* 読み込みファイル */
	/* ここにswiper.css */
	/* swiper.css読み込み */
	wp_enqueue_style(
		'swiper_css',
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css'
	  );




	wp_enqueue_style('child_styles', get_stylesheet_directory_uri() . '/styles/style.css');


	/* ここにswiper.js */
	/* swiper.js読み込み */
	wp_enqueue_script(
		'swiper_js',
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'
	  );



	
	/* main.js読み込み */
	wp_enqueue_script(
		get_stylesheet(),
		get_theme_file_uri('/scripts/main.js'),
		[get_template()],
		false,
		true
	);
});

/* メインコンテンツの上部にHTMLの挿入 */
add_action(
	'snow_monkey_prepend_main',
	function () {
		/* if文でフロントページのみに適応 */
		if (is_front_page()) {

			
add_action(
	'snow_monkey_prepend_entry_content',
	function() {
		?>
		<a class="c-btn c-btn--block c-blinking" href="<?php echo esc_url( home_url( '/snow_monkey_prepend_entry_content' ) ); ?>" role="button">ここをカスタマイズする</a>
		<?php
	}
);
			
?>

<div class="hero">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="hero__title">
          <h2><span>住宅のプロが提案する新しい価値と新しい住宅</span><span>あなただけの住宅を私たちは創造します</span></h2>
        </div>
        <div class="hero__btn"><a href="#"><span>会社案内</span></a></div>
        <img src="http://localhost/wp-content/uploads/2021/04/adpDSC_6393-scaled.jpg" alt="" class="main-visual" />
      </div>
      <div class="swiper-slide">
        <div class="hero__title">
          <h2><span>住宅のプロが提案する新しい価値と新しい住宅</span><span>あなただけの住宅を私たちは創造します</span></h2>
        </div>
        <div class="hero__btn"><a href="#"><span>実績紹介</span></a></div>
        <img src="http://localhost/wp-content/uploads/2021/04/freehairsalon.jpg" alt="" class="main-visual" />
      </div>
      <div class="swiper-slide">
        <div class="hero__title">
          <h2><span>住宅のプロが提案する新しい価値と新しい住宅</span><span>あなただけの住宅を私たちは創造します</span></h2>
        </div>
        <div class="hero__btn"><a href="#"><span>事業案内</span></a></div>
        <img src="http://localhost/wp-content/uploads/2021/04/freehairsalon2.jpg" alt="" class="main-visual" />
      </div>
    </div>
  </div>
</div>

<?php
		}

	}
);
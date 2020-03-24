<?php
/**
 * Template Name: Rich Front Page
 *
 * Version      : 1.0.0
 * Author       : inc2734
 * Author URI   : http://2inc.org
 * Created      : August 15, 2015
 * Modified     :
 * License      : GPLv2 or later
 * License URI  : license.txt
 */
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<main id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( array( 'article', 'article--page' ) ); ?>>
				<?php get_template_part( 'modules/slider' ); ?>

				<div class="entry">
					<?php Habakiri::the_title(); ?>
					<?php do_action( 'habakiri_before_entry_content' ); ?>
					<div class="entry__content">
						<?php the_content(); ?>
					<!-- end .entry__content --></div>
					<?php do_action( 'habakiri_after_entry_content' ); ?>
				<!-- end .entry --></div>

<!-- ここから：HTML 追加（3カラムのページリンク）-->
                <div class="container">
                    <div class="row pagelink-wrapper">

                        <div class="col-md-4">
                            <div class="pagelink pagelink-left">
                                <h3>こんな人</h3>
                                <p>イダカナミの自己紹介ページ</p>
                                <div class="btn-wrapper">
                                    <a href="<?php echo get_page_link( 40 ); ?>" class="go-btn">Go &raquo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="pagelink pagelink-center">
                                <h3>勉強のこと</h3>
                                <p>いま勉強中のこと、<br>これから勉強予定のことについて</p>
                                <div class="btn-wrapper">
                                    <a href="<?php echo get_page_link( 42 ); ?>" class="go-btn">Go &raquo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="pagelink pagelink-right">
                                <h3>作品の紹介</h3>
                                <p>今までに撮ったり、<br>描いたり、作ったもの</p>
                                <div class="btn-wrapper">
                                    <a href="<?php echo get_page_link( 51 ); ?>" class="go-btn">Go &raquo</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
<!-- 終了：HTML追加（3カラムのページリンク）-->


			</article>
			<?php endwhile; ?>

		<!-- end #main --></main>
	<!-- end .row --></div>
<!-- end .container-fluid --></div>

<?php get_footer(); ?>

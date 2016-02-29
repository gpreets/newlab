<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newlab
 */

    /**
     * Social profile glyphs.
     */
    $glyphs = array(
      'bloglovin'   => '&#xe80f;',
      'dribbble'    => '&#xe800;',
      'email'     => '&#xe80b;',
      'facebook'    => '&#xe802;',
      'flickr'    => '&#xe80a;',
      'github'    => '&#xe80c;',
      'gplus'     => '&#xe801;',
      'instagram'   => '&#xe809;',
      'linkedin'    => '&#xe806;',
      'pinterest'   => '&#xe803;',
      'rss'     => '&#xe805;',
      'stumbleupon' => '&#xe808;',
      'tumblr'    => '&#xe807;',
      'twitter'   => '&#xe80d;',
      'vimeo'     => '&#xe80e;',
      'youtube'   => '&#xe804;',
    ) ;

?>

<div class="footer-top container-fluid section">
  <div class="sec-details text-over-img white">
    <h3>CREATIVE PROCESS STARTS</h3>
    <a class="btn btn-primary-outline" href="#">HERE</a>
  </div>
  <span><img alt="" src="/newlab/wp-content/themes/newlab/images/bg-footer-top.png"></span>
</div>

<footer class="container-fluid global-footer">
  <div class="col-md-6">
    <div class="footer-logo">
      <?php add_logo_svg(array(
          'textcolor' => '#fff',
          'labcolor' => '#000',
          'bgcolor' => '#fff',
        )
      ); ?>
    </div>
    <div class="copyright">
      <p>Copyright <?php echo date('Y'); ?> 1337 LAB a proud laboratory for ideas in the heart of New York city</p>
      <p>244 Fifth Ave, 10001 <span>(209) 691-3379</span><br>hello@1337lab.io</p>
    </div>
  </div>

  <div class="footer-social col-md-6">
      <ul class="list-inline">
        <li class="social-facebook fontello"><a href="https://www.facebook.com/pages/1337lab/884369791601922?ref=hl" target="_blank"><?php echo $glyphs['facebook']; ?></a></li>
        <li class="social-gplus fontello"><a href="https://plus.google.com/u/1/111209695353563384227/posts" target="_blank" class="fontello"><?php echo $glyphs['gplus']; ?></a></li>
        <li class="social-instagram fontello"><a href="http://www.instagram.com" target="_blank"></a></li>
        <li class="social-linkedin fontello"><a href="https://www.linkedin.com/pub/chet-dav/b8/829/357" target="_blank"></a></li>
        <li class="social-pinterest fontello"><a href="https://www.pinterest.com/cdavdra/" target="_blank"></a></li>
        <li class="social-twitter fontello"><a href="https://twitter.com/the1337team" target="_blank"></a></li>
        <li class="social-youtube fontello"><a href="https://www.youtube.com/channel/UC_4OmTv-SwdBSLBo7s5XMmQ" target="_blank"></a></li>
      </ul>
  </div>
</footer>
<?php wp_footer(); ?>

</div> <!-- outer-container form header.php -->


<script type="text/javascript">
jQuery( document ).ready(function() {
    jQuery(".navtoggle").on('click', function(){
      jQuery('body').toggleClass("nav-open");
    });
});
</script>

</body>
</html>

<?php
/**
 * Template part for displaying sharing buttons after posts and stories
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marta_Lynx
 */

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!--

<div class="fb-share-button" data-href="http://martalynx.com" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmartalynx.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
-->



<?php 
$page_url = get_permalink();

?>



<div class="share-buttons">

<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url ?>"  target='_blank'><?php echo martalynx_get_svg(array('icon' => 'facebook', 'fallback' => true)); ?> </a>
<a href="http://twitter.com/share?text=Check out this  &url=<?php echo $page_url ?>&hashtags=mustread,romance,erotica,freebook,romancewriter" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'twitter', 'fallback' => true));?> </a>

<a href="https://plus.google.com/share?url=<?php echo $page_url ?>" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'google-plus', 'fallback' => true));?> </a>
<a href="https://www.tumblr.com/share" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'tumblr', 'fallback' => true));?> </a>

<a  href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo $page_url; ?>"
   title="Share by Email" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'mail4', 'fallback' => true));?> </a>
<a href="whatsapp://send?text=check out this page!                          <?php echo $page_url ?>" data-action="share/whatsapp/share" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'whatsapp', 'fallback' => true));?> </a>





</div>


<!--<div class="fb-share-button" data-href="https://martalynx.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmartalynx.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>-->

<!---------------facebook iframe------------------------------------->




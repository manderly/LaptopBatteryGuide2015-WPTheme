<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

genesis_structural_wrap( 'site-inner', 'close' );
echo '</div>'; //* end .site-inner or #inner

do_action( 'genesis_before_footer' );
do_action( 'genesis_footer' );
do_action( 'genesis_after_footer' );

echo '</div>'; //* end .site-container or #wrap

do_action( 'genesis_after' );
wp_footer(); //* we need this for plugins
?>

<script type="text/javascript">
  amzn_assoc_ad_type = "link_enhancement_widget";
  amzn_assoc_tracking_id = "lbgx-20";
  amzn_assoc_linkid = "3QSI7W4G3FOL2KSN";
  amzn_assoc_placement = "";
  amzn_assoc_marketplace = "amazon";
  amzn_assoc_region = "US";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=US"></script>

</body>
</html>

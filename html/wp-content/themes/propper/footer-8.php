<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propper
 */

?>

</div>
<?php 

$map_lat = propper_return_theme_option( 'map_lat');
$map_long = propper_return_theme_option( 'map_long');
$map_theme = propper_return_theme_option( 'map_theme');

wp_footer(); 

?>

<script type="text/javascript">
    var latitude = <?php echo $map_lat ?>;
    var longitude = <?php echo $map_long ?>;
    var markerImage = "<?php echo get_template_directory_uri();?>/images/map-marker-w.png";
     var mapTheme = "<?php echo $map_theme ?>";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme));
</script>
</body>

</html>

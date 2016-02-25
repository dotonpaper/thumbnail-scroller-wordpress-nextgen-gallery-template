<?php
/*
* Title                   : Thumbnail Scroller (WP NextGEN Gallery Template)
* Version                 : 1.3
* File                    : gallery-dop-thumbnail-scroller.js
* File Version            : 1.2
* Created / Last Modified : 05 May 2013
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : NextGen Gallery Template.
*/

    if (!defined ('ABSPATH')) die ('No direct access allowed'); 
    
    // Register Styles.
    wp_register_style('DOPNGTS_JScrollPaneStyle', get_template_directory_uri().'/nggallery/libraries/gui/css/jquery.jscrollpane.css');
    wp_register_style('DOPNGTS_NextGENThumbnailScrollerStyle', get_template_directory_uri().'/nggallery/assets/gui/css/jquery.dop.NextGENThumbnailScroller.css');
    // Register JavaScript.
    wp_register_script('DOPNGTS_MouseWheelJS', get_template_directory_uri().'/nggallery/libraries/js/jquery.mousewheel.js', array('jquery'));
    wp_register_script('DOPNGTS_JScrollPaneJS', get_template_directory_uri().'/nggallery/libraries/js/jquery.jscrollpane.min.js', array('jquery'));
    wp_register_script('DOPNGTS_NextGENThumbnailScrollerJS', get_template_directory_uri().'/nggallery/assets/js/jquery.dop.NextGENThumbnailScroller.js', array('jquery'));

    // Enqueue Styles.
    //wp_enqueue_style('DOPNGTS_JScrollPaneStyle');
    //wp_enqueue_style('DOPNGTS_NextGENThumbnailScrollerStyle');
   
    // Enqueue JavaScript.
    if (!wp_script_is('jquery', 'queue')){
        wp_enqueue_script('jquery');
    }
    
    if (!wp_script_is('jquery-ui-draggable', 'queue')){
//        wp_enqueue_script('jquery-ui-draggable');
    }
                
    if (!wp_script_is('jquery-effects-core', 'queue')){
//        wp_enqueue_script('jquery-effects-core');
    }
//    wp_enqueue_script('DOPNGTS_MouseWheelJS');
//    wp_enqueue_script('DOPNGTS_JScrollPaneJS');
//    wp_enqueue_script('DOPNGTS_NextGENThumbnailScrollerJS');
        
    if (!empty ($gallery)){                
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/nggallery/libraries/gui/css/jquery.jscrollpane.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/nggallery/assets/gui/css/jquery.dop.NextGENThumbnailScroller.css" />
<script type="text/JavaScript"  src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/JavaScript" src="<?php echo get_template_directory_uri(); ?>/nggallery/libraries/js/jquery.mousewheel.js"></script>
<script type="text/JavaScript" src="<?php echo get_template_directory_uri(); ?>/nggallery/libraries/js/jquery.jscrollpane.min.js"></script>
<script type="text/JavaScript" src="<?php echo get_template_directory_uri(); ?>/nggallery/assets/js/jquery.dop.NextGENThumbnailScroller.js"></script>
<script type="text/JavaScript">
    var DOPNextGENThumbnailScrollerSettings<?php echo $gallery->ID;?> = {
        "Width": 243, // Width (value in pixels). Default value: 900. Set the width of the scroller.
        "Height": 360, // Height (value in pixels). Default value: 128. Set the height of the scroller.")
        "BgColor": "ffffff", // Background Color (color hex code). Default value: ffffff. Set scroller background color.
        "BgAlpha": 100, // Background Alpha (value from 0 to 100). Default value: 100. Set scroller alpha.
        "BgBorderSize": 1, // Background Border Size (value in pixels). Default value: 1. Set the size of the scroller border.
        "BgBorderColor": "e0e0e0", // Background Border Color (color hex code). Default value: e0e0e0. Set the color of the scroller border.
        "ThumbnailsOrder": "random", // Thumbnails Order (normal, random). Default value: normal. Set thumbnails order.
        "ResponsiveEnabled": "true", // Responsive Enabled (true, false). Default value: true. Enable responsive layout.
        "UltraResponsiveEnabled": "false", // Ultra Responsive Enabled (true, false). Default value: false. Enable ultra responsive layout. Resize both width and height. It is a boost to normal response function which you must have enabled.
        "ThumbnailsPosition": "vertical", // Thumbnails Position (horizontal, vertical). Default value: horizontal. Set the position of the thumbnails.
        "ThumbnailsBgColor": "ffffff", // Thumbnails Background Color (color hex code). Default value: ffffff. Set the color for the thumbnails background.
        "ThumbnailsBgAlpha": 0, // Thumbnails Background Alpha (value from 0 to 100). Default value: 0. Set the transparency for the thumbnails background.
        "ThumbnailsBorderSize": 0, // Thumbnails Background Border Size (value in pixels). Default value: 0. Set the size of the thumbnails border.
        "ThumbnailsBorderColor": "e0e0e0", // Thumbnails Background Border Color (color hex code). Default value: e0e0e0. Set the color of the thumbnails border.
        "ThumbnailsSpacing": 10, // Thumbnails Spacing (value in pixels). Default value: 10. Set the space between thumbnails.
        "ThumbnailsMarginTop": 10, // Thumbnails Margin Top (value in pixels). Default value: 10. Set the top margin for the thumbnails.
        "ThumbnailsMarginRight": 0, // Thumbnails Margin Right (value in pixels). Default value: 0. Set the right margin for the thumbnails.
        "ThumbnailsMarginBottom": 10, // Thumbnails Margin Bottom (value in pixels). Default value: 10. Set the bottom margin for the thumbnails.
        "ThumbnailsMarginLeft": 10, // Thumbnails Margin Left (value in pixels). Default value: 0. Set the left margin for the thumbnails.
        "ThumbnailsPaddingTop": 0, // Thumbnails Padding Top (value in pixels). Default value: 0. Set the top padding for the thumbnails.
        "ThumbnailsPaddingRight": 0, // Thumbnails Padding Right (value in pixels). Default value: 0. Set the right padding for the thumbnails.
        "ThumbnailsPaddingBottom": 0, // Thumbnails Padding Bottom (value in pixels). Default value: 0. Set the bottom padding for the thumbnails.
        "ThumbnailsPaddingLeft": 15, // Thumbnails Padding Left (value in pixels). Default value: 0. Set the left padding for the thumbnails.
        "ThumbnailsInfo": "label", // Info Thumbnails Display (none, tooltip, label). Default value: label. Display a small info text on the thumbnails, a tooltip or a label.
        "ThumbnailsNavigationEasing": "easeInOutCirc", // Thumbnails Navigation Easing (linear, swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic, easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint, easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine, easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc, easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack, easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce). Default value: linear. Set thumbnails navigation easing.
        "ThumbnailsNavigationLoop": "false", // Enable Thumbnails Loop (true, false). Default value: false. Enable thumbnails loop ... scroll will be disabled.
        "ThumbnailsNavigationMouseEnabled": "false", // Enable Thumbnails Mouse Navigation (true, false). Default value: false. Enable thumbnails mouse navigation.
        "ThumbnailsNavigationScrollEnabled": "true", // Enable Thumbnails Scroll Navigation (true, false). Default value: false. Enable thumbnails scroll navigation.
        "ThumbnailsScrollPosition": "top/left", // Thumbnails Scroll Position (bottom/right, top/left). Default value: bottom/right. Set thumbnails scroll position.
        "ThumbnailsScrollSize": 5, // Thumbnails Scroll Size (value in pixels). Default value: 5. Set the scroll size color.
        "ThumbnailsScrollScrubColor": "808080", // Thumbnails Scroll Scrub Color (color hex code). Default value: 808080. Set the scroll scrub color.
        "ThumbnailsScrollBarColor": "e0e0e0", // Thumbnails Scroll Bar Color (color hex code). Default value: e0e0e0. Set the scroll bar color.
        "ThumbnailsNavigationArrowsEnabled": "false", // Enable Thumbnails Arrows Navigation (true, false). Default value: true. Enable thumbnails arrows navigation.
        "ThumbnailsNavigationArrowsNoItemsSlide": 1, // Thumbnails Navigation Arrows Number Items Slide (number of thumbnails). Default value: 1. The number of thumbnails that will slide when you click the arrows.
        "ThumbnailsNavigationArrowsSpeed": 600, // Thumbnails Navigation Arrows Speed (time in miliseconds). Default value: 600. The time the thumbnails will slide after you click the arrows.
        "ThumbnailsNavigationPrev": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsPrev.png", // Thumbnails Navigation Previous Button Image (path to image). Upload the image for thumbnails navigation's previous button.
        "ThumbnailsNavigationPrevHover": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsPrevHover.png", // Thumbnails Navigation Previous Button Hover Image (path to image). Upload the image for thumbnails navigation's previous hover button.
        "ThumbnailsNavigationPrevDisabled": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsPrevDisabled.png", // Thumbnails Navigation Previous Button Disabled Image (path to image). Upload the image for thumbnails navigation's previous disabled button.
        "ThumbnailsNavigationNext": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsNext.png", // Thumbnails Navigation Next Button Image (path to image). Upload the image for thumbnails navigation's next button.
        "ThumbnailsNavigationNextHover": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsNextHover.png", // Thumbnails Navigation Next Button Hover Image (path to image). Upload the image for thumbnails navigation's next hover button.
        "ThumbnailsNavigationNextDisabled": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailsNextDisabled.png", // Thumbnails Navigation Next Button Disabled Image (path to image). Upload the image for thumbnails navigation's next disabled button.
        "ThumbnailLoader": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/ThumbnailLoader.gif", // Thumbnail Loader (path to image). Set the loader for the thumbnails.
        "ThumbnailWidth": 200, // Thumbnail Width (the size in pixels). Default value: 100. Set the width of a thumbnail.
        "ThumbnailHeight": 100, // Thumbnail Height (the size in pixels). Default value: 100. Set the height of a thumbnail.
        "ThumbnailAlpha": 100, // Thumbnail Alpha (value from 0 to 100). Default value: 100. Set the transparency of a thumbnail.
        "ThumbnailAlphaHover": 100, // Thumbnail Alpha Hover (value from 0 to 100). Default value: 100. Set the transparency of a thumbnail when hover.
        "ThumbnailBgColor": "f1f1f1", // Thumbnail Background Color (color hex code). Default value: f1f1f1. Set the color of a thumbnail's background.
        "ThumbnailBgColorHover": "f1f1f1", // Thumbnail Background Color Hover (color hex code). Default value: f1f1f1. Set the color of a thumbnail's background when hover.
        "ThumbnailBorderSize": 1, // Thumbnail Border Size (value in pixels). Default value: 1. Set the size of a thumbnail's border.
        "ThumbnailBorderColor": "d0d0d0", // Thumbnail Border Color (color hex code). Default value: d0d0d0. Set the color of a thumbnail's border.
        "ThumbnailBorderColorHover": "303030", // Thumbnail Border Color Hover (color hex code). Default value: 303030. Set the color of a thumbnail's border when hover.
        "ThumbnailPaddingTop": 2, // Thumbnail Padding Top (value in pixels). Default value: 2. Set top padding value of a thumbnail.
        "ThumbnailPaddingRight": 2, // Thumbnail Padding Right (value in pixels). Default value: 2. Set right padding value of a thumbnail.
        "ThumbnailPaddingBottom": 2, // Thumbnail Padding Bottom (value in pixels). Default value: 2. Set bottom padding value of a thumbnail.
        "ThumbnailPaddingLeft": 2, // Thumbnail Padding Left (value in pixels). Default value: 2. Set left padding value of a thumbnail.
        "LightboxEnabled": "false", // Enable Lightbox (true, false). Default value: true. Enable the lightbox.
        "LightboxDisplayTime": 600, // Lightbox Display Time (time in miliseconds). Default value: 600. The time the lightbox will be displayed.
        "LightboxWindowColor": "ffffff", // Lightbox Window Color (color hex code). Default value: ffffff. Set the color for the lightbox window.
        "LightboxWindowAlpha": 80, // Lightbox Window Alpha (value from 0 to 100). Default value: 80. Set the transparency for the lightbox window.
        "LightboxLoader": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxLoader.gif", // Lightbox Loader (path to image). Set the loader for the lightbox image.
        "LightboxBgColor": "ffffff", // Lightbox Background Color (color hex code). Default value: ffffff. Set the color for the lightbox background.
        "LightboxBgAlpha": 100, // Lightbox Background Alpha (value from 0 to 100). Default value: 100. Set the transparency for the lightbox background.
        "LightboxBorderSize": 1, // Lightbox Border Size (value in pixels). Default value: 1. Set the size of a lightbox's border.
        "LightboxBorderColor": "e0e0e0", // Lightbox Border Color (color hex code). Default value: e0e0e0. Set the color of a lightbox's border.
        "LightboxCaptionTextColor": "999999", // Lightbox Caption Text Color (color hex code). Default value: 999999. Set the color for the lightbox caption.
        "LightboxMarginTop": 30, // Lightbox Margin Top (value in pixels). Default value: 30. Set top margin value for the lightbox.
        "LightboxMarginRight": 30, // Lightbox Margin Right (value in pixels). Default value: 30. Set right margin value for the lightbox.
        "LightboxMarginBottom": 30, // Lightbox Margin Bottom (value in pixels). Default value: 30. Set bottom margin value for the lightbox.
        "LightboxMarginLeft": 30, // Lightbox Margin Left (value in pixels). Default value: 30. Set top left value for the lightbox.
        "LightboxPaddingTop": 10, // Lightbox Padding Top (value in pixels). Default value: 10. Set top padding value for the lightbox.
        "LightboxPaddingRight": 10, // Lightbox Padding Right (value in pixels). Default value: 10. Set right padding value for the lightbox.
        "LightboxPaddingBottom": 10, // Lightbox Padding Bottom (value in pixels). Default value: 10. Set bottom padding value for the lightbox.
        "LightboxPaddingLeft": 10, // Lightbox Padding Left (value in pixels). Default value: 10. Set left padding value for the lightbox.
        "LightboxNavigationPrev": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxPrev.png", // Lightbox Navigation Previous Button Image (path to image). Upload the image for lightbox navigation's previous button.
        "LightboxNavigationPrevHover": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxPrevHover.png", // Lightbox Navigation Previous Button Hover Image (path to image). Upload the image for lightbox navigation's previous hover button.
        "LightboxNavigationNext": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxNext.png", // Lightbox Navigation Next Button Image (path to image). Upload the image for lightbox navigation's next button.
        "LightboxNavigationNextHover": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxNextHover.png", // Lightbox Navigation Next Button Hover Image (path to image). Upload the image for lightbox navigation's next hover button.
        "LightboxNavigationClose": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxClose.png", // Lightbox Navigation Close Button Image (path to image). Upload the image for lightbox navigation's close button.
        "LightboxNavigationCloseHover": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/LightboxCloseHover.png", // Lightbox Navigation Close Button Hover Image (path to image). Upload the image for lightbox navigation's close hover button.
        "LightboxNavigationInfoBgColor": "ffffff", // Lightbox Navigation Info Background Color (color hex code). Default value: ffffff. Set the color for the lightbox info background.
        "LightboxNavigationInfoTextColor": "c0c0c0", // Lightbox Navigation Info Text Color (color hex code). Default value: c0c0c0. Set the color for the lightbox info text.
        "LightboxNavigationDisplayTime": 600, // Lightbox Navigation Display Time (time in miliseconds). Default value: 600. The time the lightbox navigation will be displayed.
        "LightboxNavigationTouchDeviceSwipeEnabled": "true", // Swipe Lightbox Navigation Enabled (true, false). Default value: true. Enable swipe lightbox navigation on touch devices.
        "SocialShareEnabled": "false", // Social Share Enabled (true, false). Default value: true. Enable AddThis Social Share.
        "SocialShareLightbox": "<?php echo get_template_directory_uri()?>/nggallery/assets/gui/images/SocialShareLightbox.png", // Lightbox Social Share Button Image (path to image). Upload the image for lightbox social share button.
        "TooltipBgColor": "ffffff", // Tooltip Background Color (color hex code). Default value: ffffff. Set tooltip background color.
        "TooltipStrokeColor": "000000", // Tooltip Stroke Color (color hex code). Default value: 000000. Set tooltip stroke color.
        "TooltipTextColor": "000000", // Tooltip Text Color (color hex code). Default value: 000000. Set tooltip text color.
        "LabelPosition": "bottom", // Label Position (bottom, top, under). Default value: bottom. Set label position.
        "LabelAlwaysVisible": "false",// Label Always Visible (true, false). Default value: false. On true the label is always visible, on false it will be visible only on hover.
        "LabelUnderHeight": 50,// Height for Under Label (the size in pixels). Default value: 50. Set the height only for the label under a thumbnail.
        "LabelBgColor": "000000", // Label Position (bottom, top). Default value: bottom. Set label position.
        "LabelBgAlpha": 80, // Label Background Alpha (value from 0 to 100). Default value: 80. Set label background transparency.
        "LabelTextColor": "ffffff", // Label Text Color (color hex code). Default value: ffffff. Set label text color.
        "SlideshowEnabled": "true", // Slideshow Enabled (true, false). Default value: false. Enable or disable the slideshow.
        "SlideshowTime": 3000, // Slideshow Time (time in miliseconds). Default: 5000. How much time a thumbnail stays until it passes to the next one.
        "SlideshowLoop": "true" // Slideshow Loop (true, false). Default: false. Set it to true if you don't want the slideshow to stop when it reaches the last thumbnail.
    },        
    DOPNextGENThumbnailScrollerContent<?php echo $gallery->ID; ?> = [    
<?php
        $i = 0;
    
        foreach ($images as $image):
            $i++;
            $filename = explode('.', $image->filename);
                
            echo '{"Image": "'.$image->imageURL.'",'.
                  '"Thumb": "'.$image->thumbURL.'",'.
                  '"Title": \''.($image->alttext == $filename[0] || $image->alttext == ' ' ? '':preg_replace('`\'`', "&#39;", $image->alttext)).'\','.
                  '"Caption": \''.($image->description == ' ' ? '':preg_replace('`\'`', "&#39;", preg_replace('`[\r\n]`', "<br />", html_entity_decode(stripslashes($image->description))))).'\','.
                  '"Media": \''.preg_replace('`[\r\n]`', "", stripslashes($image->ngg_custom_fields['Media'])).'\','.
                  '"LightboxMedia": \''.preg_replace('`[\r\n]`', "", stripslashes($image->ngg_custom_fields['LightboxMedia'])).'\','.
                  '"Link": \''.stripslashes($image->ngg_custom_fields['Link']).'\','.
                  '"Target": \''.stripslashes($image->ngg_custom_fields['LinkTarget']).'\'}';
            if ($i != count($images)){        
                echo ','."\n";
            }            
        endforeach;
?>           
    ];
</script>
<div class="DOPNextGENThumbnailScroller" id="DOPNextGENThumbnailScroller<?php echo $gallery->ID; ?>">
<?php
        foreach ($images as $image):
            echo '<img src="'.$image->imageURL.'" alt="'.($image->alttext == ' ' ? '':preg_replace('`\'`', "&#39;", $image->alttext)).'" title="'.($image->alttext == ' ' ? '':preg_replace('`\'`', "&#39;", $image->alttext)).'" style="display: none;" />';
        endforeach;
?>
</div>
<script type="text/JavaScript">
    jQuery(document).ready(function(){
        jQuery('#DOPNextGENThumbnailScroller<?php echo $gallery->ID; ?>').DOPNextGENThumbnailScroller();
    });  
</script>
<?php
    }
?>
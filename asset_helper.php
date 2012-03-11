<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		Sekati
 * @author		Jason M Horwitz
 * @copyright	Copyright (c) 2012, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.0.8
 * @filesource
 *
 * @usage 		$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @see 		Modified & extended from http://robotslacker.com/2010/11/dynamically-combine-and-minify-your-javascript-and-css-files-with-codeigniter/
 *
 * @install		Add the following lines to your CI config.php file:
 * 					$config['asset_path'] = 'assets/';
 * 					$config['css_path'] = 'assets/css/';
 * 					$config['less_path'] = 'assets/less/';
 * 					$config['js_path'] = 'assets/js/';
 * 					$config['img_path'] = 'assets/img/';
 * 					$config['swf_path'] = 'assets/swf/';
 * 					$config['xml_path'] = 'assets/xml/';
 *
 * 
 * @notes		Assets should be organized as follows in the top level of 
 * 				your CodeIngiter 2.x project:
 *					- assets/
 *						-- css/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- xml/
 *					- application/
 *					- system/
 */

// ------------------------------------------------------------------------
// PATH HELPERS

/**
 * Get asset URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('asset_url'))
{
    function asset_url()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();  
        //return the full asset path
        return base_url() . $CI->config->item('asset_path'); 
    }
}

/**
 * Get css URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('css_url'))
{  
    function css_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('css_path');
    }
}

/**
 * Get less URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('less_url'))
{  
    function less_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('less_path');
    }
}

/**
 * Get js URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('js_url'))
{  
    function js_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('js_path');
    }
}

/**
 * Get image URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('img_url'))
{  
    function img_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('img_path');
    }
}

/**
 * Get SWF URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('swf_url'))
{  
    function swf_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('swf_path');
    }
}

/**
 * Get XML URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('xml_url'))
{  
    function xml_url()
    {
        $CI =& get_instance();  
        return base_url() . $CI->config->item('xml_path');
    }
}

// ------------------------------------------------------------------------
// LOADER HELPERS

/**
 * Load CSS
 * Creates the <link> tag that links all requested css file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_css'))
{
    function load_css($file, $media='all')
    {
        return '<link rel="stylesheet" type="text/css" href="' . css_url() . $file . '" media="' . $media . '">'."\n";
    }
}

/**
 * Load LESS
 * Creates the <link> tag that links all requested LESS file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_less'))
{
    function load_less($file)
    {
        return '<link rel="stylesheet/less" type="text/css" href="' . less_url() . $file . '">'."\n";
    }
}

/**
 * Load JS
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_js'))
{
    function load_js($file)
    {
        return '<script type="text/javascript" src="' . js_url() . $file . '"></script>'."\n";
    }
}

/**
 * Load Image
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_img'))
{
    function load_img($file, $class='')
    {
    	$cls = (isset($class) && $class != '') ? ' class="'.$class.'" ' : '';
        return '<img src="' . img_url() . $file . '"' . $cls .'/>'."\n";
    }
}

/**
 * Load Minified JQuery CDN w/ failover
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_jquery'))
{
    function load_jquery($version='')
    {
    	// Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  		$out = '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>'."\n";
  		$out .= '<script>window.jQuery || document.write(\'<script src="'.js_url().'?>jquery-'.$version.'.min.js"><\/script>\')</script>'."\n";
        return $out;
    }
}

/**
 * Load Google Analytics
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('load_ga'))
{
    function load_ga($ua='')
    {
    	// Change UA-XXXXX-X to be your site's ID
	    $out = "<!-- Google Webmaster Tools & Analytics -->\n";
	    $out .='<script type="text/javascript">';
		$out .='	var _gaq = _gaq || [];';
		$out .="    _gaq.push(['_setAccount', '$ua']);";
		$out .="    _gaq.push(['_trackPageview']);";
		$out .='    (function() {';
		$out .="      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
		$out .="      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
		$out .="      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
		$out .="    })();";
	    $out .="</script>";
        return $out;
    }
}  
 
 
/* End of file asset_helper.php */
/* Location: application/helpers/asset_helper.php */
?>
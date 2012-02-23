
CodeIgniter Asset Helper
============================

This is a small codeigniter helper library for working with static asset paths & embedding. _This library was modified & extended from [this blog article](http://robotslacker.com/2010/11/dynamically-combine-and-minify-your-javascript-and-css-files-with-codeigniter/)._


Installation
-------------------------------------

1. Copy `asset_helper.php` to your `application/helpers` folder.
2. Autoload the helper `$autoload['helper'] = array('asset');`.
3. Follow the configuration steps outlined below.
4. Employ helper functions as needed.


Configuration
-------------------------------------


### Asset Directory Structure

First setup your static asset directory; assets should be organized as follows in the top level of your CodeIngiter 2.x project: 

	- /CIAppRoot
		- assets/
			-- css/
			-- img/
			-- js/
			-- less/
			-- swf/
			-- xml/			
		- application/
		- system/
		
		
### Application Configuration	

Secondly, add the following lines at the bottom of your CI `application/config/config.php` file:

	$config['asset_path'] = 'assets/';
	$config['css_path'] = 'assets/css/';
	$config['less_path'] = 'assets/less/';
	$config['js_path'] = 'assets/js/';
	$config['img_path'] = 'assets/img/';
	$config['swf_path'] = 'assets/swf/';
	$config['xml_path'] = 'assets/xml/';	
	
	
Usage
-------------------------------------


### Path URL Helpers

A number of path URL helpers are available to access static assets:

	<?=asset_url()?>img/test.jpg
	<?=img_url()?>test.jpg
	<?=css_url()?>style.css
	<?=less_url()?>style.less
	<?=js_url()?>bootstrap.min.js
	<?=swf_url()?>application.swf
	<?=xml_url()?>config.xml	

	
### Load Embed Helpers

A number of load helpers are available to easily embed assets with proper href, link or script tagging:

	<?=load_img('test.jpg', 'myimageclass')?>
	<?=load_css('style.css')?>
	<?=load_less('style.less')?>	
	<?=load_js('bootstrap.min.js')?>
	

### Advanced Embed Helpers

A number of load helpers are available to easily embed assets with proper href, link or script tagging:

	<?=load_jquery('1.7.1') // embed minified jquery version from google CDN with local failover ?>
	<?=load_ga('UA-XXXXX-X') // embed Google Analytics. ?>	

  	
License
-------------------------------------

Copyright © 2012 Jason M Horwitz, Sekati LLC. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

	The MIT License

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and 
	associated documentation files (the “Software”), to deal in the Software without restriction, 
	including without limitation the rights to use, copy, modify, merge, publish, distribute, 
	sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is 
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or 
	substantial portions of the Software.

	THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
	BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
	DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.	
	
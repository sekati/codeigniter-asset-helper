
Asset Helper Spark for CodeIgniter
=====================================

A [CodeIgniter](http://codeigniter.com) helper [Spark](http://getsparks.org/) for working with static asset paths & embedding. _This library was modified & extended from [this blog article](http://robotslacker.com/2010/11/dynamically-combine-and-minify-your-javascript-and-css-files-with-codeigniter/)._


Requirements
-------------------------------------

* CodeIgniter's `url_helper` must be autoloaded in `application/config/autoload.php`: $autoload['helper'] = array('url');


Installation
-------------------------------------

1. Install the spark: `php tools/spark install sk-asset` or, if not using Spark package management, copy `helpers/asset_helper.php` to your `application/helpers` folder & `config/asset.php` to your `application/config` folder & autoload both files in `application/config/autoload.php`:

		$autoload['helper'] = array('asset');
		$autoload['config'] = array('asset');


2. Load the spark: `$this->load->spark('sk-asset/1.2.7');` or, optionally autoload the spark in `application/config/autoload.php` to: `$autoload['sparks'] = array('sk-asset/1.2.7');`.
3. Employ helper functions as needed.


Configuration
-------------------------------------


### Asset Directory Structure

Your static asset directory should be organized at the top level of your CodeIgniter 2.x project as follows:

	- /CIAppRoot
		- assets/
			-- css/
			-- download/
			-- img/
			-- js/
			-- less/
			-- swf/
			-- upload/
			-- xml/
		- application/
		- system/


Usage
-------------------------------------


### URL Helpers

URL helpers are available to access static assets URL paths:

	<?=asset_url()?>img/test.jpg
	<?=img_url()?>test.jpg
	<?=css_url()?>style.css
	<?=less_url()?>style.less
	<?=js_url()?>bootstrap.min.js
	<?=swf_url()?>application.swf
	<?=upload_url()?>userdoc.pdf
	<?=download_url()?>doc.pdf
	<?=xml_url()?>config.xml


### Path Helpers

Path helpers are available to access file system paths:

	<?=asset_path()?>
	<?=img_path()?>
	<?=css_path()?>
	<?=less_path()?>
	<?=js_path()?>
	<?=swf_path()?>
	<?=xml_path()?>
	<?=download_path()?>
	<?=download_path_relative()?>
	<?=upload_path()?>
	<?=upload_path_relative()?>


### Load Embed Helpers

Load helpers are available to easily embed assets with proper href, link or script tagging:

	<?=img('test.jpg', array('class'=>'imgclass', 'style'=>'border:1px solid #000'))?>
	<?=css('style.css')?>
	<?=less('style.less')?>
	<?=js('bootstrap.min.js')?>


### Advanced Embed Helpers

A number of load helpers are available to easily embed assets with proper href, link or script tagging:

	<?=jquery('1.7.1') // embed minified jquery version from google CDN with local failover ?>
	<?=google_analytics('UA-XXXXX-X') // embed Google Analytics. ?>


License
-------------------------------------

Copyright © 2013 Jason M Horwitz, Sekati LLC. All Rights Reserved.

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


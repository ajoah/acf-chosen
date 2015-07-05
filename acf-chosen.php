<?php
/*
Plugin Name: Advanced Custom Fields Chosen plugin
Plugin URI: https://github.com/levymetal/acf-chosen
Description: Adds chosen.js to ACF dropdowns
Author: Raygun Design, LLC
Version: 1.0

Author URI: http://madebyraygun.com

Copyright 2013 Raygun Design LLC (email : contact@madebyraygun.com)
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

function acf_chosen_admin_footer() {

  ?>
  <script type="text/javascript">
    (function($) {
      acf.add_action('ready', function( ){
        $('.acf-input select').chosen();
      });
    })(jQuery);
  </script>
<?php

}
add_action('acf/input/admin_footer', 'acf_chosen_admin_footer');

add_action('admin_enqueue_scripts', 'enqueue_chosen_js', 2000 );
function enqueue_chosen_js() {
  wp_enqueue_script( 'chosen_js', plugins_url( '' ,  __FILE__ ) . '/lib/chosen.jquery.min.js', array('jquery') );
  wp_enqueue_style( 'chosen_js', plugins_url( '' ,  __FILE__ ) . '/lib/chosen.min.css' );
}

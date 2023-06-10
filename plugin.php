<?php
/*
Plugin Name: Average Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/average-calculator/
Description: The average calculator helps find a data set's average or arithmetic mean. It also shows the calculation steps and other important statistics.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_average_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_average_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/average-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Average Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_average_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_average_calculator', 'display_ci_average_calculator' );
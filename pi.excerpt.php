<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - 2018, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
 * @filesource
 */

$plugin_info = array(
    'pi_name'   => 'excerpt',
    'pi_version'  => '1.0.0',
    'pi_author'   => 'Adam Kelly',
    'pi_author_url' => 'https://github.com/adamisntdead/ee-excerpt',
    'pi_description'=> 'Get excerpts of text, limit by character, strip HTML and more.',
    'pi_usage'    => ''
);

/**
 * Weather Plugin
 *
 * @package    ExpressionEngine
 * @subpackage Addons
 * @category   Plugin
 * @author     Adam Kelly
 * @link       https://github.com/adamisntdead/ee-excerpt
 */
class Excerpt
{
    public $return_data;

    /**
     * Constructor
     */
    public function __construct()
    {
        $parameter = ee()->TMPL->fetch_param('thing');

        
        $this->return_data = "Hello, " . $parameter . "!";
    }

    /**
     * Usage
     * 
     * This function describes how the plugin is used
     * 
     * @access public
     * @return string
     */
    public static function usage()
    {
        ob_start(); ?>
    PUT USAGE HERE!

        <?php
        $buffer = ob_get_contents();
        ob_end_clean();

        return $buffer;
    }
}

/* End of file pi.excerpt.php */
/* Location: /system/user/addons/excerpt/pi.excerpt.php */
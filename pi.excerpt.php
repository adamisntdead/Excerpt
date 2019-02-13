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
    'pi_author_url' => 'https://github.com/adamisntdead/excerpt',
    'pi_description'=> 'Get excerpts of text, limit by character, strip HTML and more.',
    'pi_usage'    => ''
);

/**
 * Excerpt Plugin
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
        // Parameters
        $allow_param = ee()->TMPL->fetch_param('allow');
        $chars_param = ee()->TMPL->fetch_param('chars');
        $words_param = ee()->TMPL->fetch_param('words'); 
        $cutoff_param = ee()->TMPL->fetch_param('cutoff');
        $append_param = ee()->TMPL->fetch_param('append');

        // Get data
        $content = ee()->TMPL->tagdata;

        // Strip tags
        $content = trim(strip_tags($content, $allow_param));

        $append = false;
        
        if (isset($chars_param) && $chars_param != "") {
            $content = substr($content, 0, $chars_param);
            $append = (strlen($content)>$chars_param);    
        } elseif (isset($words_param) && $words_param != "") {
            $words = explode(' ', $content);
            $content = implode(' ', array_slice($words, 0, $words_param));
            $append = (count($words)>$words_param);
        } elseif (isset($cutoff_param) && $cutoff_param != "") {
            $exploded = explode($cutoff_param, $content, 2);
            $content = $exploded[0];
            $append = (count($exploded)>1);
        }

        if ($append)
        {
            $content .= $append_param;
        }
        $this->return_data = $content;
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
        Excerpt is a plugin so you can make excerpts
        of text really, really easily.
        It can strip HTML content, add something (like '...')
        to the end, and let you cutoff by words, characters
        or a cutoff point.

        To use Excerpt, just wrap your content with 
        the {exp:excerpt} tag:

        {exp:excerpt}
        <h1>Some</h1> Amazing
        <strong>Content!</strong>
        {exp:excerpt}

        Which will be turned into "Some Amazing Content!".  
        
        To use the other options, the following parameters 
        are supported:

        {exp:excerpt
            chars = "" // Limit number of characters
            words = "" // Limit number of words
            cutoff = "" // Cutoff at a given string
            append = "" // Add something to the end (eg. append="...")
            allow = "" // Allow certain HTML tags (eg. allow="<p>")
        }

        <?php
        $buffer = ob_get_contents();
        ob_end_clean();

        return $buffer;
    }
}

/* End of file pi.excerpt.php */
/* Location: /system/user/addons/excerpt/pi.excerpt.php */

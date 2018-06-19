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
    'pi_name'   => 'Weather',
    'pi_version'  => '1.0.0',
    'pi_author'   => 'Adam Kelly',
    'pi_author_url' => 'https://github.com/adamisntdead/ee-addon',
    'pi_description'=> 'Simple Weather Addon With OpenWeatherMap',
    'pi_usage'    => ''
);

/**
 * Weather Plugin
 *
 * @package    ExpressionEngine
 * @subpackage Addons
 * @category   Plugin
 * @author     Adam Kelly
 * @link       https://github.com/adamisntdead/ee-addon
 */
class Weather
{
    public $return_data;

    /**
     * Constructor
     */
    public function __construct()
    {
    }
}

/* End of file pi.weather.php */
/* Location: /system/expressionengine/third_party/weather/pi.weather.php */
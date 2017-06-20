<?php
/**
 * @copyright   Copyright (C) 2017 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_cw_customextended
 */
class ModCwCustomextendedHelper
{
    /**
     * Array of attributes
     */
    protected $attributes = array();

    /**
     * Constructor
     *
     * @param   \Joomla\Registry\Registry  &$params  object holding the models parameters
     */
    public function __construct(&$params)
    {
        $attributes_obj = json_decode($params->get('attributes', ''));
        $this->attributes = array();
           
        // Parse the attributes
        for($i=0; $i<count($attributes_obj->key); $i++)
        {
            $this->attributes[$attributes_obj->key[$i]] = $attributes_obj->value[$i];
        }
    }

    /**
     * Get a specific attribute
     *
     * @param   String                     $key      Attribute key
     * @param   String                     $default  Default value (optional)
     *
     * @return  String
     *
     */
    public function getAttribute($key, $default='')
    {
        if ($this->attributes && isset($this->attributes[$key]))
        {
            return $this->attributes[$key];
        }

        return $default;
    }

}

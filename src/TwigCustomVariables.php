<?php
namespace Drupal\twig_custom_variables;

class TwigCustomVariables
{
    public static $vars = [];
    public static function setVar($varName, $varValue)
    {
        TwigCustomVariables::$vars[$varName] = $varValue;
    }

    public static function getAll()
    {
        return TwigCustomVariables::$vars;
    }

    public static function getVar($varName, $default=null)
    {
        if(array_key_exists($varName, TwigCustomVariables::$vars)){
            return TwigCustomVariables::$vars[$varName];
        }
        return $default;
    }

}
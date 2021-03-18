<?php

namespace Drupal\twig_custom_variables\TwigExtension;


use Twig\TwigFunction;
use Drupal\twig_custom_variables\TwigCustomVariables;


/**
 * Class DefaultTwigExtension.
 */
class DefaultTwigExtension extends \Twig_Extension {

        
   /**
    * {@inheritdoc}
    */
    public function getTokenParsers() {
      return [];
    }

   /**
    * {@inheritdoc}
    */
    public function getNodeVisitors() {
      return [];
    }

   /**
    * {@inheritdoc}
    */
    public function getFilters() {
      return [];
    }

   /**
    * {@inheritdoc}
    */
    public function getTests() {
      return [];
    }

   /**
    * {@inheritdoc}
    */
    public function getFunctions() {
      return [
          new TwigFunction('twigCustomVarGet', [$this, 'twigCustomVarGet']),
          new TwigFunction('twigCustomVarSet', [$this, 'twigCustomVarSet']),
      ];
    }

   /**
    * {@inheritdoc}
    */
    public function getOperators() {
      return [];
    }

   /**
    * {@inheritdoc}
    */
    public function getName() {
      return 'twig_custom_variables.twig.extension';
    }



    public function twigCustomVarGet($varName, $defaultValue=null)
    {
       return TwigCustomVariables::getVar($varName, $defaultValue);
    }

    public function twigCustomVarSet($varName, $value)
    {
       TwigCustomVariables::setVar($varName, $value);
    }

}

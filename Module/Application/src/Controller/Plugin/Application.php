<?php
/** 
 * Application Plugin
 * Actual plugin to provide config array in the controllers
 */
namespace Application\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Config\Config;

class Application extends AbstractPlugin
{
    protected $settings;
    
    public function __construct($settings)
    {
        $this->settings = new Config($settings);
    }
    
    public function getSettings()
    {
        return $this->settings;
    }
}
?>

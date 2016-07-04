<?php
/** 
 * Application Plugin Factory 
 * To create Application Plugin by injecting config array
 */
namespace Application\Controller\Plugin\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\Plugin\Application;

class ApplicationFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config');
        $settings = $config['application']['settings'];
        $plugin = new Application($settings);
    
        return $plugin;
    }    
}
?>

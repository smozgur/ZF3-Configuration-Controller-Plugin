<?php
/** 
 * module.config.php 
 * Application Module Configuration file
 */
 
namespace Application;

return [
    /* ... */
    
    'controller_plugins' => [
        'aliases' => [
            'application' => Controller\Plugin\Application::class,
        ],
        'factories' => [
            Controller\Plugin\Application::class => Controller\Plugin\Factory\ApplicationFactory::class,
        ],
    ],    
    
    /* ... */
];

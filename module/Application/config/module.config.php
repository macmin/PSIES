<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

use Application\Controller\InterfaceController;
use Application\Controller\ExamenController;

use Application\Service\ExamenService;

use Application\Repository\ExamenRepository;

use Application\Factory\Controller\ExamenControllerFactory;
use Application\Factory\Service\ExamenServiceFactory;
use Application\Factory\Repository\ExamenRepositoryFactory;



return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

            'abaout' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/abaout',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'abaout',
                    ],
                ],
            ],

            'examen' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/examen',
                    'defaults' => [
                        'controller' => ExamenController::class,
                        'action' => 'index'
                    ]
                ]
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

            
        ],
    ],
    'service_manager' => [
        'factories' => [
            ExamenService::class => ExamenServiceFactory::class,
            ExamenRepository::class => ExamenRepositoryFactory::class
        ]
    ],
    'controllers' => [
        'factories' => [
            IndexController::class => InvokableFactory::class,
            ExamenController::class => ExamenControllerFactory::class

        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];

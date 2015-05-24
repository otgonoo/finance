<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Builder
 *
 * @author otgonoo
 */

namespace Husel\FrontendBundle\Menu;

use Knp\Menu\FactoryInterface;

#use Symfony\Component\HttpFoundation\RequestStack;
#use Symfony\Component\DependencyInjection\ContainerAware;

class MenuBuilder
{

    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu()
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute("class", "");
        $menu->addChild('Home', array('uri' => '#'))->setAttribute('icon', 'fa-home');
        $menu['Home']->addChild("test1", array('route' => 'husel_frontend_homepage'));
        $menu->addChild('About Me', array(
            'route' => 'husel_frontend_homepage',
            'routeParameters' => array('id' => 42)
        ));
        // ... add more children

        return $menu;
    }

}

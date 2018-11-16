<?php
/**
 * Created by PhpStorm.
 * User: Claudiu
 * Date: 11/16/2018
 * Time: 12:58 PM
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options){
        $menu = $factory->createItem("root");
        $menu->setChildrenAttribute("class", "nav navbar-nav");
        $menu -> addChild("Home", ["route" => "homepage"]);
        $menu->addChild("Offer", ["route" => "offer"]);
        return $menu;
    }

}
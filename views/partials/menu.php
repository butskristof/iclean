<?php
require_once("vendor/autoload.php");

$menu = Spatie\Menu\Menu::new()
    ->addClass("navbar-nav mr-auto")
//    ->link('#', "Home")->addClass('nav-item'
	->add(Spatie\Menu\Link::to("#", "Home")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("#", "Diensten")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("#", "Referenties")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("#", "Contact")->addClass('nav-link')->addParentClass('nav-item'));

//echo $id;
//$menu->setActive($id);

echo $menu->render();

?>

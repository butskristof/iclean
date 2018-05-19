<?php
$menu = Spatie\Menu\Menu::new()
	->addClass("navbar-nav mr-auto") // mr puts menu items on left side
	->add(Spatie\Menu\Link::to("/home", "Home")->addClass("nav-link")->addParentClass("nav-item"))
	->add(Spatie\Menu\Link::to("/diensten", "Diensten")->addClass("nav-link")->addParentClass("nav-item"))
	->add(Spatie\Menu\Link::to("/referenties", "Referenties")->addClass("nav-link")->addParentClass("nav-item"))
	->add(Spatie\Menu\Link::to("/contact", "Contact")->addClass("nav-link")->addParentClass("nav-item"))
	->setActive('/' . $this->e($id)); // '/' + id form the url

echo $menu->render();

?>

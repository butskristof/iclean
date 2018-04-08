<?php
$menu = Spatie\Menu\Menu::new()
    ->addClass("navbar-nav mr-auto")
//    ->link('#', "Home")->addClass('nav-item'
//	->add(Spatie\Menu\Link::to(($this->e($id) == 'home' ? '#' : '/home'), "Home")->addClass('nav-link')->addParentClass('nav-item'))
//	->add(Spatie\Menu\Link::to(('/'), "Home")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("/diensten", "Diensten")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("/referenties", "Referenties")->addClass('nav-link')->addParentClass('nav-item'))
    ->add(Spatie\Menu\Link::to("/contact", "Contact")->addClass('nav-link')->addParentClass('nav-item'))
	->setActive('/' . $this->e($id));

//echo $id;
//$menu->setActive($id);

echo $menu->render();

?>

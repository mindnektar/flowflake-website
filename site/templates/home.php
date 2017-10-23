<?php

snippet('head');

snippet('header');

foreach($pages->visible() as $section) {
    snippet($section->uid(), array('data' => $section));
}

snippet('signup', array('data' => $pages->find('section5/signup')));

snippet('footer');

?>

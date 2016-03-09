<?php

require_once 'Li.php';
require_once 'Ul.php';


class HtmlElement {
	public $tagName = 'p';
	public $htmlAttributes = ['class' => 'important'];
	public $content = 'Some text';
}



$programmers = new Ul();
$ryan = new Li();
$ryan->content = 'Ryan';
$programmers->addItem(new Li($ryan));
$cameron = new Li();
$cameron->content = 'Cameron';
$programmers->addItem(new Li($cameron));
echo PHP_EOL . $programmers->asHtml() . PHP_EOL; 
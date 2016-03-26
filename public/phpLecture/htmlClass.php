<?php

class HTMLElement {
	public $tag;
	public $attributes;
}

class EmptyElement extends HTMLElement {

}

class TextElement extends HTMLElement {
	public $text;
}

class Paragraph extends TextElement {
	public $tag = 'p';
	public function __construct($text)
	{
		$this->text = $text;
	}
}

// ul, ol, dl, select
class ListElements extends HTMLElement {
	public $children = [];
}
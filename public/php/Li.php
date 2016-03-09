<?php

class Li {
	public $tagName = 'li';
	public $htmlAttributes = [];
	public $listItems = '';

	public function addItem($item) 
	{
		array_push($this->listItems, $item);
	}
	public function asHtml() 
	{
		return "<{$this->tagName}>{$this->content}</{$this->tagName}";
	}
}
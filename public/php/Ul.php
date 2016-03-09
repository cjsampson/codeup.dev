<?php

class Ul {
	public $tagName = '<ul>';
	public $htmlAttributes = [];
	public $listItems = [];

	public function addItem(Li $item)
    {
        array_push($this->listItems, $item);
    }

	public function asHtml() 
	{
		$html = "<{$this->tagName}>";
		foreach($this->listItems as $listItem) {
			$html .= $listItem->asHtml();
		}
		$html .= "</{$this->tagName}>";

		return $html;
	}
}
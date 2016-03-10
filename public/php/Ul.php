<?php
class Ul
{
    public $tag = 'ul';
    public $htmlAttributes = [];
    public $listItems = [];
    public function addItem(Li $item)
    {
        array_push($this->listItems, $item);
    }
    public function asHtml()
    {
        $html = "<{$this->tag}>";
        /** @var Li $listItem */
        foreach ($this->listItems as $listItem) {
            $html .= $listItem->asHtml();
        }
        $html .= "</{$this->tag}>";
        return $html;
    }
}

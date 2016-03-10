<?php
class Li
{
    public $tag = 'li';
    public $htmlAttributes = [];
    public $content = '';
    public function asHtml()
    {
        return "<{$this->tag}>{$this->content}</{$this->tag}>";
    }
}
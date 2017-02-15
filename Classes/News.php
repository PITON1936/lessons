<?php

class News extends Publication
{

    protected $source;
    const TABLE_NAME = 'news';
    const ADD_ATTR = 'source';

    public function __construct($id, $title, $shortText, $longText, $source)
    {
        parent::__construct($id, $title, $shortText, $longText);
        $this->source = $source;
    }

    public function getShortPreview()
    {
        $str = "";
        $str .= $this->title . "<br>";
        $str .= $this->shortText . "<br>";
        $str .= "<a href='/LongText.php?id=".$this->id."&type=".$this::TABLE_NAME."'>Read more &raquo;</a>";
        $str .= "<hr>";
        return $str;
    }
}


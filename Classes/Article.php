<?php

class Article extends Publication
{

    protected $author;
    const TABLE_NAME = 'articles';
    const ADD_ATTR = 'author';

    public function __construct($id, $title, $shortText, $longText, $author)
    {
        parent::__construct($id, $title, $shortText, $longText);
        $this->author = $author;
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


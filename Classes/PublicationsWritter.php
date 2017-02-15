<?php

class PublicationsWritter
{
    public $publications;

    public function __construct($publicationType, PDO $pdo)
    {
        if ($publicationType == 'Articles') {
            $res = $pdo->query("SELECT id FROM articles");
            foreach ($res as $result) {
                $this->publications[] = Article::create($result[0], $pdo);
            }
        } elseif ($publicationType == 'News') {
            $res = $pdo->query("SELECT id FROM news");
            foreach ($res as $result) {
                $this->publications[] = News::create($result[0], $pdo);
            }
        }
    }

    public function __toString()
    {
        $res = "";
        foreach ($this->publications as $publication) {
            $res .= $publication->getShortPreview();
        }
        return $res;
    }
}

?>
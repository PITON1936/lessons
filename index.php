<?php
$search_words = array('php', 'html', 'интернет', 'web');

$search_strings = array('Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования  с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML');

function checkWords($search_words, $search_strings)
{

    foreach ($search_strings as $key => $strings) {

        $res .= "В предложении №" . ($key + 1) . " есть слова:";

        foreach ($search_words as $word) {
            $reg = "/($word)/ui";
            preg_match($reg, $strings, $matches);
            if (is_string($matches[0])) {
                $res .= $matches[0] . ". ";
            }
        }
        $res .= "<br>";
    }
    echo $res;
}

checkWords($search_words, $search_strings);
?>
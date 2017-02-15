<h2>Наши работы:</h2>
<div>
    <?php foreach ($works as $work): ?>
    <ul>
        <li><?=$work['url']?></li>
        <li><?=$work['description']?></li>
        <li><?=$work['year']?></li>
        <li><a href="/portfolio/work<?=$work['id']?>">Подробнее</a></li>
    </ul>
    <?php endforeach;?>
</div>


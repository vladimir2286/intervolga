<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text</title>
</head>

<body>
    <?php
    $text = <<<TXT
<p class="big">
	Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
	<img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
	<span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
	<i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>
TXT;

    function truncateHtml($html, $wordLimit)
    {
        // Преобразуем HTML в массив слов с сохранением тегов
        preg_match_all('/(<[^>]+>|[^<>\s]+)/', $html, $matches);

        $words = $matches[0];
        $wordCount = 0;
        $truncatedHtml = '';

        foreach ($words as $word) {
            // Увеличиваем счетчик слов
            if (trim(strip_tags($word)) !== '') {
                $wordCount++;
            }

            // Добавляем слово в результат
            $truncatedHtml .= ' ' . $word;

            // Если достигли лимита, добавляем многоточие и выходим из цикла
            if ($wordCount >= $wordLimit) {
                $truncatedHtml .= '...';
                break;
            }
        }

        return $truncatedHtml;
    }


    $truncated_text = truncateHtml($text, 29);
    echo $truncated_text;
    ?>

</body>

</html>
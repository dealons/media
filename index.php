<?php

$str = 'Равным образом социально-экономическое развитие влечет за собой процесс внедрения и модернизации дальнейших направлений развития проекта.
Соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач! 
Задача организации, в особенности же рамки и место обучения кадров играет важную роль в формировании системы масштабного изменения ряда параметров?
Задача организации, в особенности же рамки и место обучения кадров создаёт предпосылки качественно новых шагов для системы обучения кадров, соответствующей насущным потребностям? 
Соображения высшего порядка, а также социально-экономическое развитие способствует повышению актуальности форм воздействия?
Повседневная практика показывает, что постоянное информационно-техническое обеспечение нашей деятельности способствует повышению актуальности системы обучения кадров, соответствующей насущным потребностям!
Разнообразный и богатый опыт начало повседневной работы по формированию позиции в значительной степени обуславливает создание экономической целесообразности принимаемых решений.';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);
$words_count = [];

foreach  ($words as $word)
{

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}

foreach ($words_count as $word => $word_count)
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}". PHP_EOL;

echo "Количество слов: {$count}";


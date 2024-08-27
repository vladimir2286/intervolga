<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>massiv</title>
</head>
<body>
    <?php  
    $data = [
        ['Иванов', 'Математика', 5],
        ['Иванов', 'Математика', 4],
        ['Иванов', 'Математика', 5],
        ['Петров', 'Математика', 5],
        ['Сидоров', 'Физика', 4],
        ['Иванов', 'Физика', 4],
        ['Петров', 'ОБЖ', 4],
    ];
    
    // функция обрабатывает массив и суммирует баллы
    $summary = [];
    foreach ($data as [$student, $subject, $score]) {
        if (!isset($summary[$student])) {
            $summary[$student] = [];
        }
        if (!isset($summary[$student][$subject])) {
            $summary[$student][$subject] = 0;
        }
        $summary[$student][$subject] += $score;
    }
    
    // определил уникальные предметы и сортируем
    $subjects = [];
    foreach ($summary as $grades) {
        $subjects = array_merge($subjects, array_keys($grades));
    }
    $subjects = array_unique($subjects);
    sort($subjects);
    
    // Выводим результат 
    echo '<table border="1">';
    echo '<tr><th>Ученик</th>';
    foreach ($subjects as $subject) {
        echo '<th>' . htmlspecialchars($subject) . '</th>';
    }
    echo '</tr>';
    
    foreach ($summary as $student => $grades) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($student) . '</td>';
        foreach ($subjects as $subject) {
            echo '<td>' . ($grades[$subject] ?? '') . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    
    ?>
</body>
</html>


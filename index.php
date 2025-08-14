<?php
require_once 'classes/Database.php';
require_once 'classes/Theme.php';
require_once 'classes/Subtheme.php';

$db = new Database();

// Получаем параметры из GET или устанавливаем по умолчанию
$selectedThemeId = $_GET['theme'] ?? 1;
$selectedSubthemeId = $_GET['subtheme'] ?? 1;

// Получаем данные из "базы данных"
$themesData = $db->getThemes();
$subthemesData = $db->getSubthemes($selectedThemeId);
$content = $db->getContent($selectedThemeId, $selectedSubthemeId);

// Создаем объекты тем
$themes = [];
foreach ($themesData as $id => $name) {
    $themes[] = new Theme($id, $name);
}

// Создаем объекты подтем для выбранной темы
$subthemes = [];
foreach ($subthemesData as $id => $name) {
    $subthemes[] = new Subtheme($id, $selectedThemeId, $name);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>База знаний</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1>База знаний</h1>
        
        <div class="knowledge-base">
            <div class="column">
                <h2>Темы</h2>
                <ul>
                    <?php foreach ($themes as $theme): ?>
                        <li class="<?= $theme->getId() == $selectedThemeId ? 'active' : '' ?>">
                            <a href="?theme=<?= $theme->getId() ?>&subtheme=1">
                                <?= htmlspecialchars($theme->getName()) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="column">
                <h2>Подтемы</h2>
                <ul>
                    <?php foreach ($subthemes as $subtheme): ?>
                        <li class="<?= $subtheme->getId() == $selectedSubthemeId ? 'active' : '' ?>">
                            <a href="?theme=<?= $subtheme->getThemeId() ?>&subtheme=<?= $subtheme->getId() ?>">
                                <?= htmlspecialchars($subtheme->getName()) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="column">
                <h2>Содержание</h2>
                <div class="content">
                    <?= htmlspecialchars($content) ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
class Database {
    private $data = [
        'themes' => [
            1 => 'Тема 1',
            2 => 'Тема 2'
        ],
        'subthemes' => [
            1 => [
                1 => 'Подтема 1.1',
                2 => 'Подтема 1.2',
                3 => 'Подтема 1.3'
            ],
            2 => [
                1 => 'Подтема 2.1',
                2 => 'Подтема 2.2',
                3 => 'Подтема 2.3'
            ]
        ],
        'contents' => [
            1 => [
                1 => 'Некий текст, привязанный к Подтеме 1.1',
                2 => 'Некий текст, привязанный к Подтеме 1.2',
                3 => 'Некий текст, привязанный к Подтеме 1.3'
            ],
            2 => [
                1 => 'Некий текст, привязанный к Подтеме 2.1',
                2 => 'Некий текст, привязанный к Подтеме 2.2',
                3 => 'Некий текст, привязанный к Подтеме 2.3'
            ]
        ]
    ];

    public function getThemes() {
        return $this->data['themes'];
    }

    public function getSubthemes($themeId) {
        return $this->data['subthemes'][$themeId] ?? [];
    }

    public function getContent($themeId, $subthemeId) {
        return $this->data['contents'][$themeId][$subthemeId] ?? '';
    }
}
?>
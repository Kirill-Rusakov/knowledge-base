<?php
class Subtheme {
    private $id;
    private $themeId;
    private $name;
    
    public function __construct($id, $themeId, $name) {
        $this->id = $id;
        $this->themeId = $themeId;
        $this->name = $name;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getThemeId() {
        return $this->themeId;
    }
    
    public function getName() {
        return $this->name;
    }
}
?>
<?php

class TemplateEngine
{

    public function show($templateName, $templateData = null)
    {
        global $router;
        // je déclare baseUrl ici pour l'avoir dans mes views
        $baseUrl = $_SERVER['BASE_URI'];
        include __DIR__ . '/../views/header.tpl.php';
        include __DIR__ . '/../views/' . $templateName . '.tpl.php';
       
    }
}



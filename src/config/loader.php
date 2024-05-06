<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");;
} // Defines a function to load/require files with less code.

function loadView($viewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value; // Names a variable off $key and adds value from $value as found in the array given.
            }
        }
    }

    require_once(VIEW_PATH . "/{$viewName}.php");;
} 

function loadTemplateView($viewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value; // Names a variable off $key and adds value from $value as found in the array given.
            }
        }
    }

    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null) {
    require_once(TEMPLATE_PATH . "/title.php");
}
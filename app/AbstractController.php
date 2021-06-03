<?php


abstract class abstractController
{

    public function loadModel(string$model){
        require_once (ROOT . '/model/' . $model .'.php');
        return new $model;
    }

    /**
     * @param string $file
     * @param array $data
     */
    public function render(string $file, array $data = []){
        //chaque valeur est associé à une variable
        extract($data);
        ob_start();
        require(ROOT .'/views/' . strtolower(get_class($this)) . '/' .  $file . '.php');
        $contenu_buffer = ob_get_clean();
        require_once (ROOT . '/views/layout/default.php');
    }



}
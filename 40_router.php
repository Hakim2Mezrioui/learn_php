<?php
class Route {
    public static function handle($method = 'GET', $path = '/', $filename = '') {
        $currenturl = $_SERVER['REQUEST_URI'];
        $current_method = $_SERVER["REQUEST_METHOD"];
        
        if($current_method != $method) {
            return false;
        }

        $root = '/';
        $pattern = '#^'.$root.$path.'$#siD';
        
        if(preg_match($pattern, $currenturl)) {
            require_once $filename;
            exit();
        }

        return false;
    }
}
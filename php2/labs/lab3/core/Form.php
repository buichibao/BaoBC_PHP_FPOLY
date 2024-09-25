<?php
namespace app\core;

class Form {
    public static function begin($action , $method){
       echo sprintf('<form action="%s" method="$s">',$action,$method);
       return new Form();
    }

    public static function end(){
        return '</form>';
    }

    public function field($acttribute){
        return new Field($acttribute);
    }
}

?>


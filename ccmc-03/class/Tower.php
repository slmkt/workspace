<?php
require_once("Building.php");
class Tower extends Building{
    /*属性*/
    private $builtYear;
    
    /*コンストラクタ*/
    function __construct(string $name,int $height , int $bulitYear){
        parent :: __construct($name,$height);
        $this->builtYear = $builtYear;
    }
    function getProfile():string{
        $profile ="{$this->name}の高さは{$this->height}mで、{$this->builtYear}　年に開業しました";
        return $profile;
    }
}
?>
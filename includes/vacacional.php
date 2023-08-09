<?php
/*

Vacacional class
Version 1.0
Basic PHP functions forVacacional

*/
session_start();
class vacacional extends bogota{
    public $domain = "https://www.bogotadc.travel/drpl/es/api/v1";
    public $domainv2 = "https://www.bogotadc.travel/drpl/es/api/v2";
    public $generalInfo = array();
    public $language = "";
    public $production = true;

    function __construct($language, $development = false){
        $this->language = $language;
        if ($development) {
            $this->production = false;
        }       
    }

    public function getLastBlogs(){
        $querystr = "lastblog/all/all";
        $result = $this->query($querystr);        
        return $result;
    }
    public function getZonas(){
        $querystr = "zonas_tax";
        $result = $this->query($querystr);        
        return $result;
    }
    public function getBannersCuadrados(){
        $result = $this->query("banners_cuadrados", "", true);
        return $result;
    }
    public function getSlidersHome(){
        $result = $this->query("slider_home", "", true);
        return $result;
    }
    public function getOfertasRel($id_atractivo){
        $result = $this->query("ofertas/".$id_atractivo, "", true);
        return $result;

    }

}



<?php
/**
 * curlModel
 * curl wrapper class 
 *  1. do single or multi request auto.
 *  2. return raw result.
 */

class CurlModel{
    /**
     *urllist
     *responslist
     */
    var $urllist=array();
    var $res=array();
    /**
     * constructor
     *  none
     */
    function curlModel(){
    }  
    
    /**
     * curl execution
     * 
     * if url is empty($num==0), nop .
     * if a url is requested($num==1), it take single curl .
     * if urls is requested($num>1), it take multi curl.
     */
    public function execute(){
        $num=count($this->urllist);
        if($num > 1){
            $this->multi_curl($this->urllist);
            return true;
        }elseif($num===1){
            $this->single_curl($this->urllist[0]);
            return true;
        }else{
            //error?
            return true;
        } 
    }

    /**
     * curl_exec wrapper 
     */
    private function single_request($url=''){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch,CURLOPT_TIMEOUT, 4);
        $this->res[$url]=curl_exec($ch);
    }

    /**
     * curl_multi wrapper 
     */
    private function multiple_request($urllist=array()){
        $mh=curl_multi_init();
        $curl_array=array();
        foreach ($urllist as $i => $url){
            $curl_array[$i]=curl_init($url);
            curl_setopt($curl_array[$i], CURLOPT_RETURNTRANSFER,true);
            curl_multi_add_handle($mh, $curl_array[$i]);
        }
        do{
          curl_multi_exec($mh, $running); 
        }while($running > 0);

        $this->res=array();
        foreach ($urllist as $i => $url){
            $this->res[$i]['data']=curl_multi_getcontent($curl_array[$i]);
            $this->res[$i]['info']=curl_getinfo($curl_array[$i]);
            $this->res[$i]['url']=$urllist[$i];
            curl_multi_remove_handle($curl_array[$i]);
        }
        curl_multi_close($mh);
    }

    /**
     * getter 
     */
    public function getData(){
        return $this->res;
    } 
    
    /**
     * addurl
     */
    public function addUrl($url){
        $this->urllist[]=$url;
    } 
}
?>

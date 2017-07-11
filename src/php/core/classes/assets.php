<?php

class Assets{
    private $assets_url = '';
    private $assets = array();
    public function __construct($assets_url) {
        $this->assets_url = $assets_url;
    }
    public function get_script($url,$ext=false){
        if(!$ext){
            $url = $this->assets_url . $url;
        }
        echo "<script src='$url'></script>";
    }
    public function get_style($url,$ext=false){
        if(!$ext){
            $url = $this->assets_url . $url;
        }
        echo "<link rel='stylesheet' href='$url'/>";
    }
    public function get_image($url,$ext=false,$class='',$alt=''){
        if(!$ext){
            $url = $this->assets_url . $url;
        }
        echo "<img src='$url' class='$class' alt='$alt'/>";
    }
    public function enqueue_style($tag,$url,$ext=false,$priority=0){
        $this->assets['style'][$tag][] = array(
            'url' => $url,
            'ext' => $ext
        );
    }
    public function enqueue_styles($tag,$styles=array()){
        foreach($styles as $style):
            $this->enqueue_style($tag,$style['url'],$style['ext'],$style['priority']);
        endforeach;
    }
    public function enqueue_script($tag,$url,$ext=false,$priority=0){
        $this->assets['script'][$tag][] = array(
            'url' => $url,
            'ext' => $ext
        );
    }
    public function get_styles($tag){
        if(!array_key_exists($tag,$this->assets['style'])) return;
        foreach($this->assets['style'][$tag] as $style):
            $this->get_style($style['url'],$style['ext']);
        endforeach;
    }
    public function get_scripts($tag){
        if(!array_key_exists($tag,$this->assets['script'])) return;
        foreach($this->assets['script'][$tag] as $script):
            $this->get_script($script['url'],$script['ext']);
        endforeach;
    }
}

$assets = new Assets('../assets/');

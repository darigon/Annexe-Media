<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once('functions.php');
require_once('class.php');
require_once('plugins.php');

$_this = new template;

//printR($_this->get_imdb_episodes($_this->single($_this->select('items', array('title' => 'Lie to Me')))));
//printR($_this->update_imdb_episodes(2));
//$_this->get_imdb('Game Of Thrones', false, 'series');
//$_this->save();
$_this->add_action('erf', 'erness');
$_this->add_action('erf', 'i_dont_know', 12);
$_this->add_action('erf', 'something_else', 9);
$_this->apply_action('erf');
//printR($_this);

//printR($_this->get_session('error', true));

/*
http://yiibu.com/

http://slides.html5rocks.com

http://zomigi.com/blog/examples-of-flexible-layouts-with-css3-media-queries/
http://www.themaninblue.com/experiment/ResolutionLayout/
http://particletree.com/examples/dynamiclayouts/

http://spoiledmilk.dk/blog/html5-changing-the-browser-url-without-refreshing-page

http://net.tutsplus.com/tutorials/html-css-techniques/how-to-add-variables-to-your-css-files/

private function cache($content = false) {  
    $cacheFile = "cache/".urlencode($this->cssFile);  
    if (file_exists($cacheFile) && filemtime($cacheFile) > filemtime($this->cssFile)) {  
        return file_get_contents($cacheFile);  
    } else if ($content) {  
        file_put_contents($cacheFile, $content);  
    }  
    return $content;  
} 

public function __construct($cssFile) {  
    if (!file_exists($cssFile)) {  
        header('HTTP/1.0 404 Not Found');  
        exit;  
    }  
  
    // Deals with the Browser cache  
    $modified = filemtime($cssFile);  
    header('Last-Modified: '.gmdate("D, d M Y H:i:s", $modified).' GMT');  
  
    if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {  
        if (strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $modified) {  
            header('HTTP/1.1 304 Not Modified');  
            exit();  
        }  
    }  
  
    $this->cssFile = $cssFile;  
}   
*/
?>
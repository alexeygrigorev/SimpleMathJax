<?php
class SimpleMathJax {
    static function init() {
        global $wgParser;
        $wgParser->setHook('math', 'SimpleMathJax::render');
    }

    static function render($tex) {
        $tex = str_replace('\>', '\;', $tex);
        $tex = str_replace('<', '\lt', $tex);
        $tex = str_replace('>', '\gt', $tex);
        return array("<span class='mathjax-wrapper'>[math]${tex}[/math]</span>", 'markerType' => 'nowiki');
    }

    static function loadJS(&$out, &$skin) {
        $dir = dirname(__FILE__) . '/';
        $snippet = file_get_contents($dir . 'snippet.html', false);
        $out->addScript($snippet);
        return true;
    }
}
?>

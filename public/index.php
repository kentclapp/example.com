<?php
//Build the page metadata
$meta = [];
$meta['title']='tell the world';
$meta['description'] = "The best thing about hello world is the greeting";
$meta['keywords'] = "hello world, hello, world";
$content = <<<EOT

<h1>Hello World</h1>
<p>Welcome to my web site.</p>



EOT;

require '../core/layout.php';

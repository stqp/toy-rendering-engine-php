<?php

require_once 'Node.php';
use \Node\Element;
use \Node\ElementData;


$root = \Node\elem('html');
$body = \Node\elem('body');

array_push($root->children, $body);
array_push($body->children, \Node\text("Hello, world!"));


var_dump($root);
// $body = new Element("body");

//const nodes = (new Parser(0, ))
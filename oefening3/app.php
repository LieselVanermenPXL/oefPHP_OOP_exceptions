<?php
require 'src/textnode/TextNode.php';

use textnode\TextNode;

$n = TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->addNode("d");
$n->addNode("e");
$n->printAll();

print("\n");

try {
    $n->printTextNodeAt(10);
}
catch (Exception $exception) {
    print ($exception->getMessage());
}

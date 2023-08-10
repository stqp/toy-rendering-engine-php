<?php

namespace Node;

class Node {

  public Array $children;

  public NodeType $node_type;

  public function __construct(Array $children, NodeType $node_type) {
    $this->children = $children;
    $this->node_type = $node_type;
  }
}



interface NodeType {}

class Text implements NodeType{

  public string $data;

  public function __construct(string $data) {
    $this->data = $data;
  }
}

class Element implements NodeType{

  public ElementData $elementData;

  public function __construct(ElementData $elementData) {
    $this->elementData = $elementData;
  }
}

class ElementData {

  public string $tag_name;

  public Array $attributes;

  function __construct($tag_name, $attributes){
    $this->tag_name = $tag_name;
    $this->attributes = $attributes;
  }
}



function text(string $data): Node {
  return new Node([], new Text($data));
}

function elem(string $name, Array $attrs = [], Array $children = []) {
  return new Node(
    $children, 
    new Element(
      new ElementData(
        $name, $attrs
      )
    )
  ); 
}














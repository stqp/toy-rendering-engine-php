<?php

namespace Parser;

class Parser {

  public int pos;

  public string input;

  function __construct($pos, $input) {
    $this->pos = $pos;
    $this->input = $input;
  }

  function next_char () {
    return $this->input[$this->pos];
  }

  function starts_with(string $str) {
    return str_starts_with($this->input, $str);
  }

  function eof() {
    return $this->pos >= strlen($this->input);
  }

  function consume_char() {
  }

  function consume_while() string {
    return "";
  }

  function consume_whitespace() {

  }

  function parse_tag_name() string {

  }

  function parse_node() Node {

  }

  function parse_text() Node{

  }

  function parse_element() Node {

  }

  function parse_attr() Array {}

  function parse_attr_value() string {}

  function parse_attributes() AttrMap {}

  function parse_nodes() Array {}


}


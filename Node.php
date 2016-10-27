<?php

class Node{
	public $data;
	public $left = null;
	public $right = null;
	public $parent = null;

	function __construct($data) {
		$this->data = $data;
	}

}

 ?>
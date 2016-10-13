<?php 
require_once 'LinkedList.php';

class Queue extends LinkedList {

	/**
	 * head:
	 * Return the first element of the queue
	 */
	function head() {

		if ($this->firstNode == null) {
			return null;
		} else {
			return $this->firstNode->getData();
		}

	}


}


 ?>
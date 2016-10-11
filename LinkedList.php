<?php 
require_once 'Node.php';

class LinkedList {
	private $firstNode;
	/**
	 * add:
	 * Add a data after the last element
	 */
	function add($data) {
		if ($this->firstNode == null) {
			$this->firstNode = new Node($data);
		} else {
			$current = $this->firstNode;
			while ($current->getNextNode() != null) {
				$current = $current->getNextNode();
			}

			$current->setNextNode(new Node($data));
		}
	}

	/**
	 * prepend:
	 * Add a data before the first element
	 */
	function prepend($data) {
		if ($this->firstNode == null) {
			$this->firstNode = new Node($data);
		} else {
			$node = new Node($data);
			$aux = $this->firstNode;
			$this->firstNode = $node;

			$node->setNextNode($aux); 
		}

	}

	/**
	 * get:
	 * Return the element in the position index
	 */
	function get($index) {
		if ($index < 0 || $this->firstNode == null) {
			return null;
		} else {
			$counter = 0;
			$current = $this->firstNode;

			while ($counter < $index) {
				$counter = $counter + 1;

				if ($current->getNextNode() != null) {
					$current = $current->getNextNode();
				} else {
					return null;
				}

			}

			return $current->getData();
		}

	}

	/**
	 * set:
	 * Set a data in the position index
	 * Replace the existing data in position index
	 */
	function set($index, $data) {
		$current = $this->firstNode;
		$counter = 0;

		while ($counter < $index) {
			$counter = $counter + 1;

			if ($counter->getNextNode() != null) {
				$err = false;
				$current = $current->getNextNode();
			} else {
				# TODO: Add a better error handler
				$err = true;
				echo "Error. The data cannot be setted";
			}

		}

		if (!$err) {
			$current->setData($data);
		}
	}

	/**
	 * shift:
	 * Remove the first element
	 * Return the data of the element removed
	 */
	function shift() {
		if ($this->firstNode == null) {
			return null;
		} else {
			$first = $this->firstNode;
			$second = $this->firstNode->getNextNode();
			$this->firstNode = $second;

			return $first->getData();
		}
	}

	/**
	 * pop:
	 * Delete the last element
	 * Return the data of that element
	 */
	function pop() {
		if ($this->firstNode == null) {
			return null;
		} else {
			$current = $this->firstNode;
			
			while ($current->getNextNode() != null) {
				$current = $current->getNextNode();
				$size = $size + 1;
			}

			$last = $current->getNextNode();
			$current->setNextNode(null);

			return $last->getData();
		}
	}

	/**
	 * size:
	 * Return the size of the List
	 */
	function size() {
		$current = $this->firstNode;
		$size = 0;

		while ($current->getNextNode() != null) {
			$current = $current->getNextNode();
			$size = $size + 1;
		}

		return $size;
	}

	/**
	 * sort:
	 * Return the sorted List
	 * Doesn't modify the original List
	 */
	function sort() {
		$n = $this->size();

		for ($i=0; $i < $n; $i++) { 
			$element = $this->get($i);
			$array->add($element);
		}

		$interval = $n;
		$canChange = true;
		$index = 0;

		while ($interval > 0) {
			$interval = floor($interval / 2);
			$canChange = true;

			while ($canChange) {
				$canChange = false;
				$index = 0;

				while (($index + $interval) < $n) {

					if ($array[$index] > $array[$index + $interval]) {
						$auxElement = $array[$index];
						$array[$index] = $array[$index + $interval];
						$array[$index + $interval] = $auxElement;
						$canChange = true;
					}

					$index = $index + 1;
				}
			}
		}

		return $array;
	}



}
 ?>
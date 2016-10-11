<?php 

class DoubleLinkedList extends LinkedList {
	private $firstNode;

	/**
	 * remove:
	 * Remove the element in the position of the index
	 */
	function remove($index) {
		$current = $this->firstNode;
		$counter = 0;

		if ($index < 0) {
			return null;
		}

		# TODO: Add a case when there is only one element in the List
		while ($current->getNextNode() != null && $counter < $index) {
			$counter = $counter + 1;
			$current = $current->getNextNode();
		}

		$removedData = $current->getData();
		$next = $current->getNextNode();
		$previous = $current->getPreviousNode();
		$previous->setNextNode($next);
		$next->setPreviousNode($previous);

		return $removedData;
	}

	/**
	 * addBefore:
	 * Add an element before the position index
	 */
	# TODO: This function
	function addBefore() {

	}


	/**
	 * addAfter:s
	 * Add an element after the position index
	 */
	# TODO: This function
	function addAfter() {

	}

}
 ?>
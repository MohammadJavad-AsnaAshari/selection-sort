<?php

/**
 * Find the index of the smallest element in an array.
 *
 * @param array $list The array to search.
 * @return int The index of the smallest element.
 */
function findSmallest(array $list)
{
    // Initialize the smallest element and its index.
    $smallestElement = $list[0];
    $smallestIndex = 0;

    // Iterate over the array.
    foreach ($list as $key => $value) {
        // If we find a smaller element, update the smallest element and its index.
        if ($value < $smallestElement) { // Note the change from <= to < to avoid unnecessary swaps.
            $smallestElement = $value;
            $smallestIndex = $key;
        }
    }

    // Return the index of the smallest element.
    return $smallestIndex;
}

/**
 * Sort an array using the selection sort algorithm.
 *
 * @param array $list The array to sort.
 * @return array The sorted array.
 */
function selectionSort(array $list)
{
    // Initialize the sorted array.
    $newList = [];

    // Iterate over the array.
    foreach ($list as $key => $value) {
        // Find the index of the smallest element.
        $smallestElementIndex = findSmallest($list);

        // Add the smallest element to the sorted array.
        $newList[] = $list[$smallestElementIndex];

        // Remove the smallest element from the unsorted array.
        unset($list[$smallestElementIndex]);

        // Re-index the unsorted array.
        $list = array_values($list);
    }

    // Return the sorted array.
    return $newList;
}

// Test the selection sort function.
$list = [10, 2, 6, 3, 1, 16, 9, 5, 4];
var_dump(selectionSort($list));

?>


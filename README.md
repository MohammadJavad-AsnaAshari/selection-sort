# Selection Sort

This repository contains a simple and optimized implementation of the Selection Sort algorithm.

## Description
Selection Sort is a simple sorting algorithm that repeatedly selects the smallest (or largest, depending on the ordering) element from the unsorted part of the array and puts it at the beginning (or end) of the sorted part of the array. The algorithm has a time complexity of O(n^2), where n is the number of elements in the array.

The implementation in this repository uses a helper function findSmallest to find the index of the smallest element in the unsorted part of the array. The smallest element is then added to the sorted array and removed from the unsorted array.

## Usage

1. Clone the repository to you local machine:
    ```bash
    git clone https://github.com/MohammadJavad-AsnaAshari/selection-sort.git
    ```
2. Navigate to the project directory:
    ```bash
    cd selectionSort
    ```
3. To use the Selection Sort function, simply include the `selection_sort.php` file in your project and call the selectionSort function with an array as the argument:

```php
<?php
require_once 'selection_sort.php';

$list = [10, 2, 6, 3, 1, 16, 9, 5, 4];
$sorted_list = selectionSort($list);
print_r($sorted_list);
?>
```

This will output the following:

```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
    [7] => 10
    [8] => 16
)
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

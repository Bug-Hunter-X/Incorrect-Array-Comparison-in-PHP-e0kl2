# Incorrect Array Comparison in PHP

This repository demonstrates a common error in PHP when comparing arrays: the failure to account for different key orders.  The provided `bug.php` file contains a function that attempts to compare arrays but returns `false` even if the arrays have identical values but different key orderings. The `bugSolution.php` provides a corrected version.

## Bug Description
The `foo` function in `bug.php` uses a simple loop to compare array elements. However, it relies on the order of keys, which means if the same key-value pairs appear in different orders, it returns `false`. This is unexpected behavior.

## Solution
The solution provided in `bugSolution.php` demonstrates a more robust approach to comparing arrays, using `ksort` to order the keys before comparison, making the comparison order-independent.
# PHP Strict Comparison Bug

This repository demonstrates a common bug in PHP related to the misuse of strict comparison (`===`). Strict comparison only returns true if both operands are of the same type and have the same value. This can lead to unexpected behavior when comparing values of different types that would be considered equal under loose comparison (`==`).

The `bug.php` file shows an example of a function that incorrectly uses strict comparison, resulting in an unexpected `false` return value.

The `bugSolution.php` file demonstrates how to fix the issue by using loose comparison.  This provides a more flexible and generally expected behavior for comparison of numbers and strings.
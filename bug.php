function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

// This is incorrect because it will cause a strict comparison error when comparing different data types.
// It's better to use loose comparison (==) to handle different data types.
// For example, the following will cause a bug:
foo(1, '1'); // returns false even though 1 == '1'
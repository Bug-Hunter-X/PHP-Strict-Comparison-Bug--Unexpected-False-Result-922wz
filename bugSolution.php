function foo(a, b) {
  // Use loose comparison to handle different data types
  if (a == b) {
    return true;
  } else {
    return false;
  }
}

// This will now correctly return true
echo foo(1, '1'); // returns true
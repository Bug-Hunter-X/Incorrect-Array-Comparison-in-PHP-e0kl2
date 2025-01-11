function foo($a, $b) {
  if ($a === $b) {
    return true;
  }
  if (is_array($a) && is_array($b)) {
    ksort($a);
    ksort($b);
    if (count($a) !== count($b)) {
      return false;
    }
    foreach ($a as $key => $value) {
      if (!array_key_exists($key, $b) || $value !== $b[$key]) {
        return false;
      }
    }
    return true;
  }
  return false;
}

//This function correctly compares arrays with different key orders
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 2, 'a' => 1];
var_dump(foo($array1, $array2)); //true
<?php
class MyClass {
  public function hello() {
    echo "Data MyClass";
  }
}

class AnotherClass extends MyClass {
}

$obj = new AnotherClass();
$obj->hello();
?>
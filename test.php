<?php
echo "Hello world!!\n";

$str1 = 'aaa';
echo $str1;

# コメント
// コメント
// コメント

$num = 123;

$bool = true;

$null = null;
echo $null;
unset($null);
echo $null;

$foo = 'foo';
$Foo = &$foo;
echo "$Foo\n";
$Foo = 'Foo';
echo "$foo\n";

$array = array('1', '2', '3');
echo "$array[0]\n";

$array2 = array(
    'a' => '1',
    'b' => '2',
    'c' => '3',
);
echo $array2["a"];

foreach($array as $value){
    echo "$value\n";
};

$count = 1;
if($count == 1){
    echo "$count\n";
}

$count = 2;
if($count == 1):
    echo "1だよ\n";
else:
    echo "2だよ\n";
endif;

$count++;
echo "$count\n";
$count = $count + 10;
echo "$count\n";

function add($a = 1, $b = 2){
    return $a + $b;
}

echo add();
echo "\n";
echo add(10, 20);
echo "\n";

$v = 10;
function f(){
    //global $v;
    $v = 5;
}
f();
echo "$v\n";

class Person {
    private $name;
    private static $value =10;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public static function getValue(){
        return self::$value;
    }
}

$person = new Person();
$person->setName('Taro');
echo $person->getName();
echo $person->getValue();
--TEST--
Mat __construct
--SKIPIF--
<?php if (!extension_loaded("opencv")) print "skip"; ?>
--FILE--
<?php
use CV\{Mat,Formatter};
use CV\Scalar;
use const CV\{CV_8UC1, CV_8UC3};
$scalar = new Scalar(255,100,100);
$mat = new Mat(5,5,CV_8UC3,$scalar);
//$mat->rows=10;
var_dump($mat);
$mat->print(Formatter::FMT_PYTHON);
$zeros = Mat::zeros(10,10,CV_8UC1);
var_dump($zeros);
$zeros->print(Formatter::FMT_PYTHON);
?>
--EXPECT--
object(CV\Mat)#2 (4) {
  ["type":"CV\Mat":private]=>
  int(16)
  ["rows"]=>
  int(5)
  ["cols"]=>
  int(5)
  ["dims"]=>
  int(2)
}
[[[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]]]
object(CV\Mat)#3 (4) {
  ["type":"CV\Mat":private]=>
  int(0)
  ["rows"]=>
  int(10)
  ["cols"]=>
  int(10)
  ["dims"]=>
  int(2)
}
[[  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0]]
<?php
namespace Liufen;

class Sort
{
    //冒泡排序
    public function bubbleSort($array)
    {

        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp          = $array[$j];
                    $array[$j]     = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }

    //木桶排序
    public function bucketSort($array)
    {
        $count = count($array);
        $min   = min($array);
        $max   = max($array);
        for ($i = 0; $i < $count - 1; $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            } elseif ($array[$i] < $min) {
                $min = $array[$i];
            }
        }
        $buffer = array_fill($min, $max - $min + 1, 0);
        foreach ($array as $array[$i]) {
            $buffer[$array[$i]]++;
        }
        $result = array();
        for ($i = $min; $i < $max + 1; $i++) {
            for ($j = 0; $j < $buffer[$i]; $j++) {
                $result[] = $i;
            }
        }
        return $result;
    }
    //插入排序
    public function insertSort($array)
    {
        $count = count($array);
        for ($i = 1; $i < $count; $i++) {
            $temp = $array[$i];
            for ($j = $i - 1; $j > 0; $j--) {
                if ($temp < $array[$j]) {

                    $array[$j + 1] = $array[$j];
                    $array[$j]     = $temp;
                }
            }
        }
        return $array;
    }
    //快速排序
    public function quickSort($array)
    {
        $count = count($array);
        if ($count > 1) {
            $k = $array[0];
            $x = array();
            $y = array();
            for ($i = 1; $i < $count; $i++) {
                if ($array[$i] <= $k) {
                    $x[] = $array[$i];
                } elseif ($array[$i] > $k) {
                    $y[] = $array[$i];
                }
            }
            echo 333;
            $x = $this->quickSort($x);
            $y = $this->quickSort($y);
            return array_merge($x, array($k), $y);
        } else {
            return $array;
        }
    }
    //选择排序
    public function selectionSort($array)
    {
        $count = count($array);
        for ($i = 0; $i < $count - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
                if ($min != $i) {
                    $temp        = $array[$min];
                    $array[$min] = $array[$i];
                    $array[$i]   = $temp;
                }
            }
        }
        return $array;
    }
}

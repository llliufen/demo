<?php
//定义命名空间
namespace Liufen;

//建立算法类
class Sort
{
    /**
     * 冒泡排序
     * 1：从第一个数字开始，两两对比，交换直到最后一个数。
     * 2：重复1操作，直至排序完成。
     * */
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

    /**
     * 木桶排序
     * 1；找出数组中最小和最大值，设置空木桶。
     * 2：对比空木桶与数组中的值，将数值分别放入对应的桶中。
     * **/
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
    /**
     * 插入排序
     * 以第二个数为基准，依次与前一个数对比，插到符合要求的数之间。
     * */
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
    /**
     * 快速排序
     * 1，以第一个数为基准，后面的数依次与它比较。
     * 2，小的放在第一个数左边，大的放在第一个数右边。
     * 3，分为左右两个数组，再次执行1，2步。直至排序完成。
     * */
    public function quickSort($array)
    {
        $count = count($array);
        if ($count > 1) {
            $k = $array[0];
            $x = array();
            $y = array();
            for ($i = 1; $i < $cnt; $i++) {
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
    /**
     * 选择排序
     * 1：首先假定第一个数是数组中的最小值。
     * 2：然后与后面的数依次比较，比假定的最小值则交换
     * */
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

<?php
namespace filterClass;

class Validate
{
    protected $field;
    protected $message = [];
    public function field($date)
    {
        $this->field = $date;
        return $this;
    }
    public function required($msg = '')
    {
        if (empty($this->field)) {
            $this->message[] = empty($msg) ? $this->field . "不能为空" : $msg;
        }
        return $this;
    }
    public function email($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_EMAIL) === false) {
            $this->message[] = empty($msg) ? "邮箱格式不正确" : $msg;
        }
        return $this;
    }
    public function ip($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_IP) === false) {
            $this->message[] = empty($msg) ? "IP地址不正确" : $msg;
        }
        return $this;
    }
    public function get()
    {
        if (empty($this->message)) {
            return "true";
        }
        return $this->message;
    }
}
$a = new \filterClass\Validate();
echo var_dump($a->field("946856623@qq.com")->email()->get());
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/4
 * Time: 16:40
 */

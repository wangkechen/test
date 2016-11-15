<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    //发送邮件

   /* public function mail()
    {
        Mail::raw('邮件内容 测试',function ($message) {
            $message->from('wang_kechen@126.com', '小王');
            $message->subject('邮件主题 测试');
            $message->to('2739442176@qq.com');
        });
    }*/

    public function mail()
    {
        Mail::send('test.mail', ['name' => 'sean'], function ($message){
            $message->from('wang_kechen@126.com', '小王');
            $message->subject('邮件主题 测试');
            $message->to('2739442176@qq.com');
        });
    }


    //发送邮件队列

    public function queue()
    {
        dispatch(new SendEmail('2739442176@qq.com'));
    }
}
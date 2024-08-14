<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // 自增主鍵
            $table->string('title'); // 標題欄位，最大長度為 255
            $table->text('content'); // 內容欄位，長文本
            $table->boolean('is_published')->default(false); // 發佈狀態，預設為 false
            $table->timestamps(); // 自動添加 created_at 和 updated_at 欄位
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
        // 這行代碼會刪除名為 tasks 的資料表
    }
}

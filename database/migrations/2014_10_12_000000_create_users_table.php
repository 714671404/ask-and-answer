<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //id
            $table->string('name')->unique(); //用户名
            $table->string('email')->unique(); //邮箱
            $table->string('password'); //密码
            $table->string('confirmation_token')->nullable(); //邮箱验证使用的token
            $table->integer('is_active')->default(0); //判断邮箱是否验证 默认值0
            $table->string('avatar'); //头像
            $table->integer('questions_count')->default(0); //发表问题总数 默认值0
            $table->integer('answres_count')->default(0); //回答问题总数 默认值0
            $table->integer('comments_count')->default(0); //评论总数 默认值0
            $table->integer('favorites_count')->default(0); //点赞总数 默认值0
            $table->integer('followers_count')->default(0); //关注总数 默认值0
            $table->integer('followtions_count')->default(0); //被关注拱墅 默认值0
            $table->json('settings')->default(null); //设置用户信心
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

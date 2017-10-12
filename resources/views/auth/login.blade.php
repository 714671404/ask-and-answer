@extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="/css/background.css">
        <link rel="stylesheet" href="/css/top-navigtion.css">
    @endsection


        @section('content')
            <div id="content">
                <div id="content-header">
                    <div class="content-title">
                        <h1 class="">
                            <img src="/images/log.png" alt="">
                        </h1>
                        <h2 class="text-title">与世界分享你的知识、经验和见解</h2>
                    </div>
                    <div class="content-footer">
                        <div class="content-button">
                            <a href="" onclick="return login(1);">注册</a>
                            <a href="" onclick="return login(2);">登陆</a>
                            <span id="content-button-span">&nbsp;</span>
                        </div>
                        <div class="content-input">

                            <!--注册列表-->
                            <form method="post" novalidate="novalidate" action="/user" style="display: block" id="login_1" autocomplete="off" onsubmit="return varification(this);">
                                {{ csrf_field() }}
                                <div class="group-inputs">
                                    <div class="input-wrapper">
                                        <input type="text" name="user" aria-lable="姓名" placeholder="姓名" onclick="is_hidden(0);">
                                        <label class="error"></label>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="email" name="email" aria-lable="邮箱" placeholder="邮箱" onclick="is_hidden(1);">
                                        <label class="error"></label>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="password" name="password" aria-lable="密码" placeholder="密码" onclick="is_hidden(2);">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="button-wrapper">
                                    <button class="sign-button" type="submit">注册</button>
                                </div>
                            </form>

                            <!--登陆列表-->
                            <form method="POST" novalidate="novalidate" action="" style="display: none;" id="login_2" onsubmit="return false">
                                {{ csrf_field() }}
                                <div class="group-inputs">
                                    <div class="input-wrapper">
                                        <input type="text" name="user" aria-label="手机号或邮箱" placeholder="手机号或邮箱" required="">
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="password" name="password" aria-label="密码" placeholder="密码" required="">
                                    </div>
                                </div>
                                <div class="button-wrapper">
                                    <button class="sign-button" type="submit">登录</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endsection

        @section('js')
            <script type="text/javascript" src="/js/three.min.js"></script>
            <script type="text/javascript" src="/js/background.js"></script>
            <script type="text/javascript" src="/js/cornerstone.js"></script>
            <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="/js/login_register.js"></script>
        @endsection

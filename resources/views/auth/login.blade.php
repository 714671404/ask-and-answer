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
                            <form method="post" novalidate="novalidate" action="" style="display: block" id="login_1">
                                <div class="group-inputs">
                                    <div class="input-wrapper">
                                        <input type="text" name="" aria-lable="手机号或邮箱" placeholder="手机号或邮箱" required="">
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="password" name="" aria-lable="密码" placeholder="密码" required="">
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="password" name="" aria-lable="密码" placeholder="密码" required="">
                                    </div>
                                </div>
                                <div class="button-wrapper">
                                    <button class="sign-button" type="submit">注册</button>
                                </div>
                            </form>

                            <!--登陆列表-->
                            <form method="POST" novalidate="novalidate" action="" style="display: none;" id="login_2">

                                <div class="group-inputs">
                                    <div class="input-wrapper">
                                        <input type="text" name="account" aria-label="手机号或邮箱" placeholder="手机号或邮箱" required="">
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
            <script type="text/javascript" src="js/three.min.js"></script>
            <script type="text/javascript" src="/js/background.js"></script>
            <script>
                function login(number)
                {
                    var number = parseInt(number);
                    var span = document.getElementById('content-button-span');
//                    if (document.getElementById('login_1').style.display === "none" && number === 1) {
                        document.getElementById('login_1').style.display="block";
                        if (number === 1) {
                        document.getElementById('login_2').style.display="none";
                        family(span, 1);
                    } else {
                        document.getElementById('login_2').style.display="block";
                        document.getElementById('login_1').style.display="none";
                        family(span, 2);
                    }
                    return false;
                }
                function family(span, number)
                {
                    var span = span;
                    var number = parseInt(number);
                    if (!(number === 1)) {
                        span.style.marginLeft = "82px";
                    } else {
                        span.style.marginLeft = "17px";
                    }
                }
            </script>
        @endsection

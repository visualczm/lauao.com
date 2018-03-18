<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
$Uri = array(
    'default/discover',
);

if ($isNew) {
    $Uri['isNew'] = 1;
}

if ($video_cate_id) {
    $Uri['video_cate_id'] = $video_cate_id;
}

?>
<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="qc:admins" content="20574040667416216375"/>
    <meta property="qc:admins" content="205740460760160116301676375"/>
    <meta name="robots" content="all"/>
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="author" content=""/>
    <meta name="Copyright" content=""/>
    <meta name="renderer" content="webkit">
    <title>作品 - 新片场社区</title>
    <meta name="keywords" content="原创短片,原创视频,微电影,原创作品,创作人,影人社区,影视社区,新媒体电影,新媒体影视,互联网影视,互联网电影,发行,短片,微电影,原创视频,创作人"/>
    <meta name="description" content="汇集新片场创作人短片原创作品,覆盖剧情片,动画,纪录片,广告短片,宣传片,MV,特殊摄影,混剪,配音,栏目,网剧,实验短片,预告片,花絮等丰富类型."/>
    <style>.line-hide-1 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
    </style>
    <link rel="stylesheet"
          href="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/css/new-web/font-icon-v=1519469245.css">
    <link rel="stylesheet"
          href="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/css/new-web/common-v=1520334715.css">
    <!-- <script src="/public/js/wb.js" type="text/javascript" charset="utf-8"></script> -->
    <!-- start Dplus -->
    <script type="text/javascript">!function (a, b) {
            if (!b.__SV) {
                var c, d, e, f;
                window.dplus = b, b._i = [], b.init = function (a, c, d) {
                    function g(a, b) {
                        var c = b.split(".");
                        2 == c.length && (a = a[c[0]], b = c[1]), a[b] = function () {
                            a.push([b].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    }

                    var h = b;
                    for ("undefined" != typeof d ? h = b[d] = [] : d = "dplus", h.people = h.people || [], h.toString = function (a) {
                        var b = "dplus";
                        return "dplus" !== d && (b += "." + d), a || (b += " (stub)"), b
                    }, h.people.toString = function () {
                        return h.toString(1) + ".people (stub)"
                    }, e = "disable track track_links track_forms register unregister get_property identify clear set_config get_config get_distinct_id track_pageview register_once track_with_tag time_event people.set people.unset people.delete_user".split(" "), f = 0; f < e.length; f++) g(h, e[f]);
                    b._i.push([a, c, d])
                }, b.__SV = 1.1, c = a.createElement("script"), c.type = "text/javascript", c.charset = "utf-8", c.async = !0, c.src = "//w.cnzz.com/dplus.php?id=1262268826", d = a.getElementsByTagName("script")[0], d.parentNode.insertBefore(c, d)
            }
        }(document, window.dplus || []), dplus.init("1262268826");</script><!-- end Dplus -->

    <script>

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76608034-3', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/zhugeio-v=1503453383.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/jquery-1.7.1.min.js"></script>
</head>
<body>
<div class="filmplay-black-box feedback-wrap dn">
    <div class="filmplay-inner-box feedback-box">
        <div class="feedback-con creator-con">
            <span class="close icon-close"></span>
            <p class="fs_14 fw_600 c_b_3 line-hide-1">在线提交问题/建议</p>
            <div class="feedback-input-wrap">
				<textarea placeholder="亲，遇到什么麻烦了？
或者告诉我们希望增加什么功能呢？"></textarea>
                <span class="feedback-btn bg-red fs_14 fw_600 c_w_f">发送</span>
            </div>
        </div>
    </div>
</div>
<div class="slide-bar">
    <ul class="slide-bar-list">
        <li class="to-up icon-arrow-top"></li>
    </ul>
</div>
<div class="search-wrap zIndex-2 dn opacity0">
    <div class="search-box">
        <div class="search-con">
            <i class="base-v-center v-center"></i>
            <div class="search-left">
                <span class="search-btn icon-search"></span>
                <form action="/index.php" mothod="get">
                    <input type="hidden" name="app" value="search">
                    <input class="search-input" type="text" name="kw" placeholder="搜索作品、创作人、文章">
                </form>
            </div>
            <span class="search-close-btn icon-close"></span>
        </div>
    </div>
</div>
<!-- header-v2: 透明header； fixed-header: fixed形式显隐； complex-header: 多一个absolute形式显隐； transition: 动画-->
<div class="msg_tip new-msg-tip top" id="h_xm_tip">
    <ul class="msg_tip_m list"></ul>
    <div class="new-msg-tip-close">全部忽略</div>
</div>
<div class="header-common fixed-header   transition">
    <div class="header-con">
        <a class="logo v-center" href="../../../index.html">
            <span class="logo-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="25"
                                         viewBox="0 0 140 38"><path fill="#E74B3B" fill-rule="evenodd"
                                                                    d="M29.973 23.69h-2.302l-.918-3.016-.28-1.05-.28 1.077-.885 2.99h-2.31l-1.225-9.521h1.971l.62 5.378.146 1.472.348-1.321.867-2.896h1.58l.927 2.877.399 1.358.162-1.509.518-5.36h1.878l-1.216 9.522zm-9.147-4.881c-.01.25-.022.483-.038.702h-5.677c0 .42.059.788.175 1.106.116.318.28.586.492.801.213.215.468.38.765.492.298.113.627.169.99.169.42 0 .868-.035 1.348-.108a9.728 9.728 0 0 0 1.49-.351v1.817c-.22.07-.461.132-.722.188-.26.056-.527.106-.799.15a10.683 10.683 0 0 1-1.631.132c-.657 0-1.247-.104-1.768-.31a3.48 3.48 0 0 1-1.325-.914c-.363-.402-.64-.9-.834-1.494-.192-.593-.287-1.28-.287-2.062 0-.774.095-1.48.287-2.114a5.047 5.047 0 0 1 .816-1.63 3.652 3.652 0 0 1 1.28-1.05 3.754 3.754 0 0 1 1.678-.37c.612 0 1.152.105 1.622.314.47.21.865.502 1.182.877.317.374.558.822.722 1.34.164.518.247 1.087.247 1.705 0 .157-.004.36-.013.61zm-9.852 4.882H8.9v-6.205c0-1.042-.351-1.564-1.053-1.564-.351 0-.688.156-1.008.469-.32.312-.658.736-1.016 1.273v6.027H3.75V14.17h1.792l.052 1.406c.176-.244.358-.466.548-.666.19-.2.396-.37.616-.511.222-.14.46-.248.714-.324.256-.074.542-.112.859-.112.442 0 .827.08 1.155.239.33.16.604.385.824.675.222.29.387.64.498 1.05.11.408.166.866.166 1.373v6.39zM24.2 5.377c13.16 7.532 15.582 15.063 7.272 22.597l1.256 4.652-5.442-1.448a54.183 54.183 0 0 1-3.086 1.9C8.066 42.313 0 37.695 0 19.228 0 .76 8.066-3.857 24.2 5.377zm-5.966 10.826a1.477 1.477 0 0 0-.543-.403 1.696 1.696 0 0 0-.668-.131c-.521 0-.95.192-1.283.576-.333.384-.532.927-.595 1.626h3.587c.005-.374-.038-.7-.128-.979a2.003 2.003 0 0 0-.37-.69zm43.66 4.178l-.203 2.88h-5.35l-.547 7.771c-.13 3.07-1.583 4.557-4.36 4.462h-2.478l.202-2.879h1.174c1.123.095 1.686-.478 1.688-1.726l.538-7.629h-5.742l.202-2.879h5.742l.233-3.31H46.6l.212-3.022h3.001a16.475 16.475 0 0 1-.74-4.319h3.524c-.023 1.537.182 2.975.609 4.319h3.393a14.775 14.775 0 0 0 1.217-4.319h3.523a18.248 18.248 0 0 1-1.348 4.319h2.871l-.213 3.022h-5.872l-.233 3.31h5.35zm2.67-16.408h6.785c2.343.097 4.455-.238 6.335-1.007l-.223 3.166c-1.612.673-3.46.961-5.541.864h-3.914l-.366 5.901h9.656l-.212 3.023h-2.871l-1.39 19.718H69.04l1.39-19.718h-3.001l-.64 9.067c-.11 5.279-2.066 8.971-5.869 11.083l.192-2.735c-2.69-1.342-3.968-4.174-3.837-8.492h3.131c-.21 2.975.327 5.231 1.611 6.765.502-.959.856-2.879 1.058-5.758l1.49-21.877zM48.27 24.843h3.002c-.319 4.512-2.403 7.534-6.25 9.067l.162-2.303c1.674-1.532 2.702-3.789 3.086-6.764zM62.807 5.557l-.212 3.022H47.98l.213-3.022h5.22L53.474 3h4.175l-.06 2.557h5.217zm38.502-2.591l-.65 9.212h7.308l-.223 3.166H86.997l-.314 4.462h16.049l-1.115 15.832H97.31l.893-12.666H86.46l-.142 2.015c-.04 5.469-2.867 9.211-8.489 11.227l.202-2.88c2.35-1.244 3.559-3.597 3.629-7.052L83.24 2.966h4.567l-.587 9.212h9.394l.65-9.212h4.044zm25.93 11.658h12.266l-1.074 15.257c-.098 3.837-1.879 5.66-5.343 5.47h-2.872l.202-2.88h1.828c1.479 0 2.227-.766 2.25-2.302l.882-12.522h-2.48c-.595 8.444-3.503 14.537-8.724 18.278l.243-3.454c2.765-3.453 4.418-8.394 4.959-14.824h-3.262c-.67 8.254-3.574 14.298-8.716 18.135l.233-3.31c2.867-3.646 4.52-8.587 4.959-14.825h-2.087l.212-3.023c4.311-1.918 8.086-5.852 11.328-8.635h-9.917l.213-3.023h16.571l-.214 3.023c-4.058 3.262-7.877 7.196-11.457 8.635zm-7.866 11.659l-.213 3.022a31.578 31.578 0 0 1-10.25 2.879l.253-3.599c1.13 0 2.229-.143 3.293-.432l1.095-15.544h-3.001l.213-3.023h3l.467-6.62h3.914l-.467 6.62h2.74l-.212 3.023h-2.74l-1.033 14.682c.888-.289 1.87-.624 2.94-1.008z"/></svg></span>
        </a>
        <ul class="fs_16 fw_300 nav-list clearfix v-center">
            <li class="nav-item select">
                <a href="<?php echo Url::to(['default/index']) ?>">首页</a>
            </li>
            <li class="nav-item hover-elem">
                <i class="icon-arrow-down"></i>
                <a href="<?php echo Url::to(['default/discover']) ?>">发现</a>
                <div class="common-hover-wrap issue-hover-wrap">
                    <div class="hover-box">
                        <ul class="list">
                            <li class="nav-dropdown-item">
                                <a class="nav-sublist-title fs_14 fw_600 c_b_3"
                                   href="<?php echo Url::to(['default/discover']) ?>">
                                    作品<i class="icon-arrow-right"></i>
                                </a>
                                <ul class="nav-sublist">
                                    <?php foreach ($cateList as $key => $cate): ?>
                                        <li class="nav-sublist-item">
                                            <a href="<?php echo Url::to(['default/discover', 'video_cate_id' => $cate['id']]) ?>"><?php echo $cate['cate_name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="line"></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item school ">
                <a class="disabled" href="">学院</a>
            </li>
            <li class="nav-item resource hover-elem">
                <i class="icon-arrow-down"></i>
                <a class="resource-video disabled" href="#">素材</a>
                <!--                <div class="common-hover-wrap issue-hover-wrap">-->
                <!--                    <div class="hover-box">-->
                <!--                        <ul class="list">-->
                <!--                            <ul class="list">-->
                <!--                                <li><a class="resource-video" href="https://resource.xinpianchang.com/video/list">视频</a></li>-->
                <!--                                <li style="position: relative;">-->
                <!--                                    <a href="https://resource.xinpianchang.com/audio/list">音乐</a>-->
                <!--                                </li>-->
                <!--                            </ul>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
            </li>
            <li class="nav-item">
                <a class="disabled" href="" target="_blank">活动</a>
            </li>
            <li class="nav-item">
                <a class="disabled" href="" target="_blank">新片场影业</a>
            </li>
            <li class="nav-item">
                <a class="disabled" href="" target="_blank">魔力短视频</a>
            </li>
            <li class="nav-item hover-elem">
                <i class="icon-arrow-down"></i>
                <a href="javascript:;">更多</a>
                <!--                <div class="common-hover-wrap issue-hover-wrap">-->
                <!--                    <div class="hover-box">-->
                <!--                        <ul class="list">-->
                <!--                            <li><a href="http://www.vmovier.com" target="_blank">V电影</a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
            </li>
            <li class="nav-item newera">
                <a class="disabled" href="" target="_blank">
                    <img src="http://oss-xpc0.xpccdn.com/Upload/boss/2017/12/065a2769d0e9cf1.png">
                </a>
            </li>
        </ul>
        <ul class="fr right-part no-login">
            <li class="search-btn icon-search"></li>
            <li class="reg-btn"><a class="disabled" href="">登录</a></li>
            <li class="login-btn"><a class="disabled" href="">注册</a></li>
        </ul>
    </div>
</div>
<style>

    .dialog-tip {
        position: fixed;
        color: #fff;
        z-index: -1;
        opacity: 0;
        transition: all 1s;
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        -ms-transition: all 1s;
        width: 100%;
        text-align: center;
        background-color: #e74b3b;
        height: 50px;
        line-height: 50px;
        transform: translateY(-50px);
        -webkit-transform: translateY(-50px);
        -moz-transform: translateY(-50px);
        -ms-transform: translateY(-50px);
        top: 0;
        z-index: 100000;
    }

    .dialog-tip .tip-content {
        padding-left: 20px;
        background: url("<?php echo Yii::$app->request->hostInfo; ?>/xinpian/images/error-notice@3x.png") no-repeat;
        background-position: left;
        background-size: 14px;
        display: inline-block;
    }

    .tip-success {
        background-color: #28ca42;
    }

    .tip-success .tip-content {
        background-image: url("<?php echo Yii::$app->request->hostInfo; ?>/xinpian/images/success-notice@3x.png")
    }

    .dialog-tip-show {
        opacity: 1;
        transform: translateY(0px);
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
    }
</style>
<div class="dialog-tip">

    <span class="tip-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览器版本过低，为了正常使用请升级浏览器，推荐使用Chrome浏览器</span>

</div>

<script>
    var noop = noop || function () {
    };
    var templete = $(".dialog-tip");

    window.showDialogTip = function (obj, callback) {
        callback = callback || obj.complete || noop;
        //var type = obj.type || 'ERROR';
        var content = obj.tip || (obj + '');
        var timeout = obj.timeout || 2500;

        // 每次showDialogTip，都要clone一个tip的模板，让每一次吐司都是独立的调用
        var tip = templete.clone().appendTo(document.body);
        tip.find(".tip-content").text(content);

        setTimeout(function () {
            // appendTo body 之后，需要一点时间（20ms,至少经过一个animate looper）来使得css生效
            // 然后再增加dialog-top-show，就能有css动画了

            tip.addClass("dialog-tip-show tip-" + (obj.error ? "" : "success")).css("z-index", 10003);

            setTimeout(function () {
                // timeout 后开始消失css动画
                tip.removeClass("dialog-tip-show");
                setTimeout(function () {
                    // 500ms css小时动画结束后，移出append的tip
                    tip.remove();
                }, 500);
                callback();
            }, timeout);
        }, 20);


    }

</script>
<script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/jquery-qrcode-0.14.0-v=1503453383.js"
        type="text/javascript"></script>

<script type="text/javascript">
    var siteUrl = 'http://www.xinpianchang.com/',
        hoverElem = $(".hover-elem");
    $(function () {
        var searchWrap = $(".search-wrap"),
            searchLeft = $(".search-left"),
            searchBtn = $(".search-btn"),
            searchClose = $(".search-close-btn"),
            searchInput = $(".search-input");
        searchBtn.on("click", function () {
            searchWrap.removeClass("dn opacity0");
            setTimeout(function () {
                searchLeft.find("input").focus();
                searchLeft.addClass("slideLeft")
                searchClose.addClass("show");
                searchInput.focus();
            }, 30);
        });

        searchClose.on("click", searchInit);

        searchWrap.on("click", function (e) {
            if (e.target.className.indexOf("search-wrap") != -1) {
                searchInit();
            }
        });

        function searchInit() {
            searchWrap.addClass("opacity0");
            setTimeout(function () {
                searchWrap.addClass("dn");
            }, 150);
            searchLeft.removeClass("slideLeft")
            searchClose.removeClass("show");
        }

        hoverElem.hover(function (e) {
            var _this = $(this),
                hoverWrap = _this.find(".common-hover-wrap");
            hoverWrap.addClass('visible')

        }, function (e) {
            var _this = $(this),
                hoverWrap = _this.find(".common-hover-wrap");
            hoverWrap.removeClass('visible')
        });

    })

    $(".to-feedback").click(function () {

        if (!loginUserid) {
            $(".feedback-wrap").addClass("dn");
            loginIframe.show();
            return;
        }
        banPageScroll();
        $(".feedback-wrap").removeClass("dn");
    })

    $(".feedback-btn").on('click', function () {
        var _this = $(this)[0];
        var content = $.trim($(".feedback-input-wrap textarea").val());
        if (!_this.flag) {
            _this.flag = true;
            $.post('/index.php?app=aboutus&ac=feedback', {content: content}, function (res) {

                if (res.status == -1) {
                    $(".feedback-wrap").addClass("dn");
                    loginIframe.show();
                    return;
                }

                if (res.status == 1) {
                    showDialogTip({tip: "反馈成功"}, function () {
                        allowPageScroll();
                        $(".feedback-wrap").addClass("dn");
                        $(".feedback-input-wrap textarea").val("");
                        _this.flag = false;
                    });
                } else {
                    showDialogTip({tip: '反馈内容不能为空', error: true});
                    _this.flag = false;
                }
            }, 'json')
        }

    });

    $("#feedback_close_btn_div").click(function () {
        allowPageScroll();
        $(".feedback_post_bg").fadeOut(200);
        $("#feedback_post_textarea_div textarea").val('');
    });

    $(".slide-bar .to-up").on("click", function () {
        $("html,body").animate({scrollTop: 0}, 800);
    });

    checkPosition($(window).height());
    $(window).on("scroll", function () {
        checkPosition($(window).height());
    });

    function checkPosition(pos) {
        if ($(window).scrollTop() > pos) {
            $(".to-up").fadeIn();
        } else {
            $(".to-up").fadeOut();
        }
        ;
    };

    $('.qrcode-box').qrcode({
        render: "canvas",
        width: 200,
        height: 200,
        text: location.href
    });

    $('.to-wap').hover(function () {
        $('#qrcode').removeClass("dn");
    }, function () {
        $('#qrcode').addClass("dn");
    })
</script>
<div class="channel-container">
    <!-- 通栏广告 -->
    <!--<a class="create-man-banner" href="/activity/independence/ts-newye2017" target="_blank"><img src="//oss-xpc0.xpccdn.com/Upload/boss/2018/01/155a5c92f6ca3e0.jpeg"></a>-->

    <div class="choose-bar-v2">
        <div class="type-up">
            <div class="type-mark fs_14 fw_300 c_b_3 mar-bottom">
                <span class="mark">分类</span>
                <div class="type-global">
                    <span class="<?php echo !isset($Uri['video_cate_id']) ? 'cur' : ''; ?>" data-type="cate"
                          data-id="0">
                        <?php
                        if (isset($Uri['video_cate_id'])) {
                            $oldCateId = $Uri['video_cate_id'];
                        }
                        ?>
                        <?php if (isset($Uri['video_cate_id'])) {
                            unset($Uri['video_cate_id']);
                        } ?>
                        <a class="fs_14 fw_300 c_b_3" href="<?php echo Url::to($Uri) ?>">全部作品</a>
                    </span>
                    <?php foreach ($cateList as $key => $cate): ?>
                        <?php $Uri['video_cate_id'] = $cate['id']; ?>
                        <span class="<?php echo isset($oldCateId) && $cate['id'] == $oldCateId ? 'cur' : ''; ?>"
                              data-type="cate">
                        <a class="fs_14 fw_300 c_b_3"
                           href="<?php echo Url::to($Uri) ?>"><?php echo $cate['cate_name']; ?></a>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="type-down">
            <div class="sort-type fw_300 c_b_9">
                <?php
                if (isset($oldCateId)) {
                    $Uri['video_cate_id'] = $oldCateId;
                }
                ?>
                <span class="tab fs_16 v-center <?php echo !isset($Uri['isNew']) ? 'pick select' : '' ?>">
                    <?php
                    if (isset($Uri['isNew'])) {
                        $oldIsNew = 1;
                        unset($Uri['isNew']);
                    }
                    ?>
                    <a href="<?php echo Url::to($Uri) ?>">热门</a>
                </span>
                <i class="i-icon v-center fs_16"></i>
                <span class="tab fs_16 last v-center <?php echo isset($oldIsNew) ? 'pick select' : '' ?>"
                      data-id="addtime" data-type="sort">
                    <?php if (!isset($Uri['isNew'])) {
                        $Uri['isNew'] = 1;
                    } ?>
                    <a href="<?php echo Url::to($Uri) ?>">最新</a>
                </span>

            </div>

        </div>
    </div>
    <div class="channel-con">
        <ul class="video-list">
            <?php foreach ($videoList['list'] as $key => $video): ?>
                <li class="enter-filmplay" data-articleid="10178093" data-videourl="ArticleList">
                    <a class="video-cover" href="#">
                        <img class="" src="<?php echo $video['poster']; ?>">
                        <span class="duration fs_12"><?php echo $video['video_time']; ?></span>
                        <p class="fs_12"><?php echo $video['cate_name']; ?></p>
                        <div class="video-hover-con">
                            <div class="fs_12 fw_300 c_w_f desc line-hide-3"></div>
                            <p class="fs_12"><?php echo $video['created_at']; ?> 发布</p>
                        </div>
                    </a>
                    <div class="video-con">
                        <a href="javascript:;">
                            <p class="fs_14 fw_600 c_b_3 line-hide-1"><?php echo $video['video_name']; ?></p>
                        </a>
                        <div class="video-view fs_12 fw_300 c_b_9"><span class="type">播放</span><span
                                    class="fw_600"><?php echo $video['play_num']; ?></span><span class="i-icon v-center"></span><span
                                    class="type">喜欢</span><span class="fw_600"><?php echo $video['like_num']; ?></span></div>
                        <div class="user-info">
                            <a class="v-center enter-creator-space" href="javascript:;"
                               data-userid="10024182">
                                <span class="name fs_12 fw_300 c_b_3 v-center line-hide-1">
                                    <font class="pick select">作者：</font><?php echo $video['uploader']; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="page-wrap">
            <?= LinkPager::widget([
                'pagination' => $videoList['pages'],
                'nextPageLabel' => '下一页',
                'prevPageLabel' => '上一页',
                'options' => ['class'=>'page']
            ]); ?>
<!--            <div class="page">-->
<!--                <span class="current">1</span>-->
<!--                <a href="../type-0/sort-like/page-2.html">2</a>-->
<!--                <span class="page-points">...</span>-->
<!--                <a href="../type-0/sort-like/page-2673.html" title="尾页">2673</a>-->
<!--                <a href="../type-0/sort-like/page-2.html" title="下一页">-->
<!--                    <span class="arrow-page icon-arrow-right"></span>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</div>
<div class="footer-wrap">
    <div class="footer-inner">
        <div class="footer-con clearfix">
            <div class="left fl">
                <div>
                    <a class="logo-wrap v-center disabled" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="40" viewBox="0 0 140 38">
                            <path fill="#E74B3B" fill-rule="evenodd"
                                  d="M29.973 23.69h-2.302l-.918-3.016-.28-1.05-.28 1.077-.885 2.99h-2.31l-1.225-9.521h1.971l.62 5.378.146 1.472.348-1.321.867-2.896h1.58l.927 2.877.399 1.358.162-1.509.518-5.36h1.878l-1.216 9.522zm-9.147-4.881c-.01.25-.022.483-.038.702h-5.677c0 .42.059.788.175 1.106.116.318.28.586.492.801.213.215.468.38.765.492.298.113.627.169.99.169.42 0 .868-.035 1.348-.108a9.728 9.728 0 0 0 1.49-.351v1.817c-.22.07-.461.132-.722.188-.26.056-.527.106-.799.15a10.683 10.683 0 0 1-1.631.132c-.657 0-1.247-.104-1.768-.31a3.48 3.48 0 0 1-1.325-.914c-.363-.402-.64-.9-.834-1.494-.192-.593-.287-1.28-.287-2.062 0-.774.095-1.48.287-2.114a5.047 5.047 0 0 1 .816-1.63 3.652 3.652 0 0 1 1.28-1.05 3.754 3.754 0 0 1 1.678-.37c.612 0 1.152.105 1.622.314.47.21.865.502 1.182.877.317.374.558.822.722 1.34.164.518.247 1.087.247 1.705 0 .157-.004.36-.013.61zm-9.852 4.882H8.9v-6.205c0-1.042-.351-1.564-1.053-1.564-.351 0-.688.156-1.008.469-.32.312-.658.736-1.016 1.273v6.027H3.75V14.17h1.792l.052 1.406c.176-.244.358-.466.548-.666.19-.2.396-.37.616-.511.222-.14.46-.248.714-.324.256-.074.542-.112.859-.112.442 0 .827.08 1.155.239.33.16.604.385.824.675.222.29.387.64.498 1.05.11.408.166.866.166 1.373v6.39zM24.2 5.377c13.16 7.532 15.582 15.063 7.272 22.597l1.256 4.652-5.442-1.448a54.183 54.183 0 0 1-3.086 1.9C8.066 42.313 0 37.695 0 19.228 0 .76 8.066-3.857 24.2 5.377zm-5.966 10.826a1.477 1.477 0 0 0-.543-.403 1.696 1.696 0 0 0-.668-.131c-.521 0-.95.192-1.283.576-.333.384-.532.927-.595 1.626h3.587c.005-.374-.038-.7-.128-.979a2.003 2.003 0 0 0-.37-.69zm43.66 4.178l-.203 2.88h-5.35l-.547 7.771c-.13 3.07-1.583 4.557-4.36 4.462h-2.478l.202-2.879h1.174c1.123.095 1.686-.478 1.688-1.726l.538-7.629h-5.742l.202-2.879h5.742l.233-3.31H46.6l.212-3.022h3.001a16.475 16.475 0 0 1-.74-4.319h3.524c-.023 1.537.182 2.975.609 4.319h3.393a14.775 14.775 0 0 0 1.217-4.319h3.523a18.248 18.248 0 0 1-1.348 4.319h2.871l-.213 3.022h-5.872l-.233 3.31h5.35zm2.67-16.408h6.785c2.343.097 4.455-.238 6.335-1.007l-.223 3.166c-1.612.673-3.46.961-5.541.864h-3.914l-.366 5.901h9.656l-.212 3.023h-2.871l-1.39 19.718H69.04l1.39-19.718h-3.001l-.64 9.067c-.11 5.279-2.066 8.971-5.869 11.083l.192-2.735c-2.69-1.342-3.968-4.174-3.837-8.492h3.131c-.21 2.975.327 5.231 1.611 6.765.502-.959.856-2.879 1.058-5.758l1.49-21.877zM48.27 24.843h3.002c-.319 4.512-2.403 7.534-6.25 9.067l.162-2.303c1.674-1.532 2.702-3.789 3.086-6.764zM62.807 5.557l-.212 3.022H47.98l.213-3.022h5.22L53.474 3h4.175l-.06 2.557h5.217zm38.502-2.591l-.65 9.212h7.308l-.223 3.166H86.997l-.314 4.462h16.049l-1.115 15.832H97.31l.893-12.666H86.46l-.142 2.015c-.04 5.469-2.867 9.211-8.489 11.227l.202-2.88c2.35-1.244 3.559-3.597 3.629-7.052L83.24 2.966h4.567l-.587 9.212h9.394l.65-9.212h4.044zm25.93 11.658h12.266l-1.074 15.257c-.098 3.837-1.879 5.66-5.343 5.47h-2.872l.202-2.88h1.828c1.479 0 2.227-.766 2.25-2.302l.882-12.522h-2.48c-.595 8.444-3.503 14.537-8.724 18.278l.243-3.454c2.765-3.453 4.418-8.394 4.959-14.824h-3.262c-.67 8.254-3.574 14.298-8.716 18.135l.233-3.31c2.867-3.646 4.52-8.587 4.959-14.825h-2.087l.212-3.023c4.311-1.918 8.086-5.852 11.328-8.635h-9.917l.213-3.023h16.571l-.214 3.023c-4.058 3.262-7.877 7.196-11.457 8.635zm-7.866 11.659l-.213 3.022a31.578 31.578 0 0 1-10.25 2.879l.253-3.599c1.13 0 2.229-.143 3.293-.432l1.095-15.544h-3.001l.213-3.023h3l.467-6.62h3.914l-.467 6.62h2.74l-.212 3.023h-2.74l-1.033 14.682c.888-.289 1.87-.624 2.94-1.008z"/>
                        </svg>
                    </a>
                    <span class="v-center fs_14 c_b_3">用作品打动世界！</span>
                </div>
                <p class="fs_12 c_b_9 fw_300">
                    新片场是国内专业的影视创作人社区，汇聚众多优秀创作人，提供作品展示、项目交流、拍摄制作机会等影视行业服务。在这里，你可以找到合适的创作人。在这里，用作品打动世界！</p>
                <!-- <p class="record">京ICP备14003808号-1&nbsp;&nbsp;京公网安备11010802013821号</p> -->
            </div>
            <div class="right fr clearfix">
                <div class="column-item fl">
                    <p class="title fs_16 c_b_3 fw_600">关于</p>
                    <ul class="list fs_12 fw_300">
                        <li><a target="_blank" class="disabled">关于我们</a></li>
                        <li><a target="_blank" class="disabled">使用帮助</a></li>
                        <li><a target="_blank" class="disabled">加入我们</a></li>
                        <li><a target="_blank" class="disabled">责任声明</a></li>
                    </ul>
                </div>
                <div class="column-item fl">
                    <p class="title fs_16 c_b_3 fw_600">活动</p>
                    <ul class="list fs_12 fw_300">
                        <li><a target="_blank" class="disabled">NEW ERA 青年电影季</a></li>
                        <li><a target="_blank" class="disabled">创作吧少年</a>
                        </li>
                        <li><a target="_blank" class="disabled">V电影开放日</a>
                        </li>
                        <li><a target="_blank" class="disabled">更多活动</a></li>
                    </ul>
                </div>
                <div class="column-item fl">
                    <p class="title fs_16 c_b_3 fw_600">新片场集团</p>
                    <ul class="list fs_12 fw_300">
                        <li><a target="_blank" class="disabled">新片场社区</a></li>
                        <li><a target="_blank" class="disabled">新片场影业</a></li>
                        <li><a target="_blank" class="disabled">魔力短视频</a></li>
                        <li><a target="_blank" class="disabled">魔力短视频营销</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="bottom-con">
                <span class="copyright">Copyright © 2017 - 2018 新片场. All rights reserved.</span>
                <span class="copyright">京ICP备14003808号-1</span>
                <span class="copyright"><a target="_blank" class="disabled"><img
                                src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/images/ba-icon.png"><p>京公网安备11010102002903号</p></a></span>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/jquery.cookie-v=1503453383.js"></script>
<script>
    $('.first').hover(function () {
        $(this).parent().children().first().css({borderBottom: '7px solid #454545'});
    }, function () {
        $(this).parent().children().first().css({borderBottom: '7px solid #323232'});
    });
</script>
<script>
    var PASSPORT_ORIGIN = "https://passport.xinpianchang.com";
</script>
<script>
    var hideCode;
    $('.follow-wx').hover(function () {
        $(this).parent().parent().siblings('.wx-qr').css('display', 'block');
        $(this).next(".follow-wx-tri").css('display', 'block');
    }, function () {
        $(this).parent().parent().siblings('.wx-qr').css('display', 'none');
        $(this).next(".follow-wx-tri").css('display', 'none');
    });
    $('.followus').hover(function () {
        $(this).siblings('.wx-qr-follow').css('display', 'block');
    }, function () {
        hideCode = setTimeout(function () {
            $(".wx-qr-follow").hide();
        }, 300);
        $(this).siblings('.wx-qr-follow').css('display', 'none');
    });

</script>
<script>
    var userid = 0;
    if (userid) {
        $('.needLogin').removeClass('needLogin');
    }
    ;
    //evdata(userid);
    $("#feedBack .feedback_icon").click(function () {
        $(".feedback_post_bg").fadeIn(200);
        $("#feedback_post_textarea_div textarea").focus(function () {
            $(this).val('');
        })
        $("#feedback_action_btn_div").bind('click', function () {
            var content = $.trim($("#feedback_post_textarea_div textarea").val());
            if (content && content != '请提供你宝贵的建议，让我们做得更好！') {
                $.post(siteUrl + 'index.php?app=aboutus&ac=feedback', {content: content}, function (re) {
                    if (re.status) {
                        $("#feedback_post_textarea_div").hide();
                        $("#feedback_post_succeed_div").show();
                        $("#feedback_action_btn_div").hide();
                    }
                }, 'json')
                setTimeout(function () {
                    $(".feedback_post_bg").hide();
                    $("#feedback_post_textarea_div").show();
                    $("#feedback_post_succeed_div").hide();
                    $("#feedback_action_btn_div").show();
                    $("#feedback_post_textarea_div textarea").val('');
                }, 3000)
            } else {

            }
        })
    })
    $(".login_close_footer").click(function () {
        $(".login-guide").remove();
        var date = new Date();
        date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000)); //三天后的这个时候过期
        $.cookie('login-guide', 1, {path: '/', expires: date});
    })

</script>
<script type="text/javascript">
    function sns_conform(title, content, next_func) {
        var conformDoText = arguments[3] ? arguments[3] : '确定';
        $("#snsModalLabel").text(title);
        $("#snsModalContent").text(content);
        $("#conformDo").text(conformDoText);
        $('#snsModal').modal('show');
        $('#conformDo').bind('click', function () {
            $('#snsModal').modal('hide');
            next_func();
        });

    }
</script>
<!-- <script src="/<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/common.js?v=1507725884" type="text/javascript"></script> -->

<!--[if IE 6]>
<script src="http://letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
<script type="text/javascript">
    $(document).ready(function () {
        /*
        $('#wx2wm').hover(function(){
             $(".erweima").show();
        },function(){
             $(".erweima").hide();
        });
        */
        $("#xma_search").bind("click", function () {
            var conVal = $('#search').val();
            if (conVal == '') {
                var pace = 600;
                $('#search').css('backgroundColor', '#D9EDF7').animate({opacity: 0.2}, pace).animate({opacity: 1}, pace, function () {
                    $('#search').css('backgroundColor', '#fff');
                });
                return;
            }
            else
                $('#search_btn').click();
        });
        /* 绑定search input框的回车按下按钮。 */
        $("#search").bind("keyup", function (event) {
            if (event.keyCode == 13) {
                var conVal = $.trim($('#search').val());
                if (conVal == '') {
                    var pace = 600;
                    $('#search').css('backgroundColor', '#D9EDF7').animate({opacity: 0.2}, pace).animate({opacity: 1}, pace, function () {
                        $('#search').css('backgroundColor', '#fff');
                    });
                    return false;
                } else {
                    $('#search_btn').click();
                }
            }
        });
    });

</script>

<script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/baidu_persona-v=1503453382.js"></script>
<!-- 百度自动推送 -->
<script>
    $(".disabled").attr("disabled", true);
    $(".disabled").css("pointer-events", "none");
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>


<script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/artDialog/artDialog.min-v=1503453382.js"></script>
<script src="<?php echo Yii::$app->request->hostInfo; ?>/xinpian/js/artDialog/artDialog.plugins.min-v=1503453382.js"></script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\MrF\FyNavigation\public/../application/index\view\index\index.html";i:1586749130;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <script async src = "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" >
    </script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8550836177608334",
        enable_page_level_ads: true
    });
    </script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?c05bb16ea908292af9f6c513087a1cc3";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="viggo" />
    <title><?php echo $info['title']; ?></title>
    <meta name="keywords" content="<?php echo $info['keywords']; ?>">
    <meta name="description" content="<?php echo $info['description']; ?>">
    <link rel="shortcut icon" href="<?php echo $info['icon']; ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="/static/index/assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="/static/index/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/index/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/static/index/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/static/index/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/static/index/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/static/index/assets/css/nav.css">
    <script src="/static/index/assets/js/jquery-1.11.1.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="page-body">
    <!-- skin-white -->
    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html" class="logo-expanded">
                            <img src="<?php echo $info['logo']; ?>" width="100%" alt="" />
                        </a>
                        <a href="index.html" class="logo-collapsed">
                            <img src="<?php echo $info['logo_collapsed']; ?>" width="40" alt="" />
                        </a>
                    </div>
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="linecons-cog"></i>
                        </a>
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                    <?php foreach($type_list as $tl): ?>
                    <li>
                        <a href="#<?php echo $tl['type_name']; ?>" class="smooth">
                            <i class="<?php echo $tl['menu_icon']; ?>"></i>
                            <span class="title"><?php echo $tl['type_name']; ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    
                    <li>
                        <a href="/about.html">
                            <i class="linecons-heart"></i>
                            <span class="tooltip-blue">关于本站</span>
                            <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <nav class="navbar user-info-navbar" role="navigation">
                <!-- User Info, Notifications and Menu Bar -->
                <!-- Left links for user info navbar -->
                <ul class="user-info-menu left-links list-inline list-unstyled">
                    <li class="hidden-sm hidden-xs">
                        <a href="#" data-toggle="sidebar">
                            <i class="fa-bars"></i>
                        </a>
                    </li>
                    <li class="dropdown hover-line language-switcher">
                        <a href="../cn/index.html" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/static/index/assets/images/flags/flag-cn.png" alt="flag-cn" /> Chinese
                        </a>
                        <ul class="dropdown-menu languages">
                            
                            <li class="active">
                                <a href="../cn/index.html">
                                    <img src="/static/index/assets/images/flags/flag-cn.png" alt="flag-cn" /> Chinese
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="user-info-menu right-links list-inline list-unstyled">
                    <li class="hidden-sm hidden-xs">
                        <a href="https://github.com/Mr-FY/WebStackPage-ThinkPHP5" target="_blank">
                            <i class="fa-github"></i>  GitHub
                        </a>
                    </li>
                </ul>
                <!-- <a href="https://github.com/Mr-FY/WebStackPage-ThinkPHP5" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a> -->

            </nav>


            <!-- 常用推荐 -->
            <?php foreach($list as $sumlist): ?>
            <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="<?php echo $sumlist['type_name']; ?>"></i><?php echo $sumlist['type_name']; ?></h4>
            <div class="row">
            <?php if(empty($sumlist['arr'])): else: foreach($sumlist['arr'] as $mlist): foreach($mlist as $li): ?>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo $li["link_address"]; ?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $li['link_address']; ?>">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="<?php echo $li['link_icon']; ?>" class="lozad img-circle" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong><?php echo $li['link_name']; ?></strong>
                                </a>
                                <p class="overflowClip_2"><?php echo $li['link_note']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endforeach; endif; ?>
            </div>
            <br />
            <?php endforeach; ?>
            
            <!-- END 常用推荐 -->

            
            <!-- Main Footer -->
            <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
            <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
            <!-- Or class "fixed" to  always fix the footer to the end of page -->
            <footer class="main-footer sticky footer-type-1">
                <div class="footer-inner">
                    <!-- Add your copyright text here -->
                    <div class="footer-text">
                        &copy; 2017-2020
                        <a href="https://github.com/WebStackPage/WebStackPage.github.io"><strong>WebStack</strong></a> design by <a href="http://viggoz.com" target="_blank"><strong>Viggo</strong></a> | 
                        <a href="https://github.com/Mr-FY/WebStackPage-ThinkPHP5"><strong>WebStack-ThinkPHP5</strong></a>
                        Back-end develop by <a href="https://www.fyovo.com" target="_blank"><strong>风影OvO</strong></a>
                        <!-- 保留版权信息是对免费开源的开发者最大的尊重 -->
                        <!-- Retaining copyright information is the greatest respect for free and open source developers -->
                        <!--  - Purchase for only <strong>23$</strong> -->
                    </div>
                    <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- 锚点平滑移动 -->
    <script type="text/javascript">
    $(document).ready(function() {
         //img lazy loaded
         const observer = lozad();
         observer.observe();

        $(document).on('click', '.has-sub', function(){
            var _this = $(this)
            if(!$(this).hasClass('expanded')) {
               setTimeout(function(){
                    _this.find('ul').attr("style","")
               }, 300);
              
            } else {
                $('.has-sub ul').each(function(id,ele){
                    var _that = $(this)
                    if(_this.find('ul')[0] != ele) {
                        setTimeout(function(){
                            _that.attr("style","")
                        }, 300);
                    }
                })
            }
        })
        $('.user-info-menu .hidden-sm').click(function(){
            if($('.sidebar-menu').hasClass('collapsed')) {
                $('.has-sub.expanded > ul').attr("style","")
            } else {
                $('.has-sub.expanded > ul').show()
            }
        })
        $("#main-menu li ul li").click(function() {
            $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
            $(this).addClass('active'); // 添加当前元素的样式
        });
        $("a.smooth").click(function(ev) {
            ev.preventDefault();

            public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
            ps_destroy();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 30
            }, {
                duration: 500,
                easing: "swing"
            });
        });
        return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
        $("#main-menu li").each(function() {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        e.preventDefault();
        href = $(this).attr("href");
        pos = $(href).position().top - 30;
    });
    </script>
    <!-- Bottom Scripts -->
    <script src="/static/index/assets/js/bootstrap.min.js"></script>
    <script src="/static/index/assets/js/TweenMax.min.js"></script>
    <script src="/static/index/assets/js/resizeable.js"></script>
    <script src="/static/index/assets/js/joinable.js"></script>
    <script src="/static/index/assets/js/xenon-api.js"></script>
    <script src="/static/index/assets/js/xenon-toggles.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="/static/index/assets/js/xenon-custom.js"></script>
    <script src="/static/index/assets/js/lozad.js"></script>
</body>

</html>

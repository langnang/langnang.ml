<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
  <title>DuxCms说明 | DuxCms 2.0 官方文档中心</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta name="description" content="DuxCms2.0的模板开发、二次开发以及是用说明">
  <meta name="keywords" content="DuxCms,DuxCms手册,DuxCms开发,DuxCms模板,DuxCms使用">
  <meta name="generator" content="GitBook 1.5.0">
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="gitbook/images/apple-touch-icon-precomposed-152.png">
  <link rel="shortcut icon" href="gitbook/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/resources/views/mdms/css/style.css" tppabs="http://doc.duxcms.com/gitbook/style.css">
  @if (isset($prev) && !empty($prev))
  <link rel="prev" href="./{{$prev}}" />
  @endif
  @if (isset($next) && !empty($next))
  <link rel="next" href="./{{$next}}" />
  @endif
</head>

<body>
  <div class="book" data-level="0" data-basepath="." data-revision="1424779651902">
    @include('mdms.sidebar')
    @section('content')
    <div class="book-body">
      <div class="body-inner">
        <div class="book-header clearfix">
          <!-- Actions Left -->
          <a href="#" class="btn pull-left toggle-summary" aria-label="Toggle summary"><i class="fa fa-align-justify"></i></a>
          <a href="#" class="btn pull-left toggle-search" aria-label="Toggle search"><i class="fa fa-search"></i></a>
          <div id="font-settings-wrapper" class="dropdown pull-left">
            <a href="#" class="btn toggle-dropdown" aria-label="Toggle font settings"><i class="fa fa-font"></i>
            </a>
            <div class="dropdown-menu font-settings">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>
              <div class="buttons">
                <button type="button" id="reduce-font-size" class="button size-2">A</button>
                <button type="button" id="enlarge-font-size" class="button size-2">A</button>
              </div>
              <div class="buttons font-family-list">
                <button type="button" data-font="0" class="button">Serif</button>
                <button type="button" data-font="1" class="button">Sans</button>
              </div>
              <div class="buttons color-theme-list">
                <button type="button" id="color-theme-preview-0" class="button size-3" data-theme="0">White</button>
                <button type="button" id="color-theme-preview-1" class="button size-3" data-theme="1">Sepia</button>
                <button type="button" id="color-theme-preview-2" class="button size-3" data-theme="2">Night</button>
              </div>
            </div>
          </div> <!-- Actions Right -->
          <div class="dropdown pull-right">
            <a href="#" class="btn toggle-dropdown" aria-label="Toggle share dropdown"><i class="fa fa-share-alt"></i>
            </a>
            <div class="dropdown-menu font-settings dropdown-left">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>
              <div class="buttons">
                <button type="button" data-sharing="instapaper" class="button">Instapaper</button>
              </div>
            </div>
          </div>
          <a href="#" target="_blank" class="btn pull-right weibo-sharing-link sharing-link" data-sharing="weibo" aria-label="Share on Weibo"><i class="fa fa-weibo"></i></a>
          <a href="#" target="_blank" class="btn pull-right qq-sharing-link sharing-link" data-sharing="qq" aria-label="Share on QQ"><i class="fa fa-qq"></i></a>
          <div class="dropdown pull-right">
            <a href="#" class="btn qrcode-toggle-dropdown qrcode-sharing-link sharing-link" data-sharing="qrcode" aria-label="Share on QRCode"><i class="fa fa-qrcode"></i></a>
            <div class="dropdown-menu font-settings dropdown-left" id="dropdown-qrcode">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>
              <div class="qrcode" id="qrcode">
                <input type="hidden" name="last_url" id="last_url" value="" />
              </div>
            </div>
          </div>
          <!-- Title -->
          <h1>
            <i class="fa fa-circle-o-notch fa-spin"></i>
            <a href="index.htm" tppabs="http://doc.duxcms.com/">DuxCms 2.0 官方文档中心</a>
          </h1>
        </div>
        <div class="page-wrapper" tabindex="-1">
          <div class="page-inner">
            <section class="normal" id="section-gitbook_1">
              <h1 id="duxcms-">DuxCms 内容管理系统</h1>
              <p>DuxCms 是一款基于PHP/MYSQL开发的、专攻中小内容的高效率管理系统；</p>
              <p>DuxCms 具有良好的兼容性，可完美运行在Window平台和Linux平台，支持Apache、Nginx、IIS，新版兼容IE8+、Chrome、Firefox、Safari、Opera等现代浏览器;</p>
              <p>DuxCms 完全开放源代码，具有良好的开放性、高可扩展性、安全性和透明性，您可以进行二次开发以满足自身需求；</p>
              <p>DuxCms 完全符合企业seo，后台操作简单高效，极其便捷，用户体验极佳，操作模式标准而不另类，降低客户学习与培训成本，简约而不简单；</p>
              <p>DuxCms 内置一套移动终端版前台模板，智能判断PC用户和Wap用户，支持移动设备客户端访问网站时自动判断跳转到移动版面，并支持绑定域名访问（如<a href="javascript:if(confirm('http://m.duxcms.com）；/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://m.duxcms.com）；/'" tppabs="http://m.duxcms.com）；/" target="_blank">http://m.duxcms.com）；</a></p>
              <p>DuxCms 的优良结构能极致发挥 DuxCms 的自由定制灵活度，能够快速高效的完成各种应用的开发和扩展；</p>
              <h1 id="">适用范围</h1>
              <ul>
                <li>
                  <p>公司/新闻站点</p>
                </li>
                <li>
                  <p>个人网址</p>
                </li>
                <li>
                  <p>图片展示类</p>
                </li>
                <li>
                  <p>快速的二次开发</p>
                </li>
              </ul>
              <h1 id="">使用必读</h1>
              <ul>
                <li>
                  <p>本程序比较注重自己动手解决问题，伸手党请勿使用。</p>
                </li>
                <li>
                  <p>对于不懂网站制作的新手请您先通过搜索引擎自学。</p>
                </li>
                <li>
                  <p>群内提问前请先仔细查看手册，全部的标签调用都在这里。</p>
                </li>
                <li>
                  <p>程序无商业支持，但无法对免费用户提供一对一的帮助，如需一对一帮助请购买我们的帮助服务。</p>
                </li>
                <li>
                  <p>如遇BUG，请多次尝试并将详细的错误信息提交给群管理，我们会尽快在GIT版中处理。</p>
                </li>
                <li>
                  <p>DuxCms是一个完整的产品，不会拘泥于各种框架结构，请不要用框架使用者的眼光看待本产品。</p>
                </li>
              </ul>
              <h1 id="">程序交流</h1>
              <ul>
                <li>
                  <p>QQ群：131331864</p>
                </li>
                <li>
                  <p>网址：<a href="javascript:if(confirm('http://www.duxcms.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://www.duxcms.com/'" tppabs="http://www.duxcms.com/" target="_blank">http://www.duxcms.com</a></p>
                </li>
                <li>
                  <p>GIT：<a href="javascript:if(confirm('http://git.oschina.net/duxcms/DuxCms-2.0  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://git.oschina.net/duxcms/DuxCms-2.0'" tppabs="http://git.oschina.net/duxcms/DuxCms-2.0" target="_blank">http://git.oschina.net/duxcms/DuxCms-2.0</a></p>
                </li>
              </ul>
              <h1 id="">系统组件</h1>
              <ul>
                <li>
                  <p>CanPHP3.0 - 国内轻量级快速开发框架 <a href="javascript:if(confirm('http://www.canphp.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://www.canphp.com/'" tppabs="http://www.canphp.com/" target="_blank">www.canphp.com</a></p>
                </li>
                <li>
                  <p>拼图 - 响应式前端CSS开源框架 <a href="javascript:if(confirm('http://www.pintuer.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://www.pintuer.com/'" tppabs="http://www.pintuer.com/" target="_blank">www.pintuer.com</a></p>
                </li>
                <li>
                  <p>DuxBase - 基于CanPHP3.0开发的扩展层 <a href="javascript:if(confirm('http://git.oschina.net/duxcms/DuxBase  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://git.oschina.net/duxcms/DuxBase'" tppabs="http://git.oschina.net/duxcms/DuxBase" target="_blank">http://git.oschina.net/duxcms/DuxBase</a></p>
                </li>
                <li>
                  <p>DuxAdmin - 基于CanPHP3.0开发的通用后台系统 <a href="javascript:if(confirm('http://git.oschina.net/duxcms/DuxAdmin  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://git.oschina.net/duxcms/DuxAdmin'" tppabs="http://git.oschina.net/duxcms/DuxAdmin" target="_blank">http://git.oschina.net/duxcms/DuxAdmin</a></p>
                </li>
                <li>
                  <p>layer - web弹层组件 <a href="javascript:if(confirm('http://sentsin.com/jquery/layer/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://sentsin.com/jquery/layer/'" tppabs="http://sentsin.com/jquery/layer/" target="_blank">http://sentsin.com/jquery/layer/</a></p>
                </li>
                <li>
                  <p>在此感谢其他被Dux所使用的各种组件等</p>
                </li>
              </ul>
            </section>
          </div>
        </div>
      </div> <a href="function.html" tppabs="http://doc.duxcms.com/function.html" class="navigation navigation-next navigation-unique" aria-label="Next page: 安装与环境"><i class="fa fa-angle-right"></i></a>
    </div>
    @show
  </div>
  <script src="/resources/views/mdms/js/app.js"></script>
  <script src="/resources/views/mdms/js/MathJax.js"></script>
  <script src="/resources/views/mdms/js/plugin.js"></script>
  <script src="/resources/views/mdms/js/plugin-1.js"></script>
  <script>
    require(["gitbook"], function(gitbook) {
      var config = {
        "fontSettings": {
          "theme": null,
          "family": "sans",
          "size": 2
        }
      };
      gitbook.start(config);
    });
  </script>
  <style>
    .copyrights {
      text-indent: -9999px;
      height: 0;
      line-height: 0;
      font-size: 0;
      overflow: hidden;
    }
  </style>
  <div class="copyrights" id="links20210126">
    Collect from <a href="http://www.cssmoban.com/" title="网站模板">模板之家</a>
    <a href="https://www.chazidian.com/" title="查字典">查字典</a>
  </div>
</body>

</html>

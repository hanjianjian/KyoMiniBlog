<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo (C("blogname")); ?>_<?php echo (C("subtitle")); ?></title>
     <!--[if lt IE 9]>
        <script src="/KyoMini/Template/Default/Style/Js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/KyoMini/Template/Default/Style/Css/normalize.css">
    <link rel="stylesheet" href="/KyoMini/Template/Default/Style/Css/style.css">
    <meta name="keywords" content="<?php echo (C("keywords")); ?>" />
    <meta name="description" content="<?php echo (C("description")); ?>">

</head> 
<body>
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name">
                <a id="logo" href="/KyoMini">
                   <?php echo (C("blogname")); ?>
                </a>
                                    <h1><?php echo (C("blogname")); ?></h1>
                            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <a class="current " href="/KyoMini">博客</a>
                    <?php if(is_array($menu)): foreach($menu as $key=>$m): ?><a href="<?php echo ($m["url"]); ?>" title="<?php echo ($m["mname"]); ?>"><?php echo ($m["mname"]); ?></a><?php endforeach; endif; ?>
				</nav>
            </div>
        </div>
    </div>
</header><div id="body">
    <div class="container">
        <div class="col-group"><div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title"><?php echo ($blog["title"]); ?></h1>
			</header>
			<date class="post-meta">
			
                
                <?php echo (date('m.d, Y',$blog["time"])); ?>
                		</date>
			<div class="post-content">
				<?php echo ($blog["content"]); ?>
			</div>
		</article>
		<div id="comments">
        	<span class="widget-title">仅有 1 条评论</span>
    <ol class="comment-list"><li id="comment-29" class="comment-body comment-parent comment-odd">
    <div class="comment-author">
        <img class="avatar" src="picture/4cd9ee4181324deebce7f0d53499db91.gif" alt="羽中" width="32" height="32" />        <cite class="fn"><a href="http://www.jzwalk.com" rel="external nofollow">羽中</a></cite>
    </div>
    <div class="comment-meta">
        <a href="http://pickcho.com/archives/graduation2/#comment-29">May 22nd, 2014</a>
            </div>
    <div class="comment-content">
    <p>过去十年了，天天在做高考的噩梦</p>
    </div>
    <div class="comment-reply">
        <a href="http://pickcho.com/archives/graduation2/?replyTo=29#respond-post-7" rel="nofollow" onclick="return TypechoComment.reply('comment-29', 29);">回复</a>    </div>
    </li>
</ol>                <div id="respond-post-7" class="respond">
        <div class="cancel-comment-reply">
        <a id="cancel-comment-reply-link" href="http://pickcho.com/archives/graduation2/#respond-post-7" rel="nofollow" style="display:none" onclick="return TypechoComment.cancelReply();">取消回复</a>        </div>
    	<span id="response" class="widget-title">添加新评论</span>
    	<form method="post" action="http://pickcho.com/archives/graduation2/comment" id="comment-form">
			<div class="col1">
			<p>
                <textarea rows="8" cols="50" name="text" class="textarea"></textarea>
            </p>
			</div>
			<div class="col2">
                		<p>
                <label for="author" class="required">称呼</label>
    			<input type="text" name="author" id="author" class="text" value="" />
    		</p>
    		<p>
                <label for="mail" class="required">邮箱</label>
    			<input type="email" name="mail" id="mail" class="text" value="" />
    		</p>
    		<p>
                <label for="url">网站</label>
    			<input type="url" name="url" id="url" class="text" placeholder="http://example.com" value="" />
    		</p>
                		<p>
                <button type="submit" class="submit">提交评论</button>
            </p>
			</div>
			<div class="clear"></div>
    	</form>
    </div>
    </div>	</div>
</div>
<div id="secondary">
	<section class="widget">
        <form id="search" method="post" action="./">
			<input type="text" name="s" class="text" placeholder="搜索..." />
			<button type="submit" class="submit icon-search">搜索</button>
        </form>
    </section>
						<section class="widget">
				<h3 class="widget-title">相关文章</h3> 
				<ul class="widget-list">
										<li><a href="http://pickcho.com/archives/graduation/" title="毕业季（一）">毕业季（一）</a></li>
										<li><a href="http://pickcho.com/archives/apr-days/" title="四月">四月</a></li>
						
				</ul>
			</section>
			
</div>		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		&copy; 2014 <a rel="nofollow" href="http://pickcho.com/">Cho's</a>.
	</div>
</footer>
</body>
</html>
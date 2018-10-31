<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
	<head>
		<title>Utilities for ICBC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MYAca1431R5bDDw1fRqNmzXorZ40YrFf"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Utilities<br />
						生活助手</h1>
						<p>基于工行平台的<br />
							一站式生活便民服务网站</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Utilities</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Goods跑腿代购</a></li>
							<li><a href="parking.html">Payments生活缴费</a></li>
							<li><a href="payment.html">Come Parking自助停车</a></li>
						</ul>

                        <?php include "createNav.php" ?>
                    </nav>
                <!--登陆-->
                <div id="loginPart">
                    <div class="overCurtain"></div>
                    <div class="hide-center">
                        <div id="formhead">
                            <button type="button" id="close">X</button>

                        </div>
                        <div id="formbody">
                            <div class="loginUserName">
                                <input id="input-topright-loginInput" name="userName" class="loginInput" placeholder="userName" type="text" value="admin">
                            </div>
                            <div class="loginPassword">
                                <input id="input-bottomright-loginInput" name="password" class="loginInput" placeholder="password" type="password" style="border-bottom-right-radius:5px;">
                            </div>
                            <div id="formfoot">
                                <button id="BSignIn" type="submit">Sign In</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">Oct 14, 2018</span>
									<h2><a href="#">Goods<br />
										跑腿代购</a></h2>
									<p>是否曾经在停车场内为了寻找车位而苦苦兜圈？是否曾经在便利店里为了生活缴费而无聊等待？
										是否曾经在
										在这里，对一切生活的繁琐say no！我们基于工行平台，打造一站式生活便民服务网站——Utilities生活助手。
										Goods为您节省大量时间，让您更自由地支配生活!
									</p>
								</header>

								<!-- Map:bug -->
								<div id="mapG" style="z-index:999;height:500px;weight:500px">

								</div>
								<!--<a href="#" class="image main"><img src="../images/bg.jpg" alt="" /></a>-->
								<ul class="actions special">
									<li><a href="#" class="button large">查找周边</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">全家便利店
										</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/market.png" width="1200px" height="300px" alt="" /></a>
									<p>  全家（国定路店）位于五角场街道国定东路285号，是一家主要负责食品、日用品的销售的多功能便利店。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">超市便利</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">许鲜水果店<</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/vegetable.png" width="1200px" height="300px" alt="" /></a>
									<p>许鲜水果店（五角场店）位于国痒路85号，坚持服务至上的理念，每日给顾客带来最新鲜的水果。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">新鲜果蔬</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">85°C
										</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/bread.png" width="1200px" height="300px" alt="" /></a>
									<p>85°C（三号湾店）位于国定路333号三号湾广场1楼，主要经营咖啡和甜点，希望产品呈现给顾客的是最优质质量、最美味和超值。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">烘培蛋糕</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">味千拉面</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/food.png" width="1200px" height="300px" alt="" /></a>
									<p>味千拉面（三号湾店）位于国定路333号三号湾F102号，是从日本引进的餐饮品牌，主打面食。其招牌猪软骨春笋拉面也跻身网红美食。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">美食餐饮</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">波奇四季ÉPOQUE
									</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/flower.png" width="1200px" height="300px" alt="" /></a>
									<p>波奇四季ÉPOQUE（五角场店）位于政民路301号，是波奇网旗下的高端花艺品牌，严选新鲜优质的花材，业务涵盖花束定制、礼品鲜花、婚礼布置等。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">鲜花绿植</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">入驻商家</span>
										<h2><a href="#">摩尔齿科</a></h2>
									</header>
									<a href="#" class="image fit"><img src="../images/medical.png" width="1200px" height="300px" alt="" /></a>
									<p>摩尔齿科（曲阳路旗舰店）位于曲阳路888号1-2F，致力于为广大市民朋友提供优质的口腔服务，擅长于牙齿种植，牙齿修复，牙齿矫正，牙周炎症治疗等口腔问题解决。
                                    </p>
									<ul class="actions special">
										<li><a href="#" class="button">医药健康</a></li>
									</ul>
								</article>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>

				<!-- Footer For register-->
					<footer id="footer" >
							
						<section>
						<form method="post" action="register.php">
                            <a name="register"><h2>Register注册</h2></a>
							
								<div class="fields">
									<div class="field">
										<label for="name">姓名Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="cardNumber">卡号Card Number</label>
										<input type="number" name="cardNumber" id="cardNumber" />
                                        <p>没有工行卡？<a href="index.php">点此申请</a></p>
									</div>

                                    <div class="field">
                                        <label for="userID">身份证ID number</label>
                                        <input type="number" name="userID" id="userID" />
                                        <hr>
                                    </div>



								</div>
								<ul class="actions">
									<li><input type="submit" value="REGISTER" /></li>
								</ul>
                            

						</section>
						<section class="split contact">
							<section class="alt">
                                <label for="address">家庭住址Address</label>
                                <input type="text" name="address" id="address" />
							</section>
							<section>
                                <label for="phone">手机号码Phone</label>
                                <input type="number" name="phone" id="phone" />
                                <p style="margin:1em;"><a href="index.php">点此获取验证码</a></p>
							</section>

							<section>
                                <h3>其它方式注册<br>
                                other register ways</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon alt fa-weixin"><span class="label">微信Wechat</span></a></li>
									<li><a href="#" class="icon alt fa-qq"><span class="label">QQ</span></a></li>
									<li><a href="#" class="icon alt fa-weibo"><span class="label">微博Weibo</span></a></li>
									<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>


                            <section class="col-4 col-12-small">
                                <h3>注册类型：</h3>
                                <input type="radio" id="demo-priority-low" name="demo-priority" value = "1"checked>
                                <label for="demo-priority-low">用户 For user</label>
                                <input type="radio" id="demo-priority-normal" name="demo-priority" value = "0">
                                <label for="demo-priority-normal">商户 For business</label>
                            </section>
						</section>
						</form>
					</footer>

                <!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Utility for ICBC</li><li>Design: <a href="https://html5up.net">FDU team</a></li></ul>
					</div>

			</div>


		<!-- Scripts -->
		<script type="text/javascript">
            // 百度地图API功能
            var map = new BMap.Map("mapG");    // 创建Map实例
            map.centerAndZoom(new BMap.Point(121.404, 31.915), 13);  // 初始化地图,设置中心点坐标和地图级别
            //添加地图类型控件
            map.addControl(new BMap.MapTypeControl({
                mapTypes:[
                    BMAP_NORMAL_MAP,
                    BMAP_HYBRID_MAP
                ]}));
            map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
            map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
		</script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
            <script src="../assets/js/loginPop.js"></script>

		    <!--<script src="../assets/js/map.js"></script>-->


	</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: huangjiani
 * Date: 2018/10/16
 * Time: 15:08
 */

session_start();
if(empty($_SESSION['userID'])){
    showUnloged();

}else{
    showLoged();
}


function showUnloged(){
    echo '<ul class="icons">
							<li><a class="icon fa-user" id="login"><span class="label">Login</span></a>登陆</li>
							<li><a href="index.php#register" class="icon fa-user-circle" onclick="registerPop()"><span class="label">Register</span></a>注册</li>
							<li><a href="#" class="icon fa-shopping-cart"><span class="label">Cart</span></a>购物车</li>
							<li><a href="#" class="icon fa-sign-out"><span class="label">Logout</span></a>登出</li>
						</ul>';
}


function showLoged(){
    echo '
    <ul class="icons">
							<li><a href="#" class="icon fa-user"><span class="label">Login</span></a>'.$_SESSION['userName'].'</li>
							<li><a href="#" class="icon fa-shopping-cart"><span class="label">Cart</span></a>购物车</li>
							<li><a href="#" class="icon fa-sign-out"><span class="label">Logout</span></a>登出</li>
						</ul>
    ';




}
//<div class="login-button">
//            <button id="login"> 登录</button>
//        </div>
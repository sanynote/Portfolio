<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>login</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{color:#111; font-family: Helvetica Now Display, Helvetica, helvetica, sans-serif !important; background-image:url("img/index/log.webp");
        background-repeat:no-repeat; background-size:100%; background-position:center 50%;}

        a:link,a:visited{text-decoration:none; color:#333;}
        a:hover, a:focus{text-decoration:underline;}

        #wrap{width:100%;}

        #headerArea{width:100%; height:100px; background-color:#000;}
        #header{height:100%; line-height:100px; text-align:center; font-size:40px; font-weight:900; color:#fff; }

		#container{width:100%;}
        form{margin:0 auto; width:450px; height:520px; margin-top:50px; padding:50px 80px; background-color:#fff;}
        fieldset{border:none;}
        legend{width:100%; text-transform:capitalize; text-align:center; font-weight:900; font-size:45px; font-family:"Avenir Next", Avenir, -apple-system, BlinkMacSystemFont, Roboto, Helvetica, sans-serif}

        input{width:100%; height:75px; text-indent:15px; font-size:medium; margin-top:20px; outline:none;}
        .btn input{text-align:center; background-color:#000; color:#fff; font-size:20px;}
        .btn input:hover{opacity:0.8;}

        #container .lost{margin:30px 0 15px;text-align:center; font-size:25px; }
	</style>
 </head>
 <body>
	<div id="wrap">
        <header id="headerArea">
            <div id="header">
                LUSH
            </div>
        </header>
        <div id="container">
            <form action="04_login_control.php" method="post">
                <fieldset>
                    <legend>my lush account</legend>
                    <p>
                        <input id="userid" type="text" name="userid" placeholder="lush@gmail.com"/>
                    </p>
                    <p>
                        <input id="userpass" type="password" name="userpass" placeholder="your password"/>
                    </p>

                    <p class="lost">
                        <a href="05_lost.php" title="비밀번호분실">
                            Don't remember your password?
                        </a>
                    </p>

                    <p class="btn">
                        <input id="logIn" type="submit" name="logIn" value="Log In"/>
                    </p>
                    <p class="btn">
						<a href="01_join_form.php" title="회원가입 페이지">
							<input id="signUp" type="button" name="signUp" value="Sign Up"/>
						</a>
                    </p>
                    
                </fieldset>
                

            </form>
        </div>
    </div>
 </body>
</html>
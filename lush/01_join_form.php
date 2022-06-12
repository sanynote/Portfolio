<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>join_lush</title>
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

        input{width:100%; height:50px; text-indent:15px; font-size:medium; margin-top:23px; outline:none;}

        /* 아이디 중복 체크 */
        #idChkDesc{width:82%; height:20px; float:left; text-align:center; padding:10px 5px; text-align:right;}

		/*아이디 중복 체크 옆에 버튼*/
		#idChkBtn{width:70px; height:32px; text-align:center; text-indent:0; margin:5px 0; font-size:15px;}

        #useremail{margin-bottom:25px; }

		/* name, password 개별작업 */
		#username, #userpass{width:48.6%; display:inline-block;}

		/* 체크박스 부분 */

		.check{width:100%; height:35px; margin-top:10px;}
		.check input{width:5%; height:100%; margin-top:0; float:left;}
		.check label{width:90%; height:100%;  margin-left:5%; float:left; font-size:13px;}

		.check:after{display:block; content:""; clear:both;}

		/* btnArea 작업*/
		.btnArea{width:370px; margin:0 auto;}
		.btnArea p{text-align:center; color:#fff; font-size:20px; width:49%; display:inline-block;}
		.btnArea p:hover{opacity:0.8;}
		.btnArea input{border:none;background-color:#000; color:#fff;text-indent:0;}

	</style>

	<!--[1] 아이디 중복관련 script-->
	<script>
		function idChkBtns(){
			
			var userid = document.getElementById("userid");

			var idChkDesc = document.getElementById("idChkDesc");
		
			if(userid.value =="" ){
				userid.focus();
				idChkDesc.innerHTML="<strong style='color:red;'>아이디 필수입력</strong>";
			}
			else{

				xmlhttp = new XMLHttpRequest();

				xmlhttp.open("GET","02_idDouble.php?q="+userid.value,true);

				xmlhttp.onreadystatechange = function(){
					
					if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
						
						idChkDesc.innerHTML = xmlhttp.responseText;
					}
				
				};
				
				xmlhttp.send();
			}
		}
	</script>


 </head>
 <body>
	<div id="wrap">
        <header id="headerArea">
            <div id="header">
                LUSH
            </div>
        </header>
        <div id="container">
            <form action="02_join_control.php" method="post">
                <fieldset>
                    <legend>Sign Up</legend>
                    <p>
                        <input id="userid" type="text" name="userid" placeholder="lush@gmail.com"/>
                        <span id="idChkDesc">※ ID duplicate check</span>
			            <input id="idChkBtn" type="button" value="check" onclick="idChkBtns();"/>
                    </p>
                    <p>
                        <input id="userpass" type="password" name="userpass" placeholder="password :-)"/>
                        <input id="username" type="text" name="username"placeholder="name :-0"/>
                    </p>
                    <p>
                        <input id="useremail" type="email" name="useremail" placeholder="email :-D" />
                    </p>

                    <p class="check">
                        <input id="agreement0" type="radio" name="agreement0"/>
						<label for="agreement0">Sign up to the #LushCommunity newsletter. We won't sell your information to any third parties and you can unsubscribe at any time</label>
                    </p>
					<p class="check">
                        <input id="agreement1" type="radio" name="agreement1"/>
						<label for="agreement1">By signing up you agree to our terms and conditions and privacy notice.</label>
                    </p>
					
					<div class="btnArea">
						<p>
							<input id="signUp" type="submit" name="signUp" value="Sign Up"/>
						</p>
						<p>
							<a href="index.php" title="로그인페이지">
								<input id="logIn" type="button" name="logIn" value="log in"/>
							</a>
						</p>
					</div>
                    
                    
                </fieldset>
                

            </form>
        </div>
    </div>
 </body>
</html>

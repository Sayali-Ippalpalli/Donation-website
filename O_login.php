<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <script src="script.js"></script>
</head>
<style>
*, *:before, *:after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Nunito', sans-serif;
}

body{
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: -webkit-linear-gradient(left, #7579ff, #b224ef);
  font-family: 'Nunito', sans-serif;
}

input, button{
  border:none;
  outline: none;
  background: none;
}

.cont{
  overflow: hidden;
  position: relative;
  width: 900px;
  height: 550px;
  background: #fff;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
}

.form{
  position: relative;
  width: 640px;
  height: 100%;
  padding: 5z0px 30px;
  -webkit-transition:-webkit-transform 1.2s ease-in-out;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

h2{
  width: 100%;
  font-size: 30px;
  text-align: center;
}

label{
  display: block;
  width: 260px;
  margin: 25px auto 0;
  text-align: center;
}

label span{
  font-size: 14px;
  font-weight: 600;
  color: #505f75;
  text-transform: uppercase;
}

input{
  display: block;
  width: 100%;
  margin-top: 5px;
  font-size: 16px;
  padding-bottom: 5px;
  border-bottom: 1px solid rgba(109, 93, 93, 0.4);
  text-align: center;
  font-family: 'Nunito', sans-serif; 
}


.submit{
  margin-top: 40px;
  margin-bottom: 30px;
  text-transform: uppercase;
  font-weight: 600;
  font-family: 'Nunito', sans-serif;
  background: -webkit-linear-gradient(left, #7579ff, #b224ef);
  display: block;
  margin: 40px auto;
  width: 260px;
  height: 36px;
  border-radius: 30px;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
}


.submit:hover{
  background: -webkit-linear-gradient(left, #b224ef, #7579ff);
}

.forgot-pass{
  margin-top: 15px;
  text-align: center;
  font-size: 14px;
  font-weight: 600;
  color: #0c0101;
  cursor: pointer;
}

.forgot-pass:hover{
  color: red;
}

.social-media{
  width: 100%;
  text-align: center;
  margin-top: 20px;
}

.social-media ul{
  list-style: none;
}

.social-media ul li{
  display: inline-block;
  cursor: pointer;
  margin: 25px 15px;
}

.social-media img{
  width: 40px;
  height: 40px;
}

.sub-cont{
  overflow: hidden;
  position: absolute;
  left: 640px;
  top: 0;
  width: 900px;
  height: 100%;
  padding-left: 260px;
  background: #fff;
  -webkit-transition: -webkit-transform 1.2s ease-in-out;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
}

.cont.s-signup .sub-cont{
  -webkit-transform:translate3d(-640px, 0, 0);
          transform:translate3d(-640px, 0, 0);
}

.img{
  overflow: hidden;
  z-index: 2;
  position: absolute;
  left: 0;
  top: 0;
  width: 260px;
  height: 100%;
  padding-top: 360px;
}

.img:before{
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  width: 1350px;
  height: 100%;
  background-image: url(images/bg4.jpg);
  background-size: cover;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img:after{
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.3);
}

.cont.s-signup .img:before{
  -webkit-transform:translate3d(640px, 0, 0);
          transform:translate3d(640px, 0, 0);
}

.img-text{
  z-index: 2;
  position: absolute;
  left: 0;
  top: 50px;
  width: 100%;
  padding: 0 20px;
  text-align: center;
  color: #fff;
  -webkit-transition:-webkit-transform 1.2s ease-in-out;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img-text h2{
  margin-bottom: 10px;
  font-weight: normal;
}

.img-text p{
  font-size: 14px;
  line-height: 1.5;
}

.cont.s-signup .img-text.m-up{
  -webkit-transform:translateX(520px);
          transform:translateX(520px);
}

.img-text.m-in{
  -webkit-transform:translateX(-520px);
          transform:translateX(-520px);
}

.cont.s-signup .img-text.m-in{
  -webkit-transform:translateX(0);
          transform:translateX(0);
}


.sign-in{
  padding-top: 65px;
  -webkit-transition-timing-function:ease-out;
          transition-timing-function:ease-out;
}

.cont.s-signup .sign-in{
  -webkit-transition-timing-function:ease-in-out;
          transition-timing-function:ease-in-out;
  -webkit-transition-duration:1.2s;
          transition-duration:1.2s; 
  -webkit-transform:translate3d(640px, 0, 0);
          transform:translate3d(640px, 0, 0);
}

.img-btn{
  overflow: hidden;
  z-index: 2;
  position: relative;
  width: 100px;
  height: 36px;
  margin: 0 auto;
  background: transparent;
  color: #fff;
  text-transform: uppercase;
  font-size: 15px;
  cursor: pointer;
}

.img-btn:after{
  content: '';
  z-index: 2;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 2px solid #fff;
  border-radius: 30px;
}

.img-btn span{
  position: absolute;
  left: 0;
  top: 0;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack:center;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  -webkit-transition:-webkit-transform 1.2s;
  transition: -webkit-transform 1.2s;
  transition: transform 1.2s;
  transition: transform 1.2s, -webkit-transform 1.2s;;
}

.img-btn span.m-in{
  -webkit-transform:translateY(-72px);
          transform:translateY(-72px);
}

.cont.s-signup .img-btn span.m-in{
  -webkit-transform:translateY(0);
          transform:translateY(0);
}

.cont.s-signup .img-btn span.m-up{
  -webkit-transform:translateY(72px);
          transform:translateY(72px);
}

.sign-up{
  -webkit-transform:translate3d(-900px, 0, 0);
          transform:translate3d(-900px, 0, 0);
}

.cont.s-signup .sign-up{
  -webkit-transform:translate3d(0, 0, 0);
          transform:translate3d(0, 0, 0);
}
</style>
<body>
  <form name="myform" onsubmit="return myfunc()" action="O_validation.php" method="post">
  
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" id="email" name="myEmail" placeholder="Enter a valid email address" value="">
                <span id="mess5" style="color: red;"></span>
      </label>
      <label>
        <span>Password</span>
        <input type="password" id="psw" name="psw" placeholder="Enter a password" value="">
                
                <span id="mess6" style="color: red;"></span>
      </label>
      <input class="submit" type="submit" value="sign-in" style="cursor: pointer;">
      


      <div class="social-media">
        <ul>
          <li><a href="https://www.facebook.com/"><img src="images/facebook.png"></a></li>
          <li><a href="https://twitter.com/i/flow/signup"><img src="images/twitter.png"></a></li>
          <li><a href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin"><img src="images/linkedin.png"></a></li>
          <li><a href="https://www.instagram.com/accounts/login/"><img src="images/instagram.png"></a></li>
        </ul>
      </div>
    </div>
</form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and be the reason to see smile on others faces !</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      
        <form name="form" onsubmit="return validationf()" action="O_registration.php" method="post">
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="myName" id="name" placeholder="Enter your name" value="">
                <span id="mess1" style="color: red;"></span>
        </label>
        <label>
          <span>Email</span>
          <input type="email" id="email" name="myEmaill" placeholder="Enter a valid email address" value="">
                <span id="mess11" style="color: red;"></span>
        </label>
        <label>
          <span>Password</span>
          <input type="password" id="psw" name="psword" placeholder="Enter a password" value="">
                
                <span id="mess12" style="color: red;"></span>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" id="psw" name="pssword" placeholder="Enter a password" value="">
                
                <span id="mess13" style="color: red;"></span>
        </label>
        <input class="submit" type="submit" value="sign-in" style="cursor: pointer;">
        
      </div>
    </form>
    </div>
  </div>
<script>
    function myfunc(){
    
    
    var em = document.myform.myEmail;
    
    var p = document.myform.psw;
    
    if (em.value.length == "") {
        // document.getElementById("mess5").innerHTML = "**Enter your Email Id";
        alert("Enter your Email Id");
        return false;
    }
    if (em.value.indexOf('@') <= 0) {
        // document.getElementById("mess5").innerHTML = "**Invalid Email Id";
        alert("Invalid Email Id");
        return false;
    }
    if ((em.value.charAt(em.value.length - 4) != '.') && (em.value.charAt(em.value.length - 3) != '.')) {
        // document.getElementById("mess5").innerHTML = "**Invalid";
        alert("Invalid Email Id");
        return false;
    }
    if (p.value =="") {
        // document.getElementById("mess6").innerHTML = "**Enter password";
        alert("Enter password"); 
        return false;
    }
    if (p.value.length < 5) {
        // document.getElementById("mess6").innerHTML = "**Should be greater than 5 characters";
        alert("Should be greater than 5 characters");
        return false;
    }
    if (p.value.length > 20) {
        // document.getElementById("mess6").innerHTML = "**Should be less than 10 characters";
        alert("Should be less than 10 characters");
        return false;
    }
   
}
function validationf(){
    
    var n = document.form.myName;
    var ema = document.form.myEmaill;
    
	var pass = document.form.psword;
	var pas = document.form.pssword;
	if (ema.value.length == "") {
        // document.getElementById("mess11").innerHTML = "**Enter your Email Id";
         alert("Enter your Email Id");
        return false;
    }
    if (ema.value.indexOf('@') <= 0) {
        // document.getElementById("mess11").innerHTML = "**Invalid Email Id";
        alert("Invalid Email Id");
        return false;
    }
    if ((ema.value.charAt(ema.value.length - 4) != '.') && (ema.value.charAt(ema.value.length - 3) != '.')) {
        // document.getElementById("mess11").innerHTML = "**Invalid";
        alert("Invalid Email Id");
        return false;
    }
    if (pass.value =="") {
        // document.getElementById("mess12").innerHTML = "**Enter password";
        alert("Enter password");
        return false;
    }
    if (pass.value.length < 5) {
        // document.getElementById("mess12").innerHTML = "**";
        alert("Should be greater than 5 characters");
        return false;
    }
    if (pass.value.length > 20) {
        // document.getElementById("mess12").innerHTML = "**Should be less than 10 characters";
        alert("Should be less than 10 characters");
        return false;
	}
	if(pass.value!=pas.value)
	{
    document.getElementById("mess13").innerHTML = "**Enter correct password";
    alert("Enter correct password");
		return false;
	}


	if (n.value.length == "") {
        // document.getElementById("mess1").innerHTML = "**Please enter your Name";
        alert("**Please enter your Name");
        
        return false;
    }
    if (n.value.length < 3) {
        // document.getElementById("mess1").innerHTML = "**Please enter your full name";
        alert("**Enter your full name");
        return false;
    }
    if (n.value.length > 30) {
        // document.getElementById("mess1").innerHTML = "**Should be less than 30 characters";
        alert("**Should be less than 30 characters");
        return false;
    }
    if (allLetter(n) == false) {
        // document.getElementById("mess1").innerHTML = "**name must have alphabet characters only";
        alert('Username must have alphabet characters only');
        return false;
    }
   
}
document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
</script>
</body>
</html>
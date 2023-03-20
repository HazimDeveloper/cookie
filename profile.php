<?php 

include 'config.php';

if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$select_user = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
$res_user = mysqli_fetch_assoc($select_user);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emails = $_POST['email'];

    $update_user = mysqli_query($conn,"UPDATE `user` SET `name`='$name',`email`='$email' WHERE email = '$email'");

    if($update_user){

        echo "
        <script>alert('profile successfully update')
        window.location = 'index.php'
        </script>";
    }else{

        echo "
        <script>alert('sql error')
       
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    html{
    height: 100%;
}
body {
    background: #151515;  /* fallback for old browsers */
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    background:
    linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
    linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
    linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
    linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
    linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
    linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
  background-color: #131313;
  background-size: 20px 20px;
}
.form {
    max-width: calc(100vw - 40px);
    width: 500px;
    height: auto;
    background: rgba(255, 255, 255, 1);
    border-radius: 8px;
    box-shadow: 0 0 40px -10px #fff;
    margin: 3% auto;
    padding: 20px 30px;
    box-sizing: border-box;
    position: relative;
    border-bottom: 5px solid #ccc;
}
form:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 8px;
    background: #c4e17f;
    border-radius: 5px 5px 0 0  ;
    background: rgba(196,225,127,1);
    background: -moz-linear-gradient(left, rgba(196,225,127,1) 0%, rgba(196,225,127,1) 20%, rgba(247,253,202,1) 20%, rgba(247,253,202,1) 40%, rgba(254,207,113,1) 40%, rgba(254,207,113,1) 60%, rgba(240,119,108,1) 60%, rgba(240,119,108,1) 80%, rgba(219,157,190,1) 80%, rgba(219,157,190,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(196,225,127,1)), color-stop(20%, rgba(196,225,127,1)), color-stop(20%, rgba(247,253,202,1)), color-stop(40%, rgba(247,253,202,1)), color-stop(40%, rgba(254,207,113,1)), color-stop(60%, rgba(254,207,113,1)), color-stop(60%, rgba(240,119,108,1)), color-stop(80%, rgba(240,119,108,1)), color-stop(80%, rgba(219,157,190,1)), color-stop(100%, rgba(219,157,190,1)));
    background: -webkit-linear-gradient(left, rgba(196,225,127,1) 0%, rgba(196,225,127,1) 20%, rgba(247,253,202,1) 20%, rgba(247,253,202,1) 40%, rgba(254,207,113,1) 40%, rgba(254,207,113,1) 60%, rgba(240,119,108,1) 60%, rgba(240,119,108,1) 80%, rgba(219,157,190,1) 80%, rgba(219,157,190,1) 100%);
    background: -o-linear-gradient(left, rgba(196,225,127,1) 0%, rgba(196,225,127,1) 20%, rgba(247,253,202,1) 20%, rgba(247,253,202,1) 40%, rgba(254,207,113,1) 40%, rgba(254,207,113,1) 60%, rgba(240,119,108,1) 60%, rgba(240,119,108,1) 80%, rgba(219,157,190,1) 80%, rgba(219,157,190,1) 100%);
    background: -ms-linear-gradient(left, rgba(196,225,127,1) 0%, rgba(196,225,127,1) 20%, rgba(247,253,202,1) 20%, rgba(247,253,202,1) 40%, rgba(254,207,113,1) 40%, rgba(254,207,113,1) 60%, rgba(240,119,108,1) 60%, rgba(240,119,108,1) 80%, rgba(219,157,190,1) 80%, rgba(219,157,190,1) 100%);
    background: linear-gradient(to right, rgba(196,225,127,1) 0%, rgba(196,225,127,1) 20%, rgba(247,253,202,1) 20%, rgba(247,253,202,1) 40%, rgba(254,207,113,1) 40%, rgba(254,207,113,1) 60%, rgba(240,119,108,1) 60%, rgba(240,119,108,1) 80%, rgba(219,157,190,1) 80%, rgba(219,157,190,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c4e17f', endColorstr='#db9dbe', GradientType=1 );
}
.form h2 {
    margin: 18px 0;
    padding-bottom: 10px;
    width: 210px;
    color: #1e439b;
    font-size: 22px;
    border-bottom: 3px solid #ff5501;
    font-weight: 600;
    margin-bottom: 30px;
}
input {
    width: 60%;
    padding: 10px;
    box-sizing: border-box;
    background: none;
    outline: none;
    resize: none;
    border: 0;
    font-family: 'Montserrat', sans-serif;
    border: 2px solid #bebed2;
    transition: all .3s;
}
.form p:before {
    content: attr(type);
    display: block;
    margin: 10px 0 0;
    font-size: 13px;
    color: #5a5a5a;
    float: left;
    width: 40%;
    transition: all .3s;
}
button {
    padding: 8px 12px;
    margin: 8px 0 0;
    font-family: 'Montserrat', sans-serif;
    border: 2px solid #78788c;
    background: 0;
    color: #5a5a6e;
    cursor: pointer;
    transition: all .3s;
}
button:hover {
    background: #78788c;
    color: #fff;
}
.tright{
    text-align: right;
}
.ui-menu{
    max-height: 150px;
    overflow: auto;
}
.ui-menu .ui-menu-item{
    padding:5px;
    font-size: 14px;
}
.relative{
    position: relative;
}
.relative i.fa:before{
    color: #444;
    padding: 10px;
    position: absolute;
    left: -3px;
    text-align: center;
}

.relative i.fa{
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    text-align: center;
    border-radius: 0 4px 4px 0;
    width: 0;
    height: 0;
    z-index: 99;
    border-left: 20px solid transparent;
    border-right: 30px solid #ccc;
    border-bottom: 34px solid #ccc;
    transition: all 0.15s ease-in-out;

}
.form-control:focus{
    border-color: #1e439b;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgb(30, 102, 195);
}
.relative input:focus + i.fa{
    border-left: 20px solid transparent;
    border-right: 30px solid #1e439b;
    border-bottom: 34px solid #1e439b;
}
.relative input:focus + i.fa:before{
    color: #fff;
}
.input-group .form-control:not(:first-child):not(:last-child),
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child){
    border-radius: 0 4px 4px 0;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{
    background-color: #fff;
}

/* --- Thanks Message Popup --- */
.thanks{
    max-width: calc(100vw - 40px);
    width: 200px;
    height: auto;
    background-color: #444;
    border-radius: 8px;
    box-shadow: 0 0 40px -10px #000;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
    position: absolute;
    top: 20px;
    right: 20px;
    transition: all .3s;
}
.thanks h4,
.thanks p{
    color: #fff;
    text-align: center;
}

/* --- Animated Buttons --- */
.movebtn{
    background-color: transparent;
    display:inline-block;
    width:100px;
    background-image: none;
    padding: 8px 10px;
    margin-bottom:20px;
    border-radius: 0;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    -webkit-transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
}
.movebtnre {
    border: 2px solid #ff5501;
    box-shadow: inset 0 0 0 0 #ff5501;
    color:#ff5501;
}
.movebtnsu {
    border: 2px solid #1e439b;
    box-shadow: inset 0 0 0 0 #1e439b;
    color: #1e439b;
}
.movebtnre:focus,
.movebtnre:hover,
.movebtnre:active {
    background-color: transparent;
    color: #FFF;
    border-color: #ff5501;
    box-shadow: inset 96px 0 0 0 #ff5501;
}
.movebtnsu:focus,
.movebtnsu:hover,
.movebtnsu:active {
    background-color: transparent;
    color: #FFF;
    border-color: #1e439b;
    box-shadow: inset 96px 0 0 0 #1e439b;
}


/* --- Media Queries --- */

@media only screen and (max-width: 600px) {
    p:before{
        content: attr(type);
        width: 100%
    }
    input{
        width: 100%;
    }
}
  </style>
  <body>
  <form class="form" method="POST" action="">
	  <h2>User Profile</h2>
	  <div class="form-group">
		  <label for="email">Full Name:</label>
		  <div class="relative">
			  <input class="form-control" value="<?= $res_user['name'] ?>" name="name" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
			  <i class="fa fa-user"></i>
		  </div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Email address:</label>
	  	<div class="relative">
		  	<input class="form-control" name="email" value="<?= $res_user['email'] ?>" type="email" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		  	<i class="fa fa-envelope"></i>
	  	</div>
	  </div>
	              	
	  <div class="tright">
        <a href="index.php" class="btn btn-lg fs-5 btn-primary">Back</a>
	  	<!-- <a href="index.php"><button class="movebtn movebtnre"><i class="fa fa-fw fa-refresh"></i> Back </button></a> -->
	  	<button class="movebtn movebtnsu" type="Submit" name="submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button>
	  </div>
	</form>

	<div class="thanks" style="display: none;">
		<h4>Thank you!</h4>
		<p><small>Your message has been successfully sent.</small></p>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php }else{
    
    header("location: login.php");
    
    }?>
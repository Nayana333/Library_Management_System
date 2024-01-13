<html>
	<head>
		<style>
			body
            {
                background-image: url("https://images.unsplash.com/photo-1604147495798-57beb5d6af73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                font-family: "Open Sans", sans-serif;
                color: #333333;
            }
			.box-form {
                margin: 0 auto;
                width: 80%;
				height:610px;
                background: #767575ad;
                border-radius: 10px;
                margin-top : 31px;
                overflow: hidden;
                display: flex;
                flex: 1 1 100%;
                align-items: stretch;
                justify-content: space-between;
                box-shadow: 0 0 20px 6px #000000;
            } 
			.top{
				
				height: 80px;
				font-family: Franklin Gothic Medium;
				margin-top : -10px;
				margin-left: -10px;
				margin-right: -10px;
          		
          		padding-top: 10px;
				padding-bottom: 10px;
          		background-color:black;
          		color:white;
			}
			.title{
						font-family: Franklin Gothic Medium;
						font-size: 35px;
						padding-top:10px;
						color : #ffffff;
						text-align:center;
						
						margin-top: -5%;
						
			}
			.title2
			{
				font-size: 23px;
				padding-top:2.5%;
				margin-left: 10px;
				margin-top: -3%;
				color : #ffffff;
			}
			.title3
			{
				font-size: 23px;
				padding-top:2.5%;
				margin-left: 0px;
				margin-top: -3%;
				color : #ffffff;
			}
			.title4
			{
				font-size: 23px;
				padding-top:1.8%;
				margin-left: 0px;
				margin-top: -3%;
				color : #ffffff;
			}
			.group{
				margin-top : 60px;
				margin-left: 40px;
			}
			.t1 input[type=text]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:400px;
				margin-left: 228px;
				padding: 10px 20px;
				margin-top: -4%;
				border-radius: 10px;
			}
			.t2 input[type=text]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:900px;
				margin-left: 220px;
				padding: 10px 20px;
				margin-top: -3.1%;
				border-radius: 10px;
			}
			.t1 input[type=password]{
				border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:900px;
				margin-left: 220px;
				padding: 10px 20px;
				margin-top: -4%;
				border-radius: 10px;
			}
			.t3 textarea{
    			border: 1px solid #fff;
				font-size: 16px;
				color: black;
				background: white;
				width:900px;
				margin-left: 228px;
				padding: 10px 20px;
				margin-top: -3.1%;
				border-radius: 10px;
			
			}
			.select{
				margin-top: -32px;
				margin-left: 222px;
				
			}
			.msub input[type=submit]{
				border: 1px solid #000000;
				color: #fff;
				background: white;
				width: 20%;
				height:12%;
				color:black;
				font-size: 30px;
				margin-top: 0.6%;
				
				
				padding: 10px 10px;
				border-radius: 10px;
			}
			.msub input[type=submit]:hover {
    			background: #000;
				color:white;
			}
			.msub input[type=reset]{
				border: 1px solid #000000;
				color: #fff;
				background: white;
				width: 20%;
				height:12%;
				color:black;
				font-size: 30px;
				margin-top: 0.6%;
				
				padding: 10px 10px;
				border-radius: 10px;
			}
			.msub input[type=reset]:hover {
    			background: #000;
				color:white;
			}
		</style>
	</head>
	<body>
	<div class="top">
		<div class="title"><h1><p align="center">REGISTRATION</p></h1></div>	
	</div>
			<div class="box-form">
			<form action="registration.php" method="POST">
			<div class="group">
			<div class="title2">FIRST NAME :</div><div class="t1"><input type="text" name="fname"></div><br>
			<div class="title2">LAST NAME :</div><div class="t1"><input type="text" name="lname"></div><br>
			<div class="title2">ADDRESS :</div>
			<div class="t3">
					<textarea rows="2" cols="10" name="address"></textarea><br><br>
			</div>
			<div class="title2">PINCODE :</div><div class="t1"><input type="text" name="pincode"></div><br>
			<div class="title2">MOBILE NO :</div><div class="t1"><input type="text" name="mob"></div><br>
			<div class="title2">EMAIL :</div><div class="t1"><input type="text" name="email"></div><br>
			<div class="title2">ROLE :
				<div class="select">
                <select style="font-size: 1.1em;" name="role">
					<option value="owner" selected>SELECT YOUR ROLE</option>
				    <option value="owner">OWNER</option>
                    <option value="engineer">ENGINEER</option>
                    <option value="contractor">CONTRACTOR</option>
                    <option value="worker">WORKER</option>
				</select>
				</div>
				<br>
			<div class="title3">NEW USERNAME :</div><div class="t2"><input type="text" name="username"></div><br>
			<div class="title4">PASSWORD :</div><div class="t1"><input type="password" name="password"></div><br>
			<div class="msub" align="center">
            	<input type="submit" value="SUBMIT">
				<input type="reset" value="RESET">
			</div>
			</form>
			</div>
			<br><br>
    </body>
</html>

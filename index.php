<?php
	date_default_timezone_set('Africa/Lagos');
	?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Purple+Purse" rel="stylesheet">
	<title></title>
	<style>
		 @import url('https://fonts.googleapis.com/css?family=Orbitron');
		 @import url('https://fonts.googleapis.com/css?family=Purple+purse');
		 @import url('https://fonts.googleapis.com/css?family=Raleway');
		 *{
			align-items: center;
			margin:0;
			padding:0
		}
		.center{
			align-items: center;
			text-align: center;
			margin: auto;
		}
		#container {
  position: relative;
  width: 100%;
  margin: 0px;
  overflow: hidden;
}
#container::after {
  content: "";
  background: url(https://i.imgur.com/0EWDjqv.jpg);
  opacity: 0.45;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;  
   background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
/*#container::after {
  content: "";
  background: url(https://www.google.com.ng/search?q=images&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKEwjNjOuLq63aAhXDuBQKHUDTADQQsAQIMQ&biw=1366&bih=672#);
  opacity: 0.8;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1; 
  min-height: 100vh;  
  margin: 0px;
   background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}*/
		body{text-align: center;
		 justify-content: center;
                    align-items: center;
                    text-align: center;
                    /*background-image: url(https://i.imgur.com/EJd18r9.jpg);*/
		}
		
		 #container {
                    width: 100%;
                   padding-top: 10%;
                    margin:auto;
                      }
                     
			#time{
				height:100%;
				width:60%;
				font-size: 150px;
				margin: auto;
				 color: #601a66;
				 background-color: #E0E0E0;
            font-family: 'Purple purse', 'Orbitron', cursive;
            text-align: center;
            border-radius:10px;
			}
			#lcal{
				height:100%;
				width:60%;
				margin:15px auto;
				background-color: #C4C4C4;
				font-family: 'Purple purse', 'Orbitron', cursive;
				font-size: 18px;
				color: #601A66;
			}
			#quote{
				width: 20%;
				font-size: 15px;
				font-family: 'Raleway', 'Purple purse', sans-serif;
				font-style: italic;
				font-weight: bold;
				color: #4d2f2f;
				text-align: right;
				align-self: bottom-left;
				margin-top: 200px;
			}
			
}


		</style>
</head>
<body>
	<div id="container">
		<div id ="time">
			<?php echo date('H:i A');?>
		</div>
		<div id="lcal"><span id="local-time"><?php echo date('l jS \of F Y h:i:s A');?> | GMT+0100 (W. Central Africa Standard Time)</span></div>
		<?php 
			$hourDiff = 24 - date('H');
			$minDiff = 60 - date('i');
		?>
		<div id="quote">
			<p><span id="hour-diff"><?php echo $hourDiff?></span> hours and <span id="min-diff"><?php echo $minDiff?></span> minutes<br/> to the start of a new day<br/> make the hours count<br/> make every second work your way</p>
		</div>
	</div>
</body>
</html>
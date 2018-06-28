  <html>
  <head>
  <title>WEPBPAGE LAYOUT</title>
    <style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:pink;
	float:left;
	text-align:center;
	color:#09F;
		}
		.menu{
	width:100%;
	height:80px;

	background-color:brown;
	float:left;
	text-align:center;
	color: #FFF;
  }
.duration{


	width:35%;
	height:300px;

	background-color:pink;
	float:left;
	text-align:center;
	color:#09F;
		}
		.leftcontent2{
	width:33%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}

</style>
                <script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=(pa*duration)
document.getElementById('ta').value=total;
}

</script>


  </head>
  <body>

  <div class="header">
<marquee><h1> SITE'S HEADER</h1></marquee>
</div>
<div class="menu">
<center><strong><h1>Site's Menu</h1></strong></center>
</div>
<div class="image">
<img src="23.jpg" height=300px width=1330px>
</div>
<div class="duration">
 <form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<div class="frontform">Tech. Prob.<input type="checkbox" value="techproblem" name="techproblem" /> |
Tutorial Prob.<input type="checkbox" name="tutorialproblem" value="tutorialproblem" /> |
Tutor Prob.<input type="checkbox" name="tutorproblem" value="tutorproblem" /> |
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>




</div>
<div class="leftcontent2">
<form method="post" >
<div class="frontform"><input type="number" name="pa" id="pa"  placeholder="Amount" /></div>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()"  /></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount" /></div>

<div class="frontform"><input type="submit" name="duration"  /></div>
</div>
</form>


  </body>
  </html>
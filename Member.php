<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MemberShip Form</title>
link rel="stylesheet" type="text/css" href="common.css"/>
</head>

<body>
<h1>Membership Form</h1>
<p>Thanks for choosing to join.The Widget Club.To register,please fill in your details below and click Send Details.</p>
<form action="process_registration.php" method="post">
<div style="width:30em;">
<label for="firstName">First name</label>
<input type="text" name="firstName" id="firstName" value="" />
<label for="lastName">Last name</label>
<input type="text" name="lastName" id="lastName" value="" />
<label for="password1" >Choose a password</label>
<input type="password"  name="password1" id="password1" value=""/>
<label for="password2" >Retype password</label>
<input type="password"  name="password2" id="password2" value=""/>
<label for="genderMale">Are you male...</label>
<input type="radio" name="gender" id="genderMale" value="M"/>
<label for="genderFemale">...or female?</label>
<input for="radio" name="gender" id="gederFemale" value="F"/>
<label for="favoriteWidget">What's your favorite widget?</label>
<select name="favoriteWidget"  id="favoriteWidget" size="1">
<option value="superWidget">The superWidget</option>
<option value="megaWidget">The megaWidget</option>
<option value="wonderWidget">The wonderWidget</option>
</select>
<label for="newsletter">Do you want to receive our newsletter?</label>
<input type="checkbox" name="newsletter" id="newsletter" value="yes"/>
<label for="comments">Any comments?</label>
<textarea name="comments" id="comments" rows="4" cols="50"></textarea>
<div style="clear:both;">
<input type="submit" name="submitButton" id="submitButton" value="Send Details"/>
<input type="reset" name="resetButon" id="resetButton" value="Reset Form" style="margin-right:20px;/>
</div>
</div>
</form>
</body></html>

<SCRIPT LANGUAGE="JavaScript">
function Validate_Captcha(checktype)
{
	obj_captcha = document.getElementById("security_code");
	
	if ((checktype==1) && (obj_captcha.value.length < 5))
	{
		obj_captcha_right = document.getElementById("captcha_right");
		obj_captcha_wrong = document.getElementById("captcha_wrong");
		obj_security_check = document.getElementById("security_check");
		
		obj_security_check.value = 0;
		
		obj_captcha_right.style.display = "none";
		obj_captcha_wrong.style.display = "none";
		
		return false;
	}
		
	xmlHttp=GetXmlHttpObject1()
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	}
	
	xmlHttp.onreadystatechange = VerifyCaptcha;
	
    xmlHttp.open("POST","security_code/verify_captcha.php?my_security_code=" + obj_captcha.value,true);
    xmlHttp.send(null); 
}

function VerifyCaptcha()
{
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		var validate = xmlHttp.responseText;
		
		obj_captcha_right = document.getElementById("captcha_right");
		obj_captcha_wrong = document.getElementById("captcha_wrong");
		obj_security_check = document.getElementById("security_check");
		obj_security_code = document.getElementById("security_code");
		
		if (parseInt(validate))
		{
			obj_captcha_right.style.display = "";
			obj_captcha_wrong.style.display = "none";
			
			obj_security_check.value = 1;
			
			obj_security_code.readOnly = true;
		}
		else
		{
			obj_captcha_right.style.display = "none";
			obj_captcha_wrong.style.display = "";
			
			obj_security_check.value = 0;
		}
	}	
}

function GetXmlHttpObject1()
{
	var xmlHttp=null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
</script>
<label for="name"></label>
<br />
<img src="security_code/CaptchaSecurityImages.php?width=100&height=40&characters=5" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
<label for="security_code"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Security Code:</font> </label>
<input name="security_code" type="text" class="txtbox" id="security_code" onKeyUp="JavaScript:Validate_Captcha('1');" maxlength="5" onChange="JavaScript:Validate_Captcha('2');" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="security_check" id="security_check" value="0" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
<div id="captcha_right" style="display: none">
	<table width="25%" border="0" cellspacing="0" cellpadding="0">
		<tr valign="middle">
			<td width="12%" height="25" align="left">&nbsp;</td>
			<td width="88%" height="25" class="textlabel"><font face="Georgia, Times New Roman, Times, serif" class="txt1"><img src="security_code/image/tick-img.jpg" width="15" height="14"></font>&nbsp;<font color="#00CC00">Right.</font></td>
		</tr>
	</table>
</div>
<div id="captcha_wrong" style="display: none">
	<table width="25%" border="0" cellspacing="0" cellpadding="0">
		<tr valign="middle">
			<td width="11%" height="25" align="left">&nbsp;</td>
			<td width="89%" height="25" class="textlabel"><font face="Georgia, Times New Roman, Times, serif" class="txt1"><img src="security_code/image/cross-img.jpg" width="15" height="14"></font>&nbsp;<font color="#CC0000">Wrong.</font></td>
		</tr>
	</table>
</div>
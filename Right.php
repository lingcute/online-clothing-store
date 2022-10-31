<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="right-col">
  <h2>Login</h2>
  <div class="scroll">
    <form name="form1" method="post" action="login.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="26">Email:</td>
        </tr>
        <tr>
          <td height="30"><span id="sprytextfield1">
              <label>
                <input type="text" name="txtEmail" size="18" id="txtEmail" value="<?= isset($_COOKIE['CustomerEmail']) ? $_COOKIE['CustomerEmail'] : "" ?>"/>
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="26">Password:</td>
        </tr>
        <tr>
          <td height="31"><span id="sprytextfield2">
              <label>
                <input type="password" name="txtPassword" size="18" id="txtPassword" value="<?= isset($_COOKIE['CustomerPassword']) ? $_COOKIE['CustomerPassword'] : "" ?>">
              </label>
              <span class="textfieldRequiredMsg">*</span></span></td>
        </tr>
        <tr>
          <td height="26">Nhớ mật khẩu:
            <input type="checkbox" name="rememberMe" id="">
          </td>
        </tr>
        <tr>
          <td>
            <center><input type="submit" name="button" id="button" value="Login"></center>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <h2>&nbsp;</h2>
  <ul class="side">

  </ul>

</div>
<script type="text/javascript">
  <!--
  var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  //
  -->
</script>
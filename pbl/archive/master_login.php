
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PBL演習</title>
<link rel="stylesheet" type="text/css" href="./login.css" />
</head>
<body>

<table id="head">
        <tr>
            <th>愛媛新聞社 シフト管理システム</th>
        </tr>
</table>

<h1 id="login">管理者ログイン</h1><br>
<br>
<form method="post" action="master_login_check.php">
    <table id ="form">
        <tr>
            <th>管理者コード</th>
            <th><input type="text" name="codem"></th>
        </tr>
        <tr>
            <th>パスワード</th>
            <th><input type="password" name="passm"></th>
        </tr>
    </table>
    <br>
    <input type="submit" value="ログイン" class="button">
</form>

<br/>
<a href="staff_top.php">トップメニューへ</a><br/>

</body>
<html>
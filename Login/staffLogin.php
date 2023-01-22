<?php
include "./admin/main/header.php";
?>

<body>
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>

    <div class="body">
            <div class="tagline">
                <img src="../IMG/MindHub tagline.png" alt="MindHub Tagline">
            </div>

            <div class="container">
            <div id="rsi-card" class="signin-card">  
                <form novalidate method="post" action="checklogin.php?action=login">
                    <h3>Enter your Staff Access Key</h3>
                    <input type="text" class="" name="username" placeholder="Access Key" required id="username"/>
                    <input type="hidden" name="PersistentCookie" value="yes">
                    <input type="submit" id="signIn" name="signIn" class="btn btn-success" value="Submit" style="width: 100px;">
                </form>
            </div>
    </div>
    </div>
</body>
</html>
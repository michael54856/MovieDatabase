<!DOCTYPE html>
<html lang="en">
    <?php // session_start(); ?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>電影資料檢索系統</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            input[type="submit"] {
                border: 0;
                background-color: #283b42;
                color: #fff;
                border-radius: 10px;
                width: 100px;
                height: 40px;
                font-weight: bold;
                font-size: 15px;
                cursor: pointer;
                position: relative;
                left: 0%;
                }

            input[type="submit"]:hover {
            color: #003c9d;
            background-color: #fff;
            border: 2px #003c9d solid;
            }
        </style>
    </head>

    <body>

    <?php
 // 啟用交談期
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'moviedatabase';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if (isset($_POST["login"])) {
    session_start(); 
    $account = $_POST["account"];
    $password = $_POST["password"];
    
    //防範SQL注入
    $password = addslashes($password);
    $password = str_replace("_","/_",$password);
    $password = str_replace("%","/%",$password);

    $sql="SELECT * From account where account_number = '$account' AND  password = '$password'";
    $result = mysqli_query($link, $sql);
    //$total_fields=mysqli_num_fields($result); // 取得欄位數
    $total_records=mysqli_num_rows($result);  // 取得記錄數
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);  // 釋放佔用的記憶體

    if($total_records == 1){
        $_SESSION["account_number"]=$account;
        $_SESSION["account_password"]=$password;
        echo "<script> alert('登入成功!!') </script>";
        echo "<script> window.location.href='Second_index.php'</script>";
        }
    else{
        //$_SESSION["check"] = 0;
        echo "<script> alert('帳號或密碼有誤!!') </script>";
       // echo "<script> window.location.href='index.php'</script>";
    }
}
?>
        
        <!-- Background Video-->
        
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <p style="font-size: 46px; font-weight:bold;" class="fst-italic lh-1 mb-4">歡迎來到電影檢索系統</p>
                    <p class="mb-5">請輸入帳號密碼:</p>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="index.php" method="post">
                        <!-- Email address input-->
                        <class="row input-group-newsletter">
                            <table>
                            <tr><td style="font-family: 微軟正黑體; font-weight:bold">帳號: </td>
                            <td><input type="text" name="account" 
                                size="25" maxlength="25" placeholder="Enter your account number...." autofocus/></td></tr>
                            <tr><td style="font-family: 微軟正黑體; font-weight:bold">密碼: </td>
                            <td><input type="password" name="password"size="20" maxlength="25" placeholder="Password...." /></td></tr>
                            <tr><td colspan="2" align="center">
                            <input style="position:relative; top:1vh;" type="submit" name="login" value="登入"/></td>
                            </tr>
                        </table>

                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
    
</html>


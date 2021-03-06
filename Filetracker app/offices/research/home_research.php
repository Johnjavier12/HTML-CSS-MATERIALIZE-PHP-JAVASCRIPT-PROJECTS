<?php
session_start();
$sessionId = $_SESSION['users']['id'];
$sessionuname = $_SESSION['users']['username'];
if (empty($sessionId)) {
    header('Location: ../../login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="ellia,limbert,balisi" />
    <meta name="description" content="Capstone project" />
    <title>ISU File Tracker || Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--css plugins-->
    <link rel="stylesheet" href="../../css/materialize.min.css" />
    <!--My style-->
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body>
    <div class="fullscreen">
        <nav class="z-depth-1">
            <div class="nav-wrapper green">
                <a href="#" class="brand-logo center text-bold">File Tracker</a>
                <a href="#modal1" id="logout"
                    class="btn-floating btn-large btn-flat waves-effect waves-light modal-trigger green"><i
                        class="material-icons">arrow_back</i></a>
            </div>
        </nav>
        <div class="row">
            <ul class="tabs tabs-fixed-width tab-demo z-depth-1 green">
                <li class="tab col s6">
                    <a class="white-text" href="#test1">Files</a>
                </li>
                <li class="tab col s6">
                    <a class="white-text" href="#test2">Move Files</a>
                </li>
                <li class="tab col s6">
                    <a class="white-text" href="#test3">Account</a>
                </li>
            </ul>
            <input type="hidden" id="username" value="<?php echo $sessionuname ?>">
            <input type="hidden" id="id_logs" value="<?php echo $sessionId ?>">
            <div id="test1" class="col s12">
                <h4 class="header_tabs_view text-bold">Files</h4>
                <div id="loader"></div>
                <div id="result"></div>
                <h2 id="check_all_move_text" class="center"></h2>
            </div>
            <div id="test2" class="col s12">
                <h4 class="header_tabs_view text-bold">Move Files</h4>
                <div id="result_move"></div>
            </div>
            <div id="test3" class="col s12">
                <div id="output_acc">
                </div>
                <div id="change_pass">

                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div id="modal1" class="modal green">
        <div class="modal-content">
            <div class="center-align" id="logo">
                <img src="../../images/logos.png" />
                <p class="white-text text-bold">Are you sure you want to logout?</p>
            </div>
        </div>
        <div class="modal-footer">
            <a href="../../php/u_logout.php" class="waves-effect waves-green btn-flat">Agree</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </div>
    <!--End modal-->
    <!--js plugins-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/materialize.min.js"></script>
    <script src='research.js'></script>
</body>

</html>
<script>
let s = document.createElement('script');
s.src = '../../js/main.js';
s.type = 'text/javaScript';
document.body.appendChild(s);
</script>
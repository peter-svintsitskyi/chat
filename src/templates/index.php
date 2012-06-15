<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=UTF-8" http-equiv="content-type" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css" />
        <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        
        <div id="wraper">
            <div class =" logout"><?php echo htmlspecialchars($user->getNickname()) ?>, <a id="logoutBtn" href="index.php?action=logout-user&controller=users" >logout</a></div>
            <h1>Chat Local</h1>
            <div id="message_viewer">Message viewer</div>
            <form id="chat_form">
            <input id="message_input" type="text" value="Enter message here" />
            <input id="send_button" type="button" value="Send" />
            </form>
            
            <div id="usersList">
                <span> Online users </span>
                <div></div>
            </div>
        </div>
            
        
    </body>
</html>
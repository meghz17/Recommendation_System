<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
    <?php
        session_start();
        if($_SESSION['username']){
            echo $_SESSION['username'].", you are a member.";
            echo "Welcome, ". $_SESSION['username']."!", '<br>';
            echo "<a href='logout.php'>Logout</a>";
        }
        else{
             echo "You are logged out. <a href='index.php'>Click</a> here to return.";
        }
          
    ?>
            
             <div id="navig-bar" style="background-color:#a9a6a6">
             <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="member_index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="member_course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span></a>
                  <ul class="dropdown-menu" >
                        <li><a href="member_difficulty.php">Difficulty &nbsp</a></li>
                        <li><a href="member_recommend.php">Advanced &nbsp</a></li></ul></li>
                  <li><a href="member_study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                  <li><a href="member_contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                  <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                  <li><a href="member_management.php">Management &nbsp <span class="glyphicon glyphicon-wrench"></span></a></li>
              </ul>
              </div>


            <div id="content_area">
                <h3>Contact Us!</h3>
                <form name="htmlform" method="post" action="contactSend.php">
                <table width="450px" id="form" style="color:grey;"> 
                </tr>
                <tr>
                 <td valign="top">
                  <label for="first_name">First Name :</label>
                 </td>
                 <td valign="top">
                  <input  type="text" name="first_name" maxlength="50" size="30">
                 </td>
                </tr>
 
                <tr>
                 <td valign="top"">
                  <label for="last_name">Last Name :</label>
                 </td>
                 <td valign="top">
                  <input  type="text" name="last_name" maxlength="50" size="30">
                 </td>
                </tr>
                <tr>
                 <td valign="top">
                  <label for="email">Email Address :</label>
                 </td>
                 <td valign="top">
                  <input  type="text" name="email" maxlength="80" size="30">
                 </td>
 
                </tr>
                <tr>
                 <td valign="top">
                  <label for="telephone">Telephone Number :</label>
                 </td>
                 <td valign="top">
                  <input  type="text" name="telephone" maxlength="30" size="30">
                 </td>
                </tr>
                <tr>
                 <td valign="top">
                  <label for="comments">Comments :</label>
                 </td>
                 <td valign="top">
                  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                 </td>
 
                </tr>
                <tr>
                 <td colspan="2" style="text-align:center">
                  <input type="submit" value="Submit">   
                 </td>
                </tr>
                </table>
                </form>

            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

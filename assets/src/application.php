<?php
session_start();
function application_slogan($webApplicationTitle) {
    echo "<strong class='logo'> $webApplicationTitle </strong> <br>";    
}

function slogan() {
    
    $webSiteTitle = "Fat Cat Web Store";
     application_slogan($webSiteTitle);
     echo greet_visitor_greeting();
     
}

function greet_visitor_greeting() {
    
    $visitorGreatingMessageIndex = rand(1, 10);
        
    $shouldGreatingBePlesant    =   $visitorGreatingMessageIndex > 1 && 
                                    $visitorGreatingMessageIndex < 5;
    
    $shouldGreatingBeRude       =   $visitorGreatingMessageIndex > 6 && 
                                    $visitorGreatingMessageIndex < 8;    
    
    $shouldGreatingBeUsual      =   $visitorGreatingMessageIndex == 9 || 
                                    $visitorGreatingMessageIndex == 10;
    
    $visitorUsername            = get_username();
    
    if(!$visitorUsername) {
        return "<span class='logedin_user'>Здравей Гостенино!</span>";
    }
    
    if($shouldGreatingBePlesant) {
        return "<span class='logedin_user'>Как е денят ти $visitorUsername</span>";
    }

    if($shouldGreatingBeRude) {
        return "<span class='logedin_user'>Много си як $visitorUsername</span>";
    }
    
    if($shouldGreatingBeUsual) {
        return "<span class='logedin_user'>Най-добрият $visitorUsername</span>";
    }    
    
    return "<span class='logedin_user'>Мараба $visitorUsername</span>";
}


function SecondMenu() {
    echo '<ul>';
        if(isUserLogedIn()) :
            echo     "<a style='float: right' class='active' href='logout.php'>Logout</a>";
        else:
            echo     "<span style='float: right' class='topnav_logedin'></span>";
        endif;
    echo '</ul>';
}

function MainMenu() {
    echo '<ul>';
        if(isUserLogedIn()) :
              echo     "<a class='active' href='#home'>Home</a>";
              echo     "<a href='#news'>Store</a>";
              
        else:
              echo     "<a style='float: right' class='active' href='#'>Log In</a>";
              echo     "<a style='float: right' class='active' href='#'>Sign Up</a>";
        endif;
    echo '</ul>';  
}

function isUserLogedIn() {
    
    if(isset($_SESSION['isUserLogedIn'])) {
        return $_SESSION['isUserLogedIn'];
    }
    
    return false;
}

function get_username() {
    
    if(isset($_SESSION['user_name'])) {
        return $_SESSION['user_name'];
    }
    
    return "";
}

if(isset($_POST['username'])) {
    $_SESSION['user_name']          = $_POST['username'];
    $_SESSION['isUserLogedIn']   = true;
}

function redirect($location) {
    header("Location: $location");
}
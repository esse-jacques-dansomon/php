<?php

session_start();

/**Creation des tableau d'error */
$_SESSION["array_error"]= [
    "nom_error" =>null,
    "prenom_error" =>null,
    "login_error" =>null,
    "password_error" =>null,
];
/**Fonctions */
//1 fonction Verificatrice de l'mail 

function is_mail(string $mail) : bool 
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION["array_error"] ["login_error"]= null;
        return true;
    }
    else { 
        $_SESSION["array_error"]["login_error"] = "Veuillez entrer un mail valide";
        return false;
    } 
}

/**2- fonction Verificatrice de champ vide */
function is_empty (string $name, string $error_name, $error_message) : bool 
{
    if (empty($name))
    {
        $_SESSION['array_error'][$error_name] = $error_message;
        return true;
    }
    else 
    { 
        $_SESSION[$error_name] = null; 
        return false;
    } 
}


/**Gestion de registrer */

if($_POST["submit_button"] === "register")
{
    $nom_empty = is_empty($_POST['nom'], 'nom_error', 'Nom invalide : entrer un nom correct');
    $prenom_empty = is_empty($_POST['prenom'], 'prenom_error', 'Prenom invalide : entrer un nom correct');
    $email_valide = is_mail($_POST['login']);
    $password_valide = $_POST['password'] === $_POST['password2'];

    if(!$nom_empty && !$prenom_empty && $email_valide && $password_valide)
    {
        $_SESSION[$_POST["login"]] = [
            'nom'=>$_POST["nom"],
            'prenom'=>$_POST["prenom"],
            'login'=>$_POST["login"],
            'password'=>$_POST["password"],
            'role'=>$_POST["role"],
        ];
        var_dump($_SESSION);
        echo ("<a href='../view/login.html.php'>Se connecter</a>");
    }
    else {
        include("../view/register.html.php");
    }

    
}
/**Gestion de login */
if($_POST["submit_button"] === "login")
{
    foreach($_SESSION as $key => $user)
    {
        if(($user['login'] === $_POST['login']) && ($user['password'] === $_POST['password'])  ) 
        {
            if($_POST["role"] === "Visiteur")
            {
                echo ("<a href='../view/accueil.visiteur.html.php'>Visiteur</a>"); 
                break;  
            }
            elseif($_POST["role"] === "Admin")
            {
                echo ("<a href='../view/accueil.admin.html.php'>Admin</a>");
                break;   
            }
            }
        }
}
?> 
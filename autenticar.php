<?php
    session_start();  

    include_once "BD.php";

    if (isset($_POST['txtEmail']) && isset($_POST['txtSenha']) && !empty($_POST['txtEmail']) && !empty($_POST['txtSenha'])) {
        $usernameLogin=$_POST['txtEmail'];
        $passwordLogin=$_POST['txtSenha'];

        $sql = "SELECT * FROM usuario WHERE email = '$usernameLogin' AND senha = '$passwordLogin';";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            if ($row = mysqli_fetch_assoc($res)) {
                $_SESSION['usuario'] = $row['Nickname']; 
                $_SESSION['usuarioID'] = "a" + $row['ID'];
                header("Location: mpuzzle.php");
            }
        }else{
            
            
            echo "<script>alert('Cadastre-se para jogar!')</script>";
            header("Location: index.php");
            

        }
        mysqli_close($conn);
       
    }else{
        
            echo "<script>alert('Preencha os dados para jogar!')</script>";
            header("Location: index.php");
            
        
        header("Location: index.php");
        
    }
    

    
    
?> 
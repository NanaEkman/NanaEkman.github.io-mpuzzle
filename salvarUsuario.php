<?php 
    session_start(); 

    $txtEmail = $_POST['txtEmail'];
    $txtNickname = $_POST['txtNickname'];
    $txtSenha = $_POST['txtSenha'];

    include_once "BD.php";
    
    if (isset($_POST['txtEmail']) && isset($_POST['txtSenha']) && !empty($_POST['txtEmail']) && !empty($_POST['txtSenha'])) {
        
        $sql = "SELECT * FROM usuario WHERE Email = '$txtEmail' AND senha = ' $txtSenha' AND Nickname = '$txtNickname';";

        $res = mysqli_query($conn, $sql);
        
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            if (mysqli_num_rows($res) >= 0) {
                    if ($row = mysqli_fetch_assoc($res)) {
                    ?> 
                    
                    <script>alert("Usuário já cadastrado!")</script>
                    
                    <?php
                        
                    }
                }else{
                    
                    //verificar se inseriu
                    $sql = "INSERT INTO usuario(Nickname, Senha, Email) VALUES('$txtNickname', '$txtSenha', '$txtEmail')";
                    $res = mysqli_query($conn, $sql);
                    
                    //pesquisar no banco o novo id do usuario e colocar nas variavais de sessão e encaminhar;
                    header("Location: index.php");

                }
                mysqli_close($conn);
            header("Location: index.php");   
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        $usernameLogin=$_POST['txtEmail'];
        $passwordLogin=$_POST['txtSenha'];

        $sql = "SELECT * FROM usuario WHERE email = '$usernameLogin' AND senha = '$passwordLogin';";
        $_SESSION['usuarioID'] = $row['id'];
        $_SESSION['usuario'] = $row['Nickname'];
        $res = mysqli_query($conn, $sql);

        
       
    }else{
        
        ?> 
            
            <script>alert("Preencha os dados para jogar!")</script>
            
        <?php
        
        //header("Location: index.php");
        
    }

?>
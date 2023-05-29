<?php
require "../server/config/connect.php";
session_start();

if (isset($_POST["first-name"]) && isset($_POST["last-name"]) && isset($_POST["email"]) && isset($_POST["username"])) {
    $firstName = trim($_POST["first-name"]);
    $lastName = trim($_POST["last-name"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $cell1 = $_POST["cell1"];
    $cell2 = $_POST["cell2"];
    $bi = $_POST["bi"];
    $nuit = $_POST["nuit"];
    $birthDate = $_POST["birth-date"];
    $registrationDate = date("Y-m-d");
    $role = $_POST["role"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];
    $status = "inactive";

    $itsAllOkay = true;
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username) || str_contains($username, ' ')) {
        $_SESSION['username-error'] = "O nome de usuário deve conter somente números e letras.";
        $itsAllOkay = false;
    }
    if(strlen($password) < 8 || strlen($password) > 15) {
        $_SESSION['password-error'] = "A palavra passe deve ter entre 8 a 15 caracteres.";
        $itsAllOkay = false;
    }
    if($password != $confirmPassword) {
        $_SESSION['password-error'] = "As duas palavras-passes devem ser iguais";
        $itsAllOkay = false;
    }

    if($itsAllOkay) {
        
        try {

            $dbcon->beginTransaction();
        
            $saveLocalityQuery = "INSERT INTO $database_name.users (first_name, last_name, username, role, email, cell1, cell2, bi, nuit, birth_date, registration_date, password, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($saveLocalityQuery);
            $stmt->execute([$firstName, $lastName, $username, $role, $email, $cell1, $cell2, $bi, $nuit, $birthDate, $registrationDate, md5($password), $status]);
               
            $dbcon->commit();

            $_SESSION["registration-status"] = true;
            $_SESSION["register-response"] = "Cadastro submetido com sucesso. Aguarde pela confirmação.";
        
        } 
        catch(PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            $ex->getMessage();

            $_SESSION["registration-status"] = false;
            $_SESSION["register-response"] = "Ocorreu um erro durante o cadastro.";

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário | Pocsquare</title>
    <link rel="stylesheet" href="../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="min-h-screen">
        <form method="post" action="./index.php" class="border-2 border-orange-700 rounded-xl mx-auto mt-10 mb-20 laptop:w-[70%] mobile:w-[95%]" autocomplete="none">
            <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Funcionário</h1>
            <?php
            if (isset($_SESSION["register-response"])) {
                if($_SESSION["registration-status"]) {
                    echo "<div class='bg-green-500 text-white font-semibold flex justify-center my-6 py-4'>";
                    echo $_SESSION["register-response"];
                    unset($_SESSION["register-response"]);
                    unset($_SESSION["registration-status"]);
                    echo "</div>";
                } else {
                    echo "<div class='bg-red-500 text-white font-semibold flex justify-center my-6 py-4'>";
                    echo $_SESSION["register-response"];
                    unset($_SESSION["register-response"]);
                    unset($_SESSION["registration-status"]);
                    echo "</div>";
                }
            }
            ?>
            <div class="w-[90%] mx-auto flex flex-row justify-between">
                <input type="text" name="first-name" required placeholder="Nome" value="<?php if(isset($_POST['first-name'])) {echo $_POST['first-name'];}  ?>" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                <input type="text" name="last-name" required placeholder="Apelido" value="<?php if(isset($_POST['last-name'])) {echo $_POST['last-name'];}  ?>" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
            </div>
            <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                <input type="email" name="email" required placeholder="Email" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];}  ?>" class="h-10 w-[55%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                <div class="w-[43%] flex flex-col gap-2">
                    <input type="text" name="username" required placeholder="Nome de usuário (apenas letras e números)" value="<?php if(isset($_POST['username'])) {echo $_POST['username'];}  ?>" class="h-10 w-full px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                    <span class="text-sm text-red-700 font-medium">
                        <?php
                        if (isset($_SESSION['username-error'])) {
                            echo $_SESSION['username-error'];
                            unset($_SESSION['username-error']);
                        }
                        ?>
                    </span>
                </div>
            </div>
            <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                <div class="w-[49%] mx-auto flex flex-row justify-between">
                    <input type="text" placeholder="+258" disabled class="h-10 w-[20%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                    <input type="number" name="cell1" required placeholder="Número de celular" value="<?php if(isset($_POST['cell1'])) {echo $_POST['cell1'];}  ?>" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md text-slate-400">
                </div>
                <div class="w-[49%] mx-auto flex flex-row justify-between">
                    <input type="text" placeholder="+258" disabled class="h-10 w-[20%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                    <input type="number" name="cell2" placeholder="Celular secundário (opcional)" value="<?php if(isset($_POST['cell2'])) {echo $_POST['cell2'];}  ?>" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md text-slate-400">
                </div>
            </div>
            <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                <input type="text" name="bi" required placeholder="Número de BI" value="<?php if(isset($_POST['bi'])) {echo $_POST['bi'];}  ?>" class="h-10 w-[29%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                <input type="text" name="nuit" required placeholder="NUIT" value="<?php if(isset($_POST['nuit'])) {echo $_POST['nuit'];}  ?>" class="h-10 w-[29%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                <input type="date" name="birth-date" required class="h-10 w-[19%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                <select name="role" class="h-10 w-[19%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                    <option value="tech">Técnico</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div class="w-[90%] mx-auto flex flex-col gap-2 mt-5">
                <div class="w-full flex flex-row justify-between">
                    <input type="password" name="password" required placeholder="Palavra-Passe (8 a 15 caracteres)" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                    <input type="password" name="confirm-password" required placeholder="Confirmar Palavra-Passe" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                </div>
                <span class="text-sm text-red-700 font-medium">
                    <?php
                    if (isset($_SESSION['password-error'])) {
                        echo $_SESSION['password-error'];
                        unset($_SESSION['password-error']);
                    }
                    ?>
                </span>
            </div>
            <div class="flex flex-row gap-5 w-fit mx-auto my-10">
                <input type="submit" value="Cadastrar" class="bg-green-700 rounded-md text-white font-medium px-4 py-2">
                <input type="reset" value="Cancelar" class="bg-red-700 rounded-md text-white font-medium px-4 py-2">
            </div>
            </div>
        </form>
    </main>
    <footer>
        <?php include "../admin/components/footer.php"; ?>
    </footer>

    <script src="../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../assets/scripts/admin/register.js"></script>
</body>

</html>
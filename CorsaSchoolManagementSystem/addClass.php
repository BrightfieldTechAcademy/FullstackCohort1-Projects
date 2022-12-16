<?php 

require('Core/init.php');
if($_SESSION['loggedIn'] && $_SESSION['role'] === Roles::ADMIN){
    if(isset($_POST['addClass'])){
        $admin = new Admin(new Database);

        $data = [];
        $data['className'] = htmlspecialchars($_POST['className']);
        $data['classTeacher'] = htmlspecialchars($_POST['teachersName']);
        $data['numberOfStudents'] = htmlspecialchars($_POST['numberOfStudents']);
        $data['subjects'] = serialize(htmlspecialArray($_POST['subjects']));
        
        $admin->addClass($data);
    }
    $template = new Template("Views/addClass.php");
    echo $template;

}else{
    header("Location: ". BASE_URL . "/index.php");

}

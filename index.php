<?php

    include "init.php";

    $user = new Users;

    if (!isset($_GET['action'])) {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $user->setFirstName($_POST['firstName']);
            $user->setLastName($_POST['lastName']);
            $user->setAge($_POST['age']);
            $user->setUsername($_POST['username']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setjobTitle($_POST['position']);
            $user->setSalary($_POST['salary']);
            $user->setTax($_POST['tax']);
            $user->create();
        

    } elseif (isset($_GET['action']) && ($_GET['action'] == 'edit')) {
        $id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? intval($_GET['id']) : 0;
        Users::getByPK($id);
        $user = Users::getByPK($id);
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $user->setFirstName($_POST['firstName']);
            $user->setLastName($_POST['lastName']);
            $user->setAge($_POST['age']);
            $user->setUsername($_POST['username']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setjobTitle($_POST['position']);
            $user->setSalary($_POST['salary']);
            $user->setTax($_POST['tax']);
            $user->update();
            if($user->update()) {
                header("location: index.php");
                exit();
            }
        }

    } elseif (isset($_GET['action']) && ($_GET['action'] == 'delete')) {
        $id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? intval($_GET['id']) : 0;
        $user->delete($id);
        if($user->delete($id)) {
            header("location: index.php");
            exit();
        }
    }

    ?>
    <div class="body">

        <?php include "register_form.php"; ?>

        <?php include "info_table.php"; ?>

    </div>
    <?php

include 'template/footer.php';
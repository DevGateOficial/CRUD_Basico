<?php

    class UserController{

        public static function save()
        {
            include 'Model/UserModel.php';

            $model = new UserModel();

            $model->idUser = $_POST['idUser'];
            $model->nomeUser = $_POST['nomeUser'];
            $model->emailUser = $_POST['emailUser'];
            $model->nickUser = $_POST['nickUser'];
            $model->senhaUser = $_POST['senhaUser'];
            $model->dtnascimentoUser = $_POST['dtnascimentoUser'];
            $model->tipoUser = $_POST['tipoUser'];

            $model->save();

            header("Location: /user");
        }

        public static function form()
        {
            include 'Model/UserModel.php';
            $model = new UserModel();

            if(isset($_GET['id']))
                $model = $model->getById((int) $_GET['id']);

            include 'View/modules/User/FormUser.php';
        }
    }
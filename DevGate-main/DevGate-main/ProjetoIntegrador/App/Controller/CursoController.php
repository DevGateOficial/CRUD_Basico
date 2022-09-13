<?php

    class CursoController{

        public static function index()
        {
            include 'Model/CursoModel.php';

            $model = new CursoModel();
            $model->getALLRows();

            include 'View/modules/Curso/ListCurso.php';
        }

        public static function form()
        {
            include 'Model/CursoModel.php';
            $model = new CursoModel();

            if(isset($_GET['id']))
                $model = $model->getById((int) $_GET['id']);

            include 'View/modules/Curso/FormCurso.php';
        }

        public static function save()
        {
            include 'Model/CursoModel.php';

            $model = new CursoModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['nome'];
            $model->descricao = $_POST['descricao'];
            $model->objetivos = $_POST['objetivos'];

            $model->save();

            echo "AOUBa";

            header("Location: /curso");
        }

        public static function delete()
        {
            include 'Model/CursoModel.php';
            
            $model = new CursoModel();

            $model->delete((int) $_GET['id']);

            header("Location: /curso");
        }
    }
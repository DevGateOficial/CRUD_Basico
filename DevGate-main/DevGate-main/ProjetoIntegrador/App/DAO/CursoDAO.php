<?php

    class CursoDAO{

        private $connection;

        public function __construct()
        {
            $dsn = "mysql:host=localhost;dbname=plataforma_ensino";

            $this->connection = new PDO($dsn, 'root', '');
        }

        public function insert(CursoModel $model)
        {
            $sql = "INSERT INTO cursos (nome, descricao, objetivos) VALUES (?, ?, ?) ";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->descricao);
            $stmt->bindValue(3, $model->objetivos);

            $stmt->execute();
        }

        public function update(CursoModel $model)
        {
            $sql = "UPDATE cursos SET nome = ?, descricao = ?, objetivos = ? WHERE id = ? ";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->descricao);
            $stmt->bindValue(3, $model->objetivos);
            $stmt->bindValue(4, $model->id);

            $stmt->execute();
        }

        public function select()
        {
            $sql = "SELECT * FROM cursos";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        public function selectById(int $id)
        {
            include_once 'Model/CursoModel.php';

            $sql = "SELECT * FROM cursos WHERE id = ?";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("CursoModel");
        }

        public function delete(int $id)
        {
            $sql = "DELETE FROM cursos WHERE id = ? ";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }

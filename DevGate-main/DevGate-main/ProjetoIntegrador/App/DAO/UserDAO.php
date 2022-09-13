<?php

    class UserDAO{

        private $connection;

        public function __construct()
        {
            $dsn = "mysql:host=localhost;dbname=plataforma_ensino";

            $this->connection = new PDO($dsn, 'root', 'Daniel011067#');
        }

        public function select()
        {
            $sql = "SELECT * FROM users";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        public function insert(UserModel $model)
        {
            $sql = "INSERT INTO users (nomeUser, emailUser, nickUser, senhaUser, dtnascimentoUser, tipoUser) VALUES (?, ?, ?, ?, ?, ?) ";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nomeUser);
            $stmt->bindValue(2, $model->emailUser);
            $stmt->bindValue(3, $model->nickUser);
            $stmt->bindValue(4, $model->senhaUser);
            $stmt->bindValue(5, $model->dtnascimentoUser);
            $stmt->bindValue(6, $model->tipoUser);

            $stmt->execute();
        }

        public function selectById(int $id)
        {
            include_once 'Model/UserModel.php';

            $sql = "SELECT * FROM users WHERE id = ?";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("UserModel");
        }

    }

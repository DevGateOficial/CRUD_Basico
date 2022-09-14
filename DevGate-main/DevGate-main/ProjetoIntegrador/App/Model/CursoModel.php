<?php

    class CursoModel{
        
        public $id, $nomeCurso, $descricao, $objetivos, $hiperlink;

        public $rows;

        public function save()
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            if(empty($this->id))
            {
                $dao->insert($this);
            }
            else
            {
                $dao->update($this);
            }
        }

        public function getALLRows()
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            $this->rows = $dao->select();
        }

        public function getById(int $id)
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new CursoModel();           
        }

        public function delete(int $id)
        {
            include 'DAO/CursoDAO.php';

            $dao = new CursoDAO();

            $dao->delete($id);

        }
    }
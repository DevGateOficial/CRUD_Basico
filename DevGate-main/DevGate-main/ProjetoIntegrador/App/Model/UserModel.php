<?php

    class UserModel{

        public $idUser, $nomeUser, $emailUser, $nickUser, $senhaUser, $dtnascimentoUser, $tipoUser;

        public $rows;
        
        public function getALLRows()
        {
            include 'DAO/UserDAO.php';

            $dao = new UserDAO();

            $this->rows = $dao->select();
        }
        
        public function save()
        {
            include 'DAO/UserDAO.php';

            $dao = new UserDAO();

            $dao->insert($this);
        }

        public function getById(int $id)
        {
            include 'DAO/UserDAO.php';

            $dao = new UserDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new UserDAO();           
        }

        public static function createnewuser(){
            include isajsajsa

            $dao = new UserDAO();
            
            for each new assiniment crreqted submit a new ob_end_clean


            if danmiel == daniel create new block instanced here for more advanced options for ur usage3 and learning 

            
        }
    }
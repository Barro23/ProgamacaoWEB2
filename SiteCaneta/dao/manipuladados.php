<?php
    include_once("conexao.php");

    class manipuladados extends conexao{
        protected $table, $fields, $dados, $status, $fieldId, $valueId;

        function setTable($tabela){
            $this->table = $tabela;
        }
        function setFields($campos){
            $this->fields = $campos;
        }
        function setDados($valores){
            $this->dados = $valores;
        }
        function setFieldsId($chavep){
            $this->fieldId = $chavep;
        }
        function setValueId($valorchave){
            $this->valueId = $valorchave;
        }
        function getStatus(){
            return $this->status;
        }

        public function insert(){
            $this->sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados)";

            $this->status = self::exeSQL($this->sql) ? "cadastrado com sucesso" : "deu erro chapa".mysql_error();
        }

        public function delete(){
            $this->sql = "DELETE FROM $this->table($this->fields) VALUES ($this->dados)";

            $this->status = self::exeSQL($this->sql) ? "deletado com sucesso" : "deu erro chapa".mysql_error();
        }

        public function getAllDataTable(){
            $this->sql = "SELECT * FROM $this->table";
            $this->qr = self::exeSQL($this->sql);
            return $this->qr;
        }
    }


?>
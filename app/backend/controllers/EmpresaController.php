<?php

class empresaController extends RenderView {
    private $empresa;

    public function __construct() {
        $this->empresa = new empresaModel();
    }

    public function index() {
        $empresas = $this->empresa->fetch();
        $this->loadView("empresa", ['empresas' => $empresas]);
    }

    public function  fetchAll() {
        $empresas = $this->empresa->fetch();
        $this->loadView("empresa", ['empresas' => $empresas]);
    }

    public function show($id) {
        $id_empresa = $id[0];
        $empresa = $this->empresa->fetchById($id_empresa);
        $this->loadView('empresaShow', ['empresa' => $empresa]);
    }

    public function create() {

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            

        $name = $_POST['nomeEmpresa'];
        $endereco =$_POST['endereco'];
        $telefone =$_POST['telefone'];
        $categoria =$_POST['nomeCategoria'];
        $email =$_POST['email'];
        
    
        $result = $this->empresa->create($name, $endereco, $telefone, $categoria, $email);
        
        if ($result === true) {
            echo "empresa criada com sucesso!";
        } else {
            echo "Desculpa, algo deu errado: " . $result;
        }
    }
}

    public function update($id) {
        $id_empresa = $id[0];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            

            $name = $_POST['nomeempresa'];
            $endereco =$_POST['endereco'];
            $telefone =$_POST['telefone'];
            $categoria =$_POST['nomeCategoria'];
            $email =$_POST['email'];
            
        
            $result = $this->empresa->create($name, $endereco, $telefone, $categoria, $email,  $id_empresa);
            
            if ($result === true) {
                echo "empresa criada com sucesso!";
            } else {
                echo "Desculpa, algo deu errado: " . $result;
            }
        }
    }

    public function delete($id) {
        $id_empresa = $id[0];
    
        $result = $this->empresa->delete($id_empresa);
        
        if ($result === true) {
            echo "empresa deletada com sucesso!";
        } else {
            echo "Desculpa, algo deu errado: " . $result;
        }        
    }
}

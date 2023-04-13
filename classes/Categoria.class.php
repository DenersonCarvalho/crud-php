<?php
class Produto{
    private $id;
    private $categoria_id;
    private $nome;
    private $preco;
    private $quantidade;
    
    #setters
    public function setId($id){
        $this -> id = $id;
    }
    public function setCat($categoria_id){
        $this -> categoria_id = $categoria_id;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function setPreco($preco){
        $this -> preco = $preco;
    }
    public function setQuant($quantidade){
        $this -> quantidade = $quantidade;
    }
    #getters
    public function getId(){
        return $this -> id;
    }
    public function getCat(){
        return $this -> categoria_id;
    }
    public function getNome(){
        return $this -> nome;
    }
    public function getPreco(){
        return $this -> preco;
    }
    public function getQuant(){
        return $this -> quantidade;
    }
}
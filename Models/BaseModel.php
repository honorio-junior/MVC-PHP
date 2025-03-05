<?php

namespace Models;

class BaseModel extends \SQLite3
{
    function __construct()
    {
        // Define o caminho para o banco de dados SQLite
        $DATABASE = dirname(__DIR__) . '/database.sqlite';
        
        // Abre a conexão com o banco de dados
        $this->open($DATABASE);

        // Verifica se a tabela 'user' existe, e se não, cria ela
        $this->createUserTable();
    }

    // Método para criar a tabela 'user' caso ela não exista
    private function createUserTable()
    {
        // SQL para verificar se a tabela 'user' existe
        $query = "CREATE TABLE IF NOT EXISTS user (
            id INTEGER PRIMARY KEY AUTOINCREMENT, 
            nome TEXT NOT NULL, 
            email TEXT NOT NULL UNIQUE, 
            senha TEXT NOT NULL
        )";

        // Executa a query
        $this->exec($query);
    }
}

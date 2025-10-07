-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS acioli_climatizacao;
USE acioli_climatizacao;

-- Criar tabela de contatos
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    service VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    observation TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dados de exemplo para teste (Inserir no banco de dados)
INSERT INTO contact_submissions (name, service, phone, observation) 
VALUES ('João Silva', 'Instalação', '(11) 99999-9999', 'Gostaria de um orçamento para instalação de ar condicionado.');
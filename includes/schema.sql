-- Create database and use it
CREATE DATABASE IF NOT EXISTS acioli_climatizacao;
USE acioli_climatizacao;

-- Create table for contact submissions
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    service VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    observation TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data for testing
INSERT INTO contact_submissions (name, service, phone, observation) 
VALUES ('João Silva', 'Instalação', '(11) 99999-9999', 'Gostaria de um orçamento para instalação de ar condicionado.');

-- Create a user for the application
CREATE USER 'acioli_user'@'%' IDENTIFIED BY 'acioli_password';
GRANT ALL PRIVILEGES ON acioli_climatizacao.* TO 'acioli_user'@'%';
FLUSH PRIVILEGES;
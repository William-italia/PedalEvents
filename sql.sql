
CREATE DATABASE pedalEvents;

drop database pedalevents;

use pedalevents;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_completo VARCHAR(255) NOT NULL,
  cpf VARCHAR(14) NOT NULL UNIQUE,
  cidade VARCHAR(100),
  data_nascimento DATE NOT NULL,
  senha VARCHAR(255) NOT NULL,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    usuario_id INT, 
    data DATETIME NOT NULL,
    local VARCHAR(255) NOT NULL,
    limite_vagas INT NOT NULL,
    imagem VARCHAR(255),  
    descricao TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
);



CREATE TABLE inscricoes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT,
  evento_id INT,
  data_inscricao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  FOREIGN KEY (evento_id) REFERENCES eventos(id)
);


CREATE TABLE topicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_evento INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    FOREIGN KEY (id_evento) REFERENCES eventos(id) ON DELETE CASCADE
);


CREATE TABLE links_evento (
  id INT AUTO_INCREMENT PRIMARY KEY,
  evento_id INT,
  nome_link VARCHAR(255),
  url_link VARCHAR(255),
  FOREIGN KEY (evento_id) REFERENCES eventos(id) ON DELETE CASCADE
);
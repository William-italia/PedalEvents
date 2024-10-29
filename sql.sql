
CREATE DATABASE pedalEvents1;
drop database pedalevents1;
use pedalevents1;




-- Tabela de Usuários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    nome_organizacao VARCHAR(255),
    email VARCHAR(255) NOT NULL UNIQUE,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    cidade VARCHAR(100),
    data_nascimento DATE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Endereços
CREATE TABLE enderecos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    ponto_encontro VARCHAR(255) NOT NULL,
    bairro_encontro VARCHAR(100),
    ponto_chegada VARCHAR(255) NOT NULL,
    bairro_chegada VARCHAR(100)
);

-- Tabela de Categorias
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50) NOT NULL UNIQUE
);

-- tabela de Dificuldades
CREATE TABLE dificuldades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_dificuldade VARCHAR(50) NOT NULL UNIQUE
);

-- Tabela de Eventos
CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    enderecos_id INT,
    nome_evento VARCHAR(255) NOT NULL,
    data_evento DATETIME NOT NULL,
    data_fim_inscricao DATETIME,
    limite_vagas INT NOT NULL,
    imagem VARCHAR(255),
    idade_minima INT,
    distancia DECIMAL(5, 2),
    categoria_id INT, -- Ligação com a tabela de categorias
    dificuldade_id INT, -- Ligação com a tabela de dificuldades
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (enderecos_id) REFERENCES enderecos(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),	
    FOREIGN KEY (dificuldade_id) REFERENCES dificuldades(id)
);

-- Tabela de Inscrições
CREATE TABLE inscricao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    evento_id INT,
    data_inscricao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (evento_id) REFERENCES eventos(id)
);

-- Tabela de Tópicos
CREATE TABLE topicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_evento INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    FOREIGN KEY (id_evento) REFERENCES eventos(id) ON DELETE CASCADE
);

-- Tabela de Links
CREATE TABLE links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    evento_id INT,
    nome_link VARCHAR(255),
    url_link VARCHAR(255),
    FOREIGN KEY (evento_id) REFERENCES eventos(id) ON DELETE CASCADE
);


-- tabela participantes
CREATE TABLE participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    evento_id INT NOT NULL,
    data_participacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (evento_id) REFERENCES eventos(id) ON DELETE CASCADE
);

-- tabela comentarios
CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    evento_id INT,  
    conteudo TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (evento_id) REFERENCES eventos(id) ON DELETE CASCADE
);

-- tabela resposta_comentario
CREATE TABLE respostas_comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comentario_id INT NOT NULL,
    usuario_id INT NOT NULL,
    conteudo TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (comentario_id) REFERENCES comentarios(id) ON DELETE CASCADE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- tabela curtida
CREATE TABLE curtidas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comentario_id INT NOT NULL,
    usuario_id INT NOT NULL,
    data_curtida TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (comentario_id) REFERENCES comentarios(id) ON DELETE CASCADE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);



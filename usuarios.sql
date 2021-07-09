CREATE TABLE IF NOT EXISTS usuarios (
    id int primary key auto_increment,
    nome varchar(255)
);

INSERT INTO usuarios (nome) VALUES ('Carlos'), ('João'), ('José'), ('Matheus'), ('Rafael');
create table imagens (
titulo_imagem varchar(100),
caminho_imagem varchar(200),
cod_imagem int PRIMARY KEY,
descimagem varchar(200),
fk_posts_cod_post int
);

create table tema_post(
desc_tema varchar(100),
id_tema int PRIMARY KEY
);

create table posts(
cod_post int PRIMARY KEY,
titulo varchar(100),
descricao varchar(300),
texto_post varchar(8000),
fk_tema_post_id_tema int
);

create table usuario(
login_usu varchar(80),
email varchar(300),
senha_usu varchar(80),
nome varchar(100),
id_usu int PRIMARY KEY,
fk_tip_user_id_tipo int
);

create table comentario(
data_com date,
id_com int PRIMARY KEY,
fk_usuario_id_usu int,
fk_posts_cod_post int,
texto varchar(500),
hora time
);

create table tip_user(
descricao_tipo varchar(100),
id_tipo int PRIMARY KEY
);

ALTER TABLE imagens ADD CONSTRAINT FK_imagens_2
FOREIGN KEY (fk_posts_cod_post)
REFERENCES posts(cod_post)
ON DELETE CASCADE;

ALTER TABLE posts ADD CONSTRAINT FK_posts_2
FOREIGN KEY (fk_tema_post_id_tema)
REFERENCES tema_post(id_tema)
ON DELETE CASCADE;

ALTER TABLE usuario ADD CONSTRAINT FK_usuario_2
FOREIGN KEY (fk_tip_user_id_tipo)
REFERENCES tip_user(id_tipo)
ON DELETE RESTRICT;

ALTER TABLE comentario ADD CONSTRAINT FK_comenta_2
FOREIGN KEY (fk_usuario_id_usu)
REFERENCES usuario(id_usu);

ALTER TABLE comentario ADD CONSTRAINT FK_comenta_3
FOREIGN KEY (fk_posts_cod_post)
REFERENCES posts(cod_post);


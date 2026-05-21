use davilla;

select *from tbl_produtos;

CREATE TABLE tbl_kits (
    id_kit INT AUTO_INCREMENT PRIMARY KEY,
    nome_kit VARCHAR(30) NOT NULL,
    descricao_kit TEXT NOT NULL,
    foto_kit VARCHAR(100) NOT NULL,
    slug_kit VARCHAR(30) NOT NULL,
    criado_em_kit datetime NOT NULL DEFAULT current_timestamp,
    atualizado_em_kit datetime NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tbl_itens_kit (
    id_item_kit INT AUTO_INCREMENT PRIMARY KEY,
    id_kit INT NOT NULL,
    id_produto INT NOT NULL,
    status_item_kit VARCHAR(20) not null,
    criado_em_item_kit datetime NOT NULL DEFAULT current_timestamp,
    atualizado_em_item_kit datetime NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,

    constraint fk_item_kit_kit
    foreign key(id_kit)references tbl_kits(id_kit),


    constraint fk_item_kit_produto
    foreign key(id_produto)references tbl_produtos(id_produto)
);


INSERT INTO tbl_itens_kit 
(id_kit, id_produto, status_item_kit)
VALUES
(1, 3, 'ativo');

select *from tbl_itens_kit; 
select *from tbl_produtos;
select *from tbl_itens_kit ;


SELECT 
    k.id_kit,
    k.nome_kit,
    k.descricao_kit,

    ik.id_item_kit,
    ik.status_item_kit,

    p.id_produto,
    p.nome_produto,
    p.preco_produto

FROM tbl_kits AS k

INNER JOIN tbl_itens_kit AS ik
    ON k.id_kit = ik.id_kit

INNER JOIN tbl_produtos AS p
    ON ik.id_produto = p.id_produto;

use davilla;

select * from tbl_kits;


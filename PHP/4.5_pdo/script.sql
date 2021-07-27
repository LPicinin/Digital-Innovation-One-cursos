IF EXISTS exemplo DROP DATABASE exemplo;

create database exemplo;
use exemplo;
create table produtos (
    id int(11) not null AUTO_INCREMENT,
    descricao varchar(50) DEFAULT NULL,
    PRIMARY KEY(id);
)
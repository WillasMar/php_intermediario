insert into usuarios(patente,nome,email,senha)
values(1,'SISTEMA','sistema@email.com',md5('123'))

select * from usuarios

delete from usuarios where id > 1

alter table usuarios auto_increment = 1


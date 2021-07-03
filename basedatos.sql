CREATE DATABASE sessions;

USE sessions;

CREATE TABLE roles(
    id  int(255) auto_increment not null,
    rol char(5) not null,
    CONSTRAINT pk_rol PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO roles ('id', 'rol') VALUES (NULL, 'admin'), (NULL, 'alumn');
CREATE TABLE users(
    id          int(255) auto_increment not null,
    rol_id      int(255) not null,
    name        varchar(100) not null,
    last_name   varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    CONSTRAINT pk_user PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email),
    CONSTRAINT fk_user_rol FOREIGN KEY(rol_id) REFERENCES roles(id)
)ENGINE=InnoDb;

/* CREATE TABLE notes(
    id              int(255) auto_increment not null,
    user_id         int(255) not null,
    title           varchar(255) not null,          
    description     MEDIUMTEXT,
    date            date not null,
    CONSTRAINT pk_note PRIMARY KEY(id),
    CONSTRAINT fk_note_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb; */
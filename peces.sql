DROP TABLE IF EXISTS urnas CASCADE;

CREATE TABLE urnas (
    PRIMARY KEY (id),
    id       BIGSERIAL    NOT NULL,
    nombre   VARCHAR(255) NOT NULL,
    ancho    NUMERIC(4, 1) NOT NULL,
    alto     NUMERIC(4, 1) NOT NULL,
    profundo NUMERIC(4, 1) NOT NULL,
    grosor   NUMERIC(2, 1)
);

DROP TABLE IF EXISTS especies CASCADE;

-- Y si necesito indicar un rango de temperatura (Ej: 23º a 28º)?
-- Neon: temp 23º-28º; Ph 6-7
-- Cebra: temp 20-26; Ph 6.5-7.5; Gh 5-12
CREATE TABLE especies (
    PRIMARY KEY (id),
    id             BIGSERIAL     NOT NULL,
    nombre         VARCHAR(255)  NOT NULL UNIQUE,
    binomial       VARCHAR(255)  UNIQUE,
    tamanyo        NUMERIC(3)    NOT NULL,
    min_temperatura    NUMERIC(2)    NOT NULL,
    max_temperatura    NUMERIC(2)    NOT NULL,
    min_ph             NUMERIC(3, 1)    NOT NULL,
    max_ph             NUMERIC(3, 1)    NOT NULL,
    gh             NUMERIC(2)    NOT NULL,
    min_individuos NUMERIC(2),
    descripcion    VARCHAR(255)
);

DROP TABLE IF EXISTS individuos CASCADE;

CREATE TABLE individuos (
    PRIMARY KEY (id),
    id         BIGSERIAL NOT NULL,
    especie_id BIGINT    NOT NULL,
--  mote       VARCHAR(255),
    CONSTRAINT fk_especie FOREIGN KEY(especie_id) REFERENCES especies(id)
);

DROP TABLE IF EXISTS urnas_individuos CASCADE;

CREATE TABLE urnas_individuos (
    PRIMARY KEY (urna_id, individuo_id),
    urna_id BIGINT NOT NULL,
    individuo_id  BIGINT NOT NULL,
    CONSTRAINT fk_urna FOREIGN KEY(urna_id) REFERENCES urnas(id),
    CONSTRAINT fk_individuo  FOREIGN KEY(individuo_id)  REFERENCES individuos(id)
);

INSERT INTO urnas (nombre, ancho, alto, profundo, grosor)
VALUES ('Mi acuario', 60, 35, 30, 0.6),
       ('Gambario', 35, 25, 20, 0.4);

INSERT INTO especies (nombre, binomial, tamanyo, min_temperatura, max_temperatura, min_ph, max_ph, gh, min_individuos, descripcion)
VALUES ('Neón', 'Paracheirodon innesi', 4, 23, 28, 6, 7, 8, 10, 'Es un pez de cuerpo esbelto, el cual presenta una línea de color azul verdoso que va desde el ojo hasta poco antes de la cola, y por debajo de esta se encuentra una línea de color rojo que va de la mitad del cuerpo hasta la cola.'),
       ('Cebra', 'Danio rerio', 6, 20, 26, 6.5, 7.5, 8, 10, 'Una especie de cíprinido emparentados con las carpas y los barbos que, al igual que el mamífero del cual toma su nombre, está totalmente rayado en blanco y negro, por ello le sirve de camuflaje para mezclarse con la fauna marina.');

INSERT INTO individuos (especie_id)
VALUES (1), (1), (1), (1), (1);

INSERT INTO urnas_individuos (urna_id, individuo_id)
VALUES (1, 2), (1, 3), (1, 4), (1, 5);

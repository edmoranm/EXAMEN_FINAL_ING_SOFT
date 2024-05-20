CREATE TABLE persona (

    per_id SERIAL PRIMARY KEY, 
    per_nombre VARCHAR(75),
    per_prosedencia VARCHAR (75),
    per_ingreso VARCHAR (35),
    per_salida VARCHAR (35),
    per_motivo VARCHAR (50),
    per_situacion SMALLINT DEFAULT 1
);

select * from persona
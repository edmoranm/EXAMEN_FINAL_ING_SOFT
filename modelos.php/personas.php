<?php
require 'Conexion.php';

class persona extends Conexion{
    public $per_id;
    public $per_nombre;
    public $per_prosedencia;
    public $per_ingreso;
    public $per_salida;
    public $per_motivo;
    public $per_situacion;


    public function __construct($args = [])
    {
        $this->per_id = $args['per_id'] ?? null;
        $this->per_nombre = $args['per_nombre'] ?? '';
        $this->per_prosedencia = $args['per_prsedencia'] ?? '';
        $this->per_ingreso = $args['per_ingreso'] ?? '';
        $this->per_salida = $args['per_salida'] ?? '';
        $this->per_motivo = $args['per_motivo'] ?? '';
        $this->per_situacion = $args['per_situacion'] ?? '';

    }

      // METODO PARA INSERTAR
      public function guardar(){
        $sql = "INSERT into persona (per_nombre,
         per_prosedencia, per_ingreso, per_salida, per_motivo) values ('$this->per_nombre',
         '$this->per_prosedencia', '$this->per_ingreso', '$this->per_salida', '$this->per_motivo')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }


    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM persona where per_situacion = 1 ";

        if($this->per_nombre != ''){
            $sql .= " AND per_nombre like '%$this->per_nombre%' ";
        }
        if($this->per_prosedencia != ''){
            $sql .= " AND per_prosedencia = $this->per_prosedencia ";
        }

        if($this->per_ingreso!= ''){
            $sql .= " AND per_ingreso = $this->per_ingreso ";
        }

        if($this->per_salida != ''){
            $sql .= " AND per_salida = $this->per_salida ";
        }

        if($this->per_motivo != ''){
            $sql .= " AND per_motivo = $this->per_motivo ";
        }


        $resultado = self::servir($sql);
        return $resultado;
    }
}


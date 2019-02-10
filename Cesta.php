<?php

class Cesta {

    private $productos = [];

    public static function generaCesta() {
        if (isset($_SESSION['cesta'])) {
            return $_SESSION['cesta'];
        } else {
            return new Cesta();
        }
    }

    public function mostrarCesta() {
        $listado = "";
        $cantidad = 0;
        foreach ($this->producto as $codigo => $valores) {
            $listado .= "$valores[0] - $valores[1]";
        }
        return $listado;
    }

    public function nuevoProd($precio, $codigo) {
        if ($this->productos[$codigo][0] > 0) {
            $this->productos[$codigo][0] ++;
        } else {
            $this->productos[$codigo][0] = 1;
            $this->productos[$codigo][1] = $precio;
        }
    }

}

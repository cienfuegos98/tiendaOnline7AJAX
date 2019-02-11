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
        if ($this->productos == 0 || $this->productos == null) {
            $listado .= "NO HAY PRODUCTOS";
        } else {
            foreach ($this->productos as $codigo => $prods) {
                $listado .= "<p>"
                        . "<span class='cantidad'>" . $prods[0] . "</span>"
                        . "<span class='codigo'>" . $codigo . "</span>"
                        . "<span class='precio'>" . $prods[1] . "</span><br/>"
                        . "</p>";
            }

            $listado .= "<hr/>" . $this->calcularTotal();
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

    public function guardaCesta() {
        return $_SESSION['cesta'] = $this;
    }

    public function calcularTotal() {
        foreach ($this->productos as $prods) {
            $total += $prods[0] * $prods[1];
        }
        return "<span class='coste'>  Total: $total</span> ";
    }

    public function vaciar() {
        unset($this->productos);
    }

}

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
            $listado .= "<p class='cestaVacia'>0 PRODUCTOS</p>";
        } else {
            foreach ($this->productos as $codigo => $prods) {
                $listado .= "<p>"
                        . "<span class='cantidad'>" . $prods[0] . "</span>"
                        . "<span class='codigo'>" . $codigo . "</span>"
                        . "<form action='sitio.php' method='post'>"
                        . "<input type='hidden' name='cod' value='$codigo'>"
                        . "<input class='borrar' type='submit' name='accion' src='estilos/vaciarUno.png' value='Borrar'>"
                        . "</form>"
                        . "<span class='precio'>" . $prods[1] . "</span>"
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

    public function eliminoProducto($codigo) {
        /* PGM Mejorar solo elimino un elemento, eliminaré el producto completo
          si hay solo una unidad, si no decontar unidades..... */
        unset($this->productos[$codigo]);
    }

}

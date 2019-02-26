<?php

class Cesta {

    //Array de productos donde guardaremos todos los productos seleccionados con su codigo, cantidad y precio.
    private $productos = [];

    //Funcion para recoger el array fuera de esta clase.
    function getProductos() {
        return $this->productos;
    }

    //Funcion que si se da la sesion de cesta la devolvera, y si no, devoverá un objeto cesta.
    public static function generaCesta() {
        if (isset($_SESSION['cesta'])) {
            return $_SESSION['cesta'];
        } else {
            return new Cesta();
        }
    }

    //Funcion que devuelve una variable con el html de la cesta
    public function mostrarCesta() {
        $listado = "";
        if ($this->productos == 0 || $this->productos == null) {
            $listado .= "<p class='cestaVacia'>0 PRODUCTOS</p>";
        } else {
            foreach ($this->productos as $codigo => $prods) {
                $listado .= "<form action='sitio.php' method='post'>"
                        . "<p>"
                        . "<span class='cantidad'>" . $prods[0] . "</span>"//cantidad
                        . "<span class='codigo'>" . $codigo . "</span>"//codigo
                        . "<span class='precio'>" . $prods[1] . "</span>"//precio
                        . "<input class='cestaAccion3' type='submit' name='accion' value='Borrar'>"
                        . "<input type='hidden' name='cod' value='$codigo'>"
                        . "</p>"
                        . "</form>";
            }
            $listado .= "<br><hr/><span class='coste'>  Total:" . $this->calcularTotal() . "</span> ";
        }
        return $listado;
    }

//Funcion que crea un producto si no lo hay o lo añade si ya existe.
    public function nuevoProd($precio, $codigo) {
        if ($this->productos[$codigo][0] > 0) {
            $this->productos[$codigo][0] ++;
        } else {
            $this->productos[$codigo][0] = 1;
            $this->productos[$codigo][1] = $precio;
        }
    }

    //Guarda lo relaizado en la cesta
    public function guardaCesta() {
        return $_SESSION['cesta'] = $this;
    }

    //Calcula la suma del precio de todos los productos.
    public function calcularTotal() {
        foreach ($this->productos as $prods) {
            $total += $prods[0] * $prods[1];
        }
        return $total;
    }

    //Vacia la cesta.
    public function vaciar() {
        unset($this->productos);
    }

    //Elimina un producto si es uno o resta uno si hay mas de uno.
    public function eliminoProducto($codigo) {
        if ($this->productos[$codigo][0] > 1) {
            $this->productos[$codigo][0] --;
        } else {
            unset($this->productos[$codigo]);
        }
    }

}

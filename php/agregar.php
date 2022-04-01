<?php 
    function add_user($data, $BD){

        $name = $stock = $price = "";

        $errors = [];

        if(!empty($data["f_name"])){
            $name = limpiar_string($data['f_name'],$BD);
            if(empty($name)){
                array_push($errors,"The name of the product is missing");
            }
        } else{
            array_push($errors,"The name of the product is missing");
        }

        if(!empty($data["f_stock"])){
            $stock = intval($data['f_stock']);
        } else{
            array_push($errors,"The number of stock is missing");
        }
        
        if(!empty($data["f_price"])){
            $price = intval($data['f_price']);
        } else{
            array_push($errors,"The price of the product is missing");
        }
        $query = "";
        if(count($errors) == 0){
            $query = "INSERT INTO tb_productos(nombre_producto, stock, precio) ";
            $query .= "VALUES('$name', '$stock','$price')";
        }
        if(count($errors) == 0 && !empty($query)){
            $add_user = mysqli_query($BD,$query);
            if($add_user){
                return [$errors,true];
            }
            array_push($errors,mysqli_error($BD));
            
            return [$errors,false];
            
        }
        return [$errors,false];
    }

    function limpiar_string($data, $BD){
        $data = trim($data);
        $data = mysqli_real_escape_string($BD,$data);
        return $data;
    }

?>
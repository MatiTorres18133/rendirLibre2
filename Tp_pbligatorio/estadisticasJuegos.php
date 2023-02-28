<?php

$Mayor = [];
$incEnero = 0;
$opciones = menu();
while($opciones != 6){

    switch($opciones){
        case 1: opcion1();
        break;
        case 2:opcion2();
        break;
        case 3:opcion3();
        break;
        case 4:opcion4();
        break;
        case 5:opcion5();
        break;
        
    }
    $opciones = menu();

}


/*MODULO opcion1, realiza las acciones que tiene la opcion 1
*/
function opcion1(){ 
    
echo "********************OPCION 1 ************************\n";
echo "Ingrese MES de la venta: ";
$mesVenta = trim(strtoupper(fgets(STDIN)));
$ventasMayor= [];
$IncrementoEnero = 0;
$IncrementoFebrero = 0;
$IncrementoMarzo = 0;
$IncrementoAbril = 0;
$IncrementoMayo = 0;
$IncrementoJunio = 0;
$IncrementoJulio = 0;
$IncrementoAgosto = 0;
$IncrementoSeptiembre = 0;
$IncrementoOctubre = 0;
$IncrementoNoviembre = 0;
$IncrementoDiciembre = 0;

switch($mesVenta){
    case 'ENERO':
        $totalEnero=0;
        echo "Ingrese nombre del juego vendido en ENERO: ";
        $juego = trim(strtoupper(fgets(STDIN)));
        echo "Ingrese precio del ticket del mes de ENERO: ";
        $precioTKT= trim(fgets(STDIN));
        echo "Ingrese cantidad de tickets vendidos del juego ".$juego.": ";
        $cantTickets= trim(fgets(STDIN)); 
        $totalEnero= $precioTKT * $cantTickets;
        $IncrementoEnero= $IncrementoEnero  + $totalEnero;

        $verificarMayor = verificarMayor($totalEnero,"ENERO");
        if($verificarMayor ==true){
            $ventasMayor = juegoConMayorVenta($juego,$precioTKT,$cantTickets,'ENERO');
            
        }
        break;
        case 'FEBRERO':
            $totalFebrero=0;
            echo "Ingrese nombre del juego vendido en FEBRERO: ";
            $juego = trim(strtoupper(fgets(STDIN)));
            echo "Ingrese precio del ticket del mes de FEBRERO: ";
            $precioTKT= trim(fgets(STDIN));
            echo "Ingrese cantidad de tickets vendidos del juego ".$juego.": ";
            $cantTickets= trim(fgets(STDIN)); 
            $totalFebrero= $precioTKT * $cantTickets;
            $IncrementoEnero= $IncrementoEnero  + $totalFebrero;
    
            $verificarMayor = verificarMayor($totalFebrero,'FEBRERO');
            if($verificarMayor ==true){
                $ventasMayor = juegoConMayorVenta($juego,$precioTKT,$cantTickets,'FEBRERO');
                array_push($Mayor, $ventasMayor);
            }
            break;

            
         
}

}

function opcion2(){

}

function opcion3(){

}

function opcion4(){

}
function opcion5(){

}



function tickets($montoEnero=null,$montoFebrero=null,$montoMarzo=null,$montoAbril=null,$montoMayo=null,
$montoJunio=null,$montoJulio=null,$montoAgosto=null,$montoSeptiembre=null,$montoOctubre=null,$montoNoviembre=null,$montoDiciembre=null,){

    $tick = [];
    $tick[0]=[
        'Monto total de ENERO: ' => $montoEnero,
    ];
    $tick[1]=[
        'Monto total de FEBERERO: ' => $montoFebrero,
    ]; $tick[2]=[
        'Monto total de MARZO: ' => $montoMarzo,
    ]; $tick[3]=[
        'Monto total de ABRIL: ' => $montoAbril,
    ]; $tick[4]=[
        'Monto total de MAYO: ' => $montoMayo,
    ]; $tick[5]=[
        'Monto total de JUNIO: ' => $montoJunio,
    ]; $tick[6]=[
        'Monto total de JULIO: ' => $montoJulio,
    ]; $tick[7]=[
        'Monto total de AGOSTO: ' => $montoAgosto,
    ]; $tick[8]=[
        'Monto total de SEPTIEMBRE: ' => $montoSeptiembre,
    ]; $tick[9]=[
        'Monto total de OCTUBRE: ' => $montoOctubre,
    ]; $tick[10]=[
        'Monto total de NOVIEMBRE: ' => $montoNoviembre,
    ]; $tick[11]=[
        'Monto total de DICIEMBRE: ' => $montoDiciembre,
    ];

    

    return $tick;
}


function verificarMayor($montoTotal,$mes){
  if($mes== 'ENERO'){
    $monto = 0;
    if($montoTotal>$monto){
        return true;

    }else{
        return false;
    }
  }elseif($mes=='FEBRERO'){
    $monto = 0;
    if($montoTotal>$monto){
        return true;

    }else{
        return false;
    }
  }

}
function juegoConMayorVenta($nombreJuego, $precioTicket,$cantTicket,$mes){

    $juegoMasVendido = [];

   if($mes =='ENERO'){
    $juegoMasVendido [0]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket , 'mes'=>$mes];
   }elseif($mes =='FEBRERO'){
   $juegoMasVendido [1]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='MARZO'){
    $juegoMasVendido [2]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='ABRIL'){
    $juegoMasVendido [3]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='MAYO'){
    $juegoMasVendido [4]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='JUNIO'){
    $juegoMasVendido [5]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='JULIO'){
    $juegoMasVendido [6]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='AGOSTO'){
    $juegoMasVendido [7]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='SEPTIEMBRE'){
    $juegoMasVendido [8]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='OCTUBRE'){
    $juegoMasVendido [9]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='NOVIEMBRE'){
    $juegoMasVendido [10]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }elseif($mes=='DICIEMBRE'){
    $juegoMasVendido [11]=['nombre'=>$nombreJuego,'precioTicket'=>$precioTicket,'cantTicket'=>$cantTicket,'mes'=>$mes];
   }
    return $juegoMasVendido;

}


function menu(){
    echo "***************BIENVENIDO AL MENU DE OPCIONES********************\n";
    echo "1)Ingresar una venta\n";
    echo "2)Mes con mayor monto de ventas\n";
    echo "3)Primer mes que supera un monto de ventas\n";
    echo "4)Informacion de un mes\n";
    echo "5)Juegos mas vendidos ordenados\n";
    echo "6)Salir\n";
    echo "INGRESE UNA OPCION: ";
    $opcion = trim(fgets(STDIN));
    return $opcion;
}

function incrementarMontosTickets($ventas){
    $incremento = tickets();
    for($i=0;$i<count($ventas);$i++){
        $incremento[$i] = $ventas['cantTotal'];
        
    }

    return $incremento;  
}




?>
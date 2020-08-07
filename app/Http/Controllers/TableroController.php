<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dashboardResult;

class TableroController extends Controller
{
    protected $result      = false;
	protected $message     = 'Ocurrió un problema al procesar su solicitud';
	protected $records     = array();
    protected $status_code = 400;
   
    public function tablero(){
        $obj    = ['y' => '0', 'x' => '0', 'value' => '5'];
        $obj1   = ['y' => '1', 'x' => '0', 'value' => '6'];
        $obj2   = ['y' => '2', 'x' => '1', 'value' => '9'];
        $obj3   = ['y' => '3', 'x' => '0', 'value' => '8'];
        $obj4   = ['y' => '4', 'x' => '0', 'value' => '4'];
        $obj5   = ['y' => '5', 'x' => '0', 'value' => '7'];
        $obj6   = ['y' => '6', 'x' => '1', 'value' => '6'];
        $obj7   = ['y' => '7', 'x' => '3', 'value' => '4'];
        $obj8   = ['y' => '8', 'x' => '4', 'value' => '8'];

        $obj9    = ['y' => '0', 'x' => '1', 'value' => '3'];
        $obj10   = ['y' => '1', 'x' => '3', 'value' => '1'];
        $obj11   = ['y' => '2', 'x' => '2', 'value' => '8'];
        $obj12   = ['y' => '3', 'x' => '4', 'value' => '6'];
        $obj13   = ['y' => '4', 'x' => '3', 'value' => '8'];
        $obj14   = ['y' => '5', 'x' => '4', 'value' => '2'];
        $obj15   = ['y' => '6', 'x' => '6', 'value' => '2'];
        $obj16   = ['y' => '7', 'x' => '4', 'value' => '1'];
        $obj17   = ['y' => '8', 'x' => '7', 'value' => '7'];

        $obj18   = ['y' => '0', 'x' => '4', 'value' => '7'];
        $obj19   = ['y' => '1', 'x' => '4', 'value' => '9'];
        $obj20   = ['y' => '2', 'x' => '7', 'value' => '6'];
        $obj21   = ['y' => '3', 'x' => '8', 'value' => '3'];
        $obj22   = ['y' => '4', 'x' => '5', 'value' => '3'];
        $obj23   = ['y' => '5', 'x' => '8', 'value' => '6'];
        $obj24   = ['y' => '6', 'x' => '7', 'value' => '8'];
        $obj25   = ['y' => '7', 'x' => '5', 'value' => '9'];
        $obj26   = ['y' => '8', 'x' => '8', 'value' => '9'];

        $obj27   = ['y' => '1', 'x' => '5', 'value' => '5'];
        $obj28   = ['y' => '4', 'x' => '8', 'value' => '1'];
        $obj29   = ['y' => '7', 'x' => '8', 'value' => '5'];

        return[ $obj, $obj1, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8,
            $obj9, $obj10, $obj11, $obj12, $obj13, $obj14, $obj15, $obj16, $obj17,
            $obj18, $obj19, $obj20, $obj21, $obj22, $obj23, $obj24, $obj25, $obj26,
            $obj27, $obj28, $obj29];
    }

    public function saveBoard(Request $request){
        $data = $request->all();
        $suma =0; $suma1 =0; $suma2 =0; $suma3 =0; $suma4 =0;
        $suma5 =0; $suma6 =0; $suma7 =0; $suma8 =0;
        $fila = 0; $fila1 = 0; $fila2 = 0; $fila3 = 0; $fila4 = 0;
        $fila5 = 0; $fila6 = 0; $fila7 = 0; $fila8 = 0; 
        for ($i=0; $i <count($data); $i++) { 
            $colum[$i] = $data[$i];  
        }
        for ($x=0; $x < 9; $x++) {
            for ($j=0; $j < 9; $j++) { 
                if ($x == 0) {
                    $suma = $colum[$x]["a".$j] + $suma;
                }elseif ($x == 1) {
                    $suma1 = $colum[$x]["b".$j] + $suma1;
                }elseif ($x == 2) {
                    $suma2 = $colum[$x]["c".$j] + $suma2;
                }elseif ($x == 3) {
                    $suma3 = $colum[$x]["d".$j] + $suma3;
                }elseif ($x == 4) {
                    $suma4 = $colum[$x]["e".$j] + $suma4;
                }elseif ($x == 5) {
                    $suma5 = $colum[$x]["f".$j] + $suma5;
                }elseif ($x == 6) {
                    $suma6 = $colum[$x]["g".$j] + $suma6;
                }elseif ($x == 7) {
                    $suma7 = $colum[$x]["h".$j] + $suma7;
                }elseif ($x == 8) {
                    $suma8 = $colum[$x]["i".$j] + $suma8;
                }
            }
        }

        for ($x=0; $x < 9; $x++) { 
            for ($j=0; $j < 9; $j++) { 
                if ($j == 0) {
                    if ($x == 0) {
                        $fila = $colum[$x]["a".$j] + $fila;
                    }elseif ($x == 1) {
                        $fila = $colum[$x]["b".$j] + $fila;
                    }elseif ($x == 2) {
                        $fila = $colum[$x]["c".$j] + $fila;
                    }elseif ($x == 3) {
                        $fila = $colum[$x]["d".$j] + $fila;
                    }elseif ($x == 4) {
                        $fila = $colum[$x]["e".$j] + $fila;
                    }elseif ($x == 5) {
                        $fila = $colum[$x]["f".$j] + $fila;
                    }elseif ($x == 6) {
                        $fila = $colum[$x]["g".$j] + $fila;
                    }elseif ($x == 7) {
                        $fila = $colum[$x]["h".$j] + $fila;
                    }elseif ($x == 8) {
                        $fila = $colum[$x]["i".$j] + $fila;
                    }
                }elseif ($j==1) {
                    if ($x == 0) {
                        $fila1 = $colum[$x]["a".$j] + $fila1;
                    }elseif ($x == 1) {
                        $fila1 = $colum[$x]["b".$j] + $fila1;
                    }elseif ($x == 2) {
                        $fila1 = $colum[$x]["c".$j] + $fila1;
                    }elseif ($x == 3) {
                        $fila1 = $colum[$x]["d".$j] + $fila1;
                    }elseif ($x == 4) {
                        $fila1 = $colum[$x]["e".$j] + $fila1;
                    }elseif ($x == 5) {
                        $fila1 = $colum[$x]["f".$j] + $fila1;
                    }elseif ($x == 6) {
                        $fila1 = $colum[$x]["g".$j] + $fila1;
                    }elseif ($x == 7) {
                        $fila1 = $colum[$x]["h".$j] + $fila1;
                    }elseif ($x == 8) {
                        $fila1 = $colum[$x]["i".$j] + $fila1;
                    }
                }elseif ($j==2) {
                    if ($x == 0) {
                        $fila2 = $colum[$x]["a".$j] + $fila2;
                    }elseif ($x == 1) {
                        $fila2 = $colum[$x]["b".$j] + $fila2;
                    }elseif ($x == 2) {
                        $fila2 = $colum[$x]["c".$j] + $fila2;
                    }elseif ($x == 3) {
                        $fila2 = $colum[$x]["d".$j] + $fila2;
                    }elseif ($x == 4) {
                        $fila2 = $colum[$x]["e".$j] + $fila2;
                    }elseif ($x == 5) {
                        $fila2 = $colum[$x]["f".$j] + $fila2;
                    }elseif ($x == 6) {
                        $fila2 = $colum[$x]["g".$j] + $fila2;
                    }elseif ($x == 7) {
                        $fila2 = $colum[$x]["h".$j] + $fila2;
                    }elseif ($x == 8) {
                        $fila2 = $colum[$x]["i".$j] + $fila2;
                    }
                }elseif ($j==3) {
                    if ($x == 0) {
                        $fila3 = $colum[$x]["a".$j] + $fila3;
                    }elseif ($x == 1) {
                        $fila3 = $colum[$x]["b".$j] + $fila3;
                    }elseif ($x == 2) {
                        $fila3 = $colum[$x]["c".$j] + $fila3;
                    }elseif ($x == 3) {
                        $fila3 = $colum[$x]["d".$j] + $fila3;
                    }elseif ($x == 4) {
                        $fila3 = $colum[$x]["e".$j] + $fila3;
                    }elseif ($x == 5) {
                        $fila3 = $colum[$x]["f".$j] + $fila3;
                    }elseif ($x == 6) {
                        $fila3 = $colum[$x]["g".$j] + $fila3;
                    }elseif ($x == 7) {
                        $fila3 = $colum[$x]["h".$j] + $fila3;
                    }elseif ($x == 8) {
                        $fila3 = $colum[$x]["i".$j] + $fila3;
                    }
                }elseif ($j==4) {
                    if ($x == 0) {
                        $fila4 = $colum[$x]["a".$j] + $fila4;
                    }elseif ($x == 1) {
                        $fila4 = $colum[$x]["b".$j] + $fila4;
                    }elseif ($x == 2) {
                        $fila4 = $colum[$x]["c".$j] + $fila4;
                    }elseif ($x == 3) {
                        $fila4 = $colum[$x]["d".$j] + $fila4;
                    }elseif ($x == 4) {
                        $fila4 = $colum[$x]["e".$j] + $fila4;
                    }elseif ($x == 5) {
                        $fila4 = $colum[$x]["f".$j] + $fila4;
                    }elseif ($x == 6) {
                        $fila4 = $colum[$x]["g".$j] + $fila4;
                    }elseif ($x == 7) {
                        $fila4 = $colum[$x]["h".$j] + $fila4;
                    }elseif ($x == 8) {
                        $fila4 = $colum[$x]["i".$j] + $fila4;
                    }
                }elseif ($j==5) {
                    if ($x == 0) {
                        $fila5 = $colum[$x]["a".$j] + $fila5;
                    }elseif ($x == 1) {
                        $fila5 = $colum[$x]["b".$j] + $fila5;
                    }elseif ($x == 2) {
                        $fila5 = $colum[$x]["c".$j] + $fila5;
                    }elseif ($x == 3) {
                        $fila5 = $colum[$x]["d".$j] + $fila5;
                    }elseif ($x == 4) {
                        $fila5 = $colum[$x]["e".$j] + $fila5;
                    }elseif ($x == 5) {
                        $fila5 = $colum[$x]["f".$j] + $fila5;
                    }elseif ($x == 6) {
                        $fila5 = $colum[$x]["g".$j] + $fila5;
                    }elseif ($x == 7) {
                        $fila5 = $colum[$x]["h".$j] + $fila5;
                    }elseif ($x == 8) {
                        $fila5 = $colum[$x]["i".$j] + $fila5;
                    }
                }elseif ($j==6) {
                    if ($x == 0) {
                        $fila6 = $colum[$x]["a".$j] + $fila6;
                    }elseif ($x == 1) {
                        $fila6 = $colum[$x]["b".$j] + $fila6;
                    }elseif ($x == 2) {
                        $fila6 = $colum[$x]["c".$j] + $fila6;
                    }elseif ($x == 3) {
                        $fila6 = $colum[$x]["d".$j] + $fila6;
                    }elseif ($x == 4) {
                        $fila6 = $colum[$x]["e".$j] + $fila6;
                    }elseif ($x == 5) {
                        $fila6 = $colum[$x]["f".$j] + $fila6;
                    }elseif ($x == 6) {
                        $fila6 = $colum[$x]["g".$j] + $fila6;
                    }elseif ($x == 7) {
                        $fila6 = $colum[$x]["h".$j] + $fila6;
                    }elseif ($x == 8) {
                        $fila6 = $colum[$x]["i".$j] + $fila6;
                    }
                }elseif ($j==7) {
                    if ($x == 0) {
                        $fila7 = $colum[$x]["a".$j] + $fila7;
                    }elseif ($x == 1) {
                        $fila7 = $colum[$x]["b".$j] + $fila7;
                    }elseif ($x == 2) {
                        $fila7 = $colum[$x]["c".$j] + $fila7;
                    }elseif ($x == 3) {
                        $fila7 = $colum[$x]["d".$j] + $fila7;
                    }elseif ($x == 4) {
                        $fila7 = $colum[$x]["e".$j] + $fila7;
                    }elseif ($x == 5) {
                        $fila7 = $colum[$x]["f".$j] + $fila7;
                    }elseif ($x == 6) {
                        $fila7 = $colum[$x]["g".$j] + $fila7;
                    }elseif ($x == 7) {
                        $fila7 = $colum[$x]["h".$j] + $fila7;
                    }elseif ($x == 8) {
                        $fila7 = $colum[$x]["i".$j] + $fila7;
                    }
                }elseif ($j==8) {
                    if ($x == 0) {
                        $fila8 = $colum[$x]["a".$j] + $fila8;
                    }elseif ($x == 1) {
                        $fila8 = $colum[$x]["b".$j] + $fila8;
                    }elseif ($x == 2) {
                        $fila8 = $colum[$x]["c".$j] + $fila8;
                    }elseif ($x == 3) {
                        $fila8 = $colum[$x]["d".$j] + $fila8;
                    }elseif ($x == 4) {
                        $fila8 = $colum[$x]["e".$j] + $fila8;
                    }elseif ($x == 5) {
                        $fila8 = $colum[$x]["f".$j] + $fila8;
                    }elseif ($x == 6) {
                        $fila8 = $colum[$x]["g".$j] + $fila8;
                    }elseif ($x == 7) {
                        $fila8 = $colum[$x]["h".$j] + $fila8;
                    }elseif ($x == 8) {
                        $fila8 = $colum[$x]["i".$j] + $fila8;
                    }
                }
            }
        }

        if ($suma == 45 && $suma1 == 45 && $suma2 == 45 && $suma3 == 45 && $suma4 == 45 && 
            $suma5 == 45 && $suma6 == 45 && $suma7 == 45 && $suma8 == 45) {
            $columns = true;
        }else{
            $columns = false;
        }

        if ($fila == 45 && $fila1 == 45 && $fila2 == 45 && $fila3 == 45 && $fila4 == 45 && 
            $fila5 == 45 && $fila6 == 45 && $fila7 == 45 && $fila8 == 45) {
            $rows = true;
        }else{
            $rows = false;
        }

        if ($columns == true && $rows == true) {
            $message = "Las filas y las columnas suman correctamente 45";
            $isSatisfactory = true;
            $result = dashboardResult::create([
                'name'              => $colum[9]['name'],
                'column'            => json_encode($colum[0]),
                'column1'           => json_encode($colum[1]),
                'column2'           => json_encode($colum[2]),
                'column3'           => json_encode($colum[3]),
                'column4'           => json_encode($colum[4]),
                'column5'           => json_encode($colum[5]),
                'column6'           => json_encode($colum[6]),
                'column7'           => json_encode($colum[7]),
                'column8'           => json_encode($colum[8]),
                'isSatisfactory'    => $isSatisfactory
            ]);
            $response = [
                'result'        => true,
                'message'       => $message,
                'records'       => $result,
                'status_code'   => 200
            ];
            
        }else{
            $message = "Las filas y las columnas no suman correctamente 45";
            $isSatisfactory = false;
            $result = dashboardResult::create([
                'name'              => $colum[9]['name'],
                'column'            => json_encode($colum[0]),
                'column1'           => json_encode($colum[1]),
                'column2'           => json_encode($colum[2]),
                'column3'           => json_encode($colum[3]),
                'column4'           => json_encode($colum[4]),
                'column5'           => json_encode($colum[5]),
                'column6'           => json_encode($colum[6]),
                'column7'           => json_encode($colum[7]),
                'column8'           => json_encode($colum[8]),
                'isSatisfactory'    => $isSatisfactory
            ]);
            $response = [
                'result'        => true,
                'message'       => $message,
                'records'       => $result,
                'status_code'   => 400
            ];
        }

        return response()->json($response);
    }

    public function listBoards(){
        $list = dashboardResult::orderBy('id','desc')->get();
        return $list;
    }
}

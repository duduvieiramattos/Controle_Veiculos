<?php

namespace App\Http\Controllers;
use DB;
use \App\Vehicle;
use Illuminate\Http\Request;

use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
	private $vehicle;
  private $totalPage = 5;

	public function __construct(Vehicle $vehicle)
  {
    $this->vehicle = $vehicle;
    $this->vehicles = $vehicle;
    $this->middleware('auth');
  }


//-------------------- Adicionar veiculos --------------------//
  public function get_add_vehicle(Request $field)
  {
  	return view('vehicle/add_vehicle');
  }

  public function post_add_vehicle(VehicleRequest $info)
  {
    $vehicle = $this->vehicle->addVehicle($info);
    return redirect()->route('vehicles')->with('message', 'Veiculo adicionado com sucesso!');;
  }
	//---------------- Listar veiculo Específico -----------------//


	 public function get_list_vehicle()
  {
    return list_vehicles();
  }

  public function post_list_vehicle(Request $field)
  {
    if(is_null($field['situacao'])) {
      $vehicles = $this->vehicles->getVehicles();
    } else {
      $vehicles = $this->vehicle->getVehicle($field);
    }
    return view('vehicle/list_vehicle', compact('vehicles'));
  }

	//--------------------- Listar clientes ----------------------//
   public function list_vehicles()
  {
  //  $vehicles = $this->vehicles->getVehicles();
    $vehicles = $this->vehicles->paginate($this->totalPage);
    return view('vehicle/list_vehicle', compact('vehicles'));
  }


	//-------------------- Editar Veiculos --------------------//
	public function get_edit_vehicle($id)
{
	$vehicle = $this->vehicle->find($id);
    return view('vehicle/edit_vehicle', compact('vehicle'));
}

public function post_edit_vehicle(VehicleRequest $info, $id)
{
	$vehicle = $this->vehicle->find($id);
	$vehicle->brand  = $info['brand'];
	$vehicle->model = $info['model'];
	$vehicle->placa = $info['placa'];
	$vehicle->year  = $info['year'];
	$vehicle->situacao = $info['situacao'];
	$vehicle->save();
	return redirect()->route('vehicles')->with('message', 'Veiculo alterado com sucesso!');;
}

//-------------------- Deletar Veiculos --------------------//

public function delete_vehicle($id) {
			$vehicle = $this->vehicle->find($id);
			$vehicle->delete();
			return redirect()->route('vehicles')->with('message', 'Veiculo excluído com sucesso!');
	}

}

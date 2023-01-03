<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Planillas;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PlanillasController extends Controller
{

    public function __construct() {
        $this->middleware('can:planillas.index')->only('index');
        $this->middleware('can:planillas.create')->only('store', 'create');
        $this->middleware('can:planillas.edit')->only('update', 'edit');
        $this->middleware('can:planillas.delete')->only('delete');
        $this->middleware('can:planillas.consultar')->only('consultar');
        
    }
    


    public function index(Request $request){

        $texto= trim($request->get('texto'));
        $planillas =DB::table('planillas')
                         ->select('id','cedula','placa','cantidad_planillas','created_at')
                         ->where('cedula','LIKE','%'.$texto.'%')
                         ->orWhere('placa','LIKE','%'.$texto.'%')
                         ->orderBy('cedula','asc')
                         ->paginate(5);
        return view('planillas.index', compact('planillas','texto'));

    }

    public function create(){
        return view('planillas.create');

    }

    public function store(Request $request){

        $rules = [
            'cedula' => 'numeric|digits_between:-1,100',
            'placa' => 'required',
            'cantidad_planillas' => 'numeric|required',

        ];

        $messages = [

            'cedula.required' => 'Debes diligenciar la cedula',
            'placa.required' => 'Debes diligenciar la placa',
            'cantidad_planillas' => 'Debes indicar la cantidad',

        ];

        $this->validate($request,$rules,$messages);

        $datosPlanilla = request()->except('_token');
        
        if ($datosPlanilla < -1) { // condición
            return 'Lo sentimos, has alcanzado el máximo permitido (5)'; // mensaje
        }
        else {
            Planillas::insert($datosPlanilla);
        }
        return redirect('planillas')->with('mensaje','Planilla creada con exito');
        
        

    }

    public function edit($id){

        $planillas = Planillas::findOrFail($id);
        return view('planillas.edit',compact('planillas'));

    }

    public function update(Request $request, $id){
        $rules = [
            'cedula' => 'required',
            'placa' => 'required',
            'cantidad_planillas' => 'required',

        ];

        $messages = [

            'cedula.required' => 'Debes diligenciar la cedula',
            'placa.required' => 'Debes diligenciar la placa',
            'cantidad_planillas' => 'Debes indicar la cantidad',

        ];
        $this->validate($request,$rules,$messages);


        $datosPlanilla = request()->except('_token', '_method','created_at');
        Planillas::where('id', '=' , $id)->update($datosPlanilla);

        $planillas = Planillas::findOrFail($id);
        return redirect('planillas')->with('mensaje','Planilla modificada con exito');

    }

    public function delete($id){

        Planillas::destroy($id);
        return redirect('planillas')->with('mensaje','Planilla eliminada con exito');



    }

    public function consultar(Request $request, $planilla){

            $placa= trim($request->get('placa'));
            $consultar = DB::table('planillas')
                         ->select('id','placa','cedula','cantidad_planillas')
                         ->where('placa','=',$planilla)
                         ->sum('cantidad_planillas');



        return view('planillas.consultar', compact('consultar','placa','planilla'));

    }




    public function restar(Request  $request, $planilla){

        $rules = [

            'cantidad_planillas' => 'numeric|digits_between:-1,100',

        ];

        $messages = [

            'cedula.digits_between' => 'Debe contener minimo -1 a maximo 100 digitos.',

        ];
        $this->validate($request,$rules,$messages);

    
            
            
             
            if('cantidad_planilla' == -2 ){
                
                echo "No puedes restar mas planillas";
            }else{
                $planilla = DB::table('planillas')
               ->select('UPDATE planillas set cantidad_planillas')
               ->where('id','=',$planilla)    
               ->decrement('cantidad_planillas', 1);
            }

        return redirect()->route('planillas.index',compact('planilla'));

    }

    public function pendientes(Request $request){

        
            
       
        $consultar =  DB::select('SELECT id, cedula , cantidad_planillas FROM `planillas` WHERE cantidad_planillas = -1');
        $planillas =DB::table('planillas')
        ->select('id','cedula','placa','cantidad_planillas','created_at')
        ->where('cantidad_planillas','=', -1)
        
        
        ->paginate(15);

        return view('planillas.pendientes', compact('consultar','planillas'));



    }
    
}

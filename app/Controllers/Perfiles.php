<?php 

namespace App\Controllers;

use App\Models\PersonaModel;
use CodeIgniter\Session\Session; 

class Perfiles extends BaseController
{

    public function RegistroMaquinas()
    {
        return view('agregarMaquinas');
    }

    public function datosUsuario()
    {
        $id_usuario = session('id');
        $personaModel = new PersonaModel();
        $info_user = $personaModel->where('id' , $id_usuario)->find();
        
        $datos['usuarios'] = $info_user; 
        $datos['titulo'] = 'Datos Usuario';
        return view('datos_usuario',$datos);
    }
}

?>
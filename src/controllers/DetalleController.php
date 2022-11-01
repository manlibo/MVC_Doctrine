<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tareas;

use Tareas as GlobalTareas;

class DetalleController extends AbstractController
{
    /**
     * Mostraremos la totalidad de los datos de una determinada tarea a partir de su id.
     */
    /* public function detalleTarea($id = null)
    {
        if (is_null($id)||strcmp("", $id)==0) {
            //No recibe id por lo tanto renderizamos la plantilla pasandos los parámetros como nulos
            $this->render("detail.html.twig",["resultados" =>null]);
        } else {
            //Creamos el modelo para poder acceder a los datos.
            $tarea = new Tareas(new DataBase());
            //Podemos usar sus métodos para poder reutilizar código.
            //El metodo render primero debemos pasarle la plantilla
            $this->render("detail.html.twig",
            //Después pasaremos los parámetros que debe usar la plantilla
            [
                //En este caso pasaremos un array con el detalle de la tarea
                "resultados" => $tarea->findById($id)
            ]);
            
        } 
    } */
    public function detalleTarea($id){ 
        //Obtenemos el objeto EntityManager para realizar la busqueda de datos.
        $entityManager = (new EntityManager())->getEntityManager();
        //Obtenemos el repositorio desde la entidad y llamamos en este caso a un método predefinido de doctrine
        $tareaRepository = $entityManager->getRepository(Tareas::class);
        $data = $tareaRepository->find($id);
        $this->render("detail.html.twig",
        ['resultados'=>$data,
        //'titulo'=>$data[0]->getTitulo()
        ]);
    }


}

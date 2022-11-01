<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tareas;

use Tareas as GlobalTareas;

class MainController extends AbstractController{

    /**
     *  Al crear el modelo no es necesario pasarle una conexiión a la BD-
     */
    public function main(){ 
       /*  //Obtenemos el objeto EntityManager para realizar la busqueda de datos.
        $entityManager = (new EntityManager())->getEntityManager();
        //Obtenemos el repositorio desde la entidad y llamamos en este caso a un método predefinido de doctrine
        $tareasRepository = $entityManager->getRepository(Tareas::class);
        $data = $tareasRepository->findAll();
        $this->render("list.html.twig",
        ['resultados'=>$data,
        'titulo'=>$data[0]->getTitulo()
        ]); */

        //Obtenemos la fecha y hora actual
        $fecha = date('d-m-y H:i:s');
        //Cargamos la plantilla inicial y le pasamos la fecha y hora que t.
        $this->render("index.html.twig",[
            'fecha_actual'=> $fecha
        ]);
    }
}
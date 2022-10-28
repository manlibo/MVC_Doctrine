<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tareas;
use App\Models\Tareas as ModelsTareas;
use Tareas as GlobalTareas;

class MainController extends AbstractController{

    /**
     *  Al crear el modelo no es necesario pasarle una conexiión a la BD-
     */
    public function main(){ 
        //Obtenemos el objeto EntityManager para realizar la busqueda de datos.
        $entityManager = (new EntityManager())->getEntityManager();
        //Obtenemos el repositorio desde la entidad y llamamos en este caso a un método predefinido de doctrine
        $tareas = $entityManager->getRepository(Tareas::class);
        $data = $tareas->findAll();
        $this->render("list.html.twig",
        ['resultados'=>$data,
        'titulo'=>$data[0]->getTitulo()
        ]);
    }
}
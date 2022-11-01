<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tareas;

use Tareas as GlobalTareas;

class ListController extends AbstractController{
    /**
     * Vamos a mostrar un listado con todas las tareas
     */
    public function listadoTarea(){
        //Obtenemos el objeto EntityManager para realizar la busqueda de datos.
        $entityManager = (new EntityManager())->getEntityManager();
        //Obtenemos el repositorio desde la entidad y llamamos en este caso a un método predefinido de doctrine
        $tareasRepository = $entityManager->getRepository(Tareas::class);
        $data = $tareasRepository->findAll();
        $this->render("list.html.twig",
        ['resultados'=>$data,
        'titulo'=>$data[0]->getTitulo()
        ]);
    }
}
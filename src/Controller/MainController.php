<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/", name="app_home")
     */
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        return new Response("<body>Hello  World!</body>");
    }

    /**
     * @Route("/bonjour/{name}", name="app_bonjour", defaults={"name"="World"})
     */
    #[Route(
        '/bonjour/{name}',
        name: 'app_bonjour',
        defaults: ['name' => 'Inconnu'],
        requirements: ['name' => '[A-Za-z]+'],
        methods: ['GET']
    )]
    public function indexBix(string $name): Response
    {
        // $request= Request::createFromGlobals();
        // $nom=$request->query->get('nom', 'Inconnu');

        // print_r($nom ." \n");

        return new Response('<body>bonjour </body>' . $name);
    }

    // #[Route(
    //     '/calcul/{value}',
    //     name: 'calcul',
    //     defaults: ['value' => 0],
    //     requirements: ['value' => '^(?:100|[1-9]?\d)$'],
    //     methods: ['GET']
    // )]
    public static function indexter(int $value): Response
    {
        // $request= Request::createFromGlobals();
        // $nom=$request->query->get('nom', 'Inconnu');

        // print_r($nom ." \n");

        return new Response('<body>Calcul </body>' . $value);
    }
}

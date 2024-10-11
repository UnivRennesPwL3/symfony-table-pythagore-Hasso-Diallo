<?php
 
namespace App\Controller;
 
use App\Service\Code;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class TableDePythagoreController extends AbstractController
{
    private $pythagore;
 
   
    public function __construct(Code $pythagore)
    {
        $this->pythagore = $pythagore;  
    }
 
   
    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
       
        $pythagoreTable = $this->pythagore->display();
 
        return $this->render('displayPythagore.html.twig', [
            'pythagoreTable' => $pythagoreTable,  
        ]);
    }
}
 

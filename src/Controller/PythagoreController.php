<?php
 
namespace App\Controller;
 
use App\Service\PythagoreUtility;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagore;
 
   
    public function __construct(PythagoreUtility $pythagore)
    {
        $this->pythagore = $pythagore;  
    }
 
   
    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'pythagoreTable' => $this->pythagore->display(),  
        ]);
    }
}
 

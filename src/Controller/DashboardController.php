<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function dashboard(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }
}

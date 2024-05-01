<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalculatorController extends AbstractController {
    #[Route('/calculator', name: 'calculator')]
    public function calculator(Request $req): Response {
        return $this->render('calculator/calculator.html.twig', [
            'controller_name' => 'CalculatorController',
        ]);
    }

    #[Route('/calculate', name: 'app_calculate')]
    public function calculate(Request $req): Response {
        $num1 = $req->get("first_number");
        $num2 = $req->get("second_number");
        $operator = $req->get("operator");
        exit("$num1, $num2, $operator");
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PalindromeController extends AbstractController {

    #[Route('/palindrome_checker', name: 'palindrome_checker')]
    public function palindromeChecker(Request $req) {
        $str = $req->query->get("str");

        return $this->render('palindrome/palindrome.html.twig', [
            "str" => $str,
            "message" => "hello"
        ]);
    }
}

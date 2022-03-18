<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {

        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = "Errou!";
        }

        if ($request->get('erro') == 2) {
            $erro = "Permissão negada!";
        }

        $charada = [
            '1' => 'O que é, o que é: tem cabeça e dentes, mas não é gente e nem animal?',
            '2' => 'O que é, o que é? Dá muitas voltas e não sai do lugar.',
            '3' => 'O que é, o que é? Não se come, mas é bom para se comer.',
            '4' => 'O que é, o que é? Quanto mais rugas têm mais novo é',
            '5' => 'O que é, o que é? Nunca volta, embora nunca tenha ido.',
            '6' => 'O que é, o que é? Anda com os pés na cabeça.',
            '7' => 'O que é, o que é? Quanto mais se tira mais se aumenta.',
            '8' => 'O que é, o que é? Fica cheio durante o dia e vazio durante a noite.',
            '9' => 'O que é, o que é? Mesmo atravessando o rio não se molha.',
            '10' => 'O que é, o que é? Pode passar diante do sol sem fazer sombra.'
        ];

        $indice = array_rand($charada);
        
        //echo "Resposta é... $charada[$resposta]";

        
        return view('login', ['erro' => $erro, 'indice' => $charada[$indice] ]);
    }

    public function autenticar(Request $request) {

        $respostas = [
            '1' => 'alho',
            '2' => 'relógio',
            '3' => 'talher',
            '4' => 'pneu',
            '5' => 'o passado',
            '6' => 'piolho',
            '7' => 'buraco',
            '8' => 'sapato',
            '9' => 'ponte',
            '10' => 'vento'
            

        ];

       
        $resposta = array_search($request->get('senha'), $respostas);

        
        if ($resposta) {

            session_start();

            $_SESSION['user1'] = $resposta;

            return redirect()->route('default');

        } else {
            return redirect()->route('login', ['erro' => 1]);
        }
        
    }

}

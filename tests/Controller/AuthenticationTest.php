<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationTest extends WebTestCase
{
    // public function testSuccessfulAuthentication()
    // {
    //     $client = static::createClient();

    //     // Simuler une requête POST vers le formulaire de connexion avec des identifiants valides
    //     $client->request('GET', '/login', [
    //         'email' => 'email@email.mail',
    //         'password' => '123456',
    //     ]);

    //     $client->followRedirects(); // Activer la redirection automatique
    //     // $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    //     $this->assertSelectorTextContains('h1', 'Message index'); // Vérifier la présence d'un élément HTML sur la page de succès de connexion
    // }

    public function testSuccessfulLogin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('Sign in')->form();
        $form['email'] = 'email@email.mail';
        $form['password'] = '123gfj456';

        $crawler = $client->submit($form);


        $crawler = $client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Message index');
    }

    // public function testFailedAuthentication()
    // {
    //     $client = static::createClient();
    //     $client->followRedirects(); // Activer la redirection automatique

    //     // Simuler une requête POST vers le formulaire de connexion avec des identifiants invalides
    //     $client->request('GET', '/login', [
    //         '_email' => 'invalid_username',
    //         '_password' => 'invalid_password',
    //     ]);

    //     // $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    //     $this->assertSelectorTextContains('.alert-danger', 'Invalid credentials'); // Vérifier la présence d'un message d'erreur sur la page de connexion
    // }
}

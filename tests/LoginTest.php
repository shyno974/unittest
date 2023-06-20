<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testSuccessfulLogin()
    {
        $crawler = $this->client->request('GET', '/login');

        $form = $crawler->selectButton('Sign in')->form();
        $form['email'] = 'email@email.mail';
        $form['password'] = '123456';

        $crawler = $this->client->submit($form);


        $crawler = $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Message index');
    }
    public function testFailfulLogin()
    {
        $crawler = $this->client->request('GET', '/login');

        $form = $crawler->selectButton('Sign in')->form();
        $form['email'] = 'email@email.mail';
        $form['password'] = '12345556';

        $crawler = $this->client->submit($form);


        $crawler = $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Please sign in');
    }
}
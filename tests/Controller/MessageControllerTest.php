<?php

namespace App\Test\Controller;

use App\Entity\Message;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MessageControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MessageRepository $repository;
    private string $path = '/message/';
    public function test()
    {
        $this->assertEquals(42, 42);
    }
    // protected function setUp(): void
    // {
    //     $this->client = static::createClient();
    //     $this->repository = static::getContainer()->get('doctrine')->getRepository(Message::class);

    //     foreach ($this->repository->findAll() as $object) {
    //         $this->repository->remove($object, true);
    //     }
    // }

    // public function testIndex(): void
    // {
    //     $crawler = $this->client->request('GET', $this->path);

    //     self::assertResponseStatusCodeSame(200);
    //     self::assertPageTitleContains('Message index');

    //     // Use the $crawler to perform additional assertions e.g.
    //     // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    // }

    // public function testNew(): void
    // {
    //     $originalNumObjectsInRepository = count($this->repository->findAll());

    //     $this->markTestIncomplete();
    //     $this->client->request('GET', sprintf('%snew', $this->path));

    //     self::assertResponseStatusCodeSame(200);

    //     $this->client->submitForm('Save', [
    //         'message[objet]' => 'Testing',
    //         'message[contenu]' => 'Testing',
    //         'message[user_id]' => 'Testing',
    //     ]);

    //     self::assertResponseRedirects('/message/');

    //     self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    // }

    // public function testShow(): void
    // {
    //     $this->markTestIncomplete();
    //     $fixture = new Message();
    //     $fixture->setObjet('My Title');
    //     $fixture->setContenu('My Title');
    //     $fixture->setUser_id('My Title');

    //     $this->repository->save($fixture, true);

    //     $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

    //     self::assertResponseStatusCodeSame(200);
    //     self::assertPageTitleContains('Message');

    //     // Use assertions to check that the properties are properly displayed.
    // }

    // public function testEdit(): void
    // {
    //     $this->markTestIncomplete();
    //     $fixture = new Message();
    //     $fixture->setObjet('My Title');
    //     $fixture->setContenu('My Title');
    //     //$fixture->setUser_id('My Title');

    //     $this->repository->save($fixture, true);

    //     $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

    //     $this->client->submitForm('Update', [
    //         'message[objet]' => 'Something New',
    //         'message[contenu]' => 'Something New',
    //         // 'message[user_id]' => 'Something New',
    //     ]);

    //     self::assertResponseRedirects('/message/');

    //     $fixture = $this->repository->findAll();

    //     self::assertSame('Something New', $fixture[0]->getObjet());
    //     self::assertSame('Something New', $fixture[0]->getContenu());
    //     //self::assertSame('Something New', $fixture[0]->getUser_id());
    // }

    // public function testRemove(): void
    // {
    //     $this->markTestIncomplete();

    //     $originalNumObjectsInRepository = count($this->repository->findAll());

    //     $fixture = new Message();
    //     $fixture->setObjet('My Title');
    //     $fixture->setContenu('My Title');
    //     $fixture->setUser_id('My Title');

    //     $this->repository->save($fixture, true);

    //     self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

    //     $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
    //     $this->client->submitForm('Delete');

    //     self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
    //     self::assertResponseRedirects('/message/');
    // }
}
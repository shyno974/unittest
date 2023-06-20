<?php

// use App\Entity\Message;
// use App\Entity\User;
// use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

// class MessageTest extends KernelTestCase
// {
//     /**
//      * @var \Doctrine\ORM\EntityManager
//      */
//     private $entityManager;

//     protected function setUp(): void
//     {
//         parent::setUp();

//         self::bootKernel();

//         // $this->entityManager = self::$booted->get('doctrine')->getManager();
//     }

//     public function testSettersAndGetters(): void
//     {
//         // Création d'un utilisateur factice pour le test
//         $user = new User();
//         $user->setEmail('john.doe');
//         $this->entityManager->persist($user);

//         $message = new Message();
//         $message->setObjet('Test message');
//         $message->setContenu('Ceci est un test');
//         $message->setUserId($user);

//         // Vérification des valeurs
//         $this->assertSame('Test message', $message->getObjet());
//         $this->assertSame('Ceci est un test', $message->getContenu());
//         $this->assertSame($user, $message->getUserId());
//     }

//     protected function tearDown(): void
//     {
//         parent::tearDown();

//         // Suppression des données créées pendant le test
//         $this->entityManager->getRepository(Message::class)->createQueryBuilder('m')
//             ->delete()
//             ->getQuery()
//             ->execute();

//         $this->entityManager->getRepository(User::class)->createQueryBuilder('u')
//             ->delete()
//             ->getQuery()
//             ->execute();

//         $this->entityManager->close();
//         $this->entityManager = null;
//     }
// }
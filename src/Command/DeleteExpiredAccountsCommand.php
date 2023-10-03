<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'delete-expired-accounts',
    description: 'Add a short description for your command',
)]
class DeleteExpiredAccountsCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('app:delete-expired-accounts')
            ->setDescription('Supprimer les comptes dont le contrat est terminé.')
            ->setHelp('Cette commande supprime les comptes d\'utilisateurs dont le contrat est expiré.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $userRepository = $entityManager->getRepository(User::class);

        $expiredUsers = $userRepository->findBy(['contratTermine' => true]);

        foreach ($expiredUsers as $user) {
            $entityManager->remove($user);
        }

        $entityManager->flush();

        $output->writeln('Les comptes d\'utilisateurs dont le contrat est terminé ont été supprimés.');

        return Command::SUCCESS;
    }

}

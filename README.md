# <p align="center">Bonjour voici mon projet symfony👋

# <p align="center">Développement d’un annuaire d’entreprise</p>
  
L’application permettra aux utilisateurs de se connecter et d’accéder à la liste des
employés ( Page Accueil ) et leur fiche de contact qui comprendra tous les éléments
ajoutés ci-dessus ( Page Détail ).

Les administrateurs auront en plus accès à un espace leur permettant de créer /
modifier / supprimer les comptes utilisateurs.
Seule la page de Connexion sera accessible librement.
Les comptes utilisateurs « rôle user » seront créés par les utilisateurs « rôle admin »

Un Utilisateur contiendra :
- Un email
- Un mot de passe ( hashé en BDD )
- Un nom
- Un prénom
- Une photo ( upload )
- Un secteur parmi les suivants uniquement :
 RH, Informatique, Comptabilité, Direction
- Un type de contrat parmi les suivants uniquement :
 CDI / CDD / Interim
- Une date de sortie

Une fixtures à étais implémentées avec le package faker.
J'ai créer un utilisateur admin email : rh@hb.com avec
le rôle adéquat.
J'ai créer quelques utilisateurs ( employés ) afin de remplir la Base de données .
La RH aura à ça disposition une commande qu’elle lancera manuellement sur le
serveur afin de supprimer tous les comptes dont le contrat est terminé. 

## 🛠️ Tech Stack
- [Symfony](https://symfony.com//)
- [Twig](https://twig.symfony.com//)
        

Cahier de Test E2E avec PHPUnit


-> Installer PHP Unit

Environnement de Test:

Serveur de développement local ou pipeline CI/CD avec base de données de test isolée.
Données de test préparées, incluant des comptes d'utilisateur, des articles fictifs, et des données de relecture.


1. Soumission des Articles:

1.1- Test de Création (Create):
Créer un nouvel article avec tous les champs requis et des images.
Vérifier que l'article apparaît dans la base de données avec le statut "EN_ATTENTE".

1.2- Test de Lecture (Read):
Lister tous les articles soumis par un chercheur donné.
Vérifier que seuls les articles soumis par ce chercheur sont retournés.

1.3- Test de Mise à Jour (Update):
Mettre à jour un article existant.
Vérifier que les changements sont persistés en base de données.

1.4- Test de Suppression (Delete):
Supprimer un article.
Vérifier que l'article n'est plus dans la base de données.

2. Processus de Relecture par les Pairs:

Test de Relecture:
Simuler la soumission d'une évaluation par un pair.
Vérifier que l'évaluation est correctement associée à l'article.

3. Accès Libre:

Test d'Accès Public:
Vérifier qu'un article validé est accessible sans authentification.
Les articles non validés ne doivent pas être accessibles en libre accès.


4. Évaluation des Articles:

Test d'Évaluation:
Ajouter des évaluations à un article.
Vérifier que la moyenne des évaluations est calculée et stockée correctement.


5. Notifications et Communication:

Test de Notification:
Tester la création d'une notification lors de la soumission d'un article.
Vérifier que les notifications sont bien reçues par les utilisateurs concernés.


6. Archivage des Articles:

Test d'Archivage:
Archiver un article accepté.
Vérifier que l'article est toujours accessible mais marqué comme archivé.


7. Gestion des Contributions:

Test de Paiement:
Simuler un paiement de frais de contribution.
Vérifier que le paiement est enregistré et associé au compte de l'auteur.


8. Validation des Articles:

Test de Validation:
Valider un article en attente.
Vérifier que son statut passe à "VALIDÉ" et qu'il est accessible publiquement.


9. Sécurité et Confidentialité:

Test de Sécurité:
Essayer d'accéder à des données sensibles via des injections SQL.
Vérifier que la base de données est sécurisée contre de telles attaques.
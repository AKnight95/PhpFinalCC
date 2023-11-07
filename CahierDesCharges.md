# PhpFinalCC
Projet final Cloud Campus PHP Symfony

Jour 1:

Cahier des Charges - Plateforme de Publication de Recherches en Libre Accès

L'objectif principal de ce projet est de concevoir et de mettre en place une plateforme permettant aux chercheurs de publier leurs articles de recherche en libre accès tout en maintenant un processus rigoureux de relecture par les pairs.

Principales Fonctionnalités :

- Soumission des Articles : Les chercheurs doivent pouvoir soumettre leurs articles via la plateforme (CRUD)(avec images?).

- Processus de Relecture par les Pairs : Le processus de relecture par les pairs doit être préservé. Les articles soumis seront examinés par des pairs experts dans le domaine. Chaque article passera par plusieurs cycles de relecture et de révision.

- Accès Libre : Tous les articles acceptés seront accessibles gratuitement par quiconque sur la plateforme, conformément à l'objectif de libre accès.

- Évaluation des Articles : Les pairs devront fournir des évaluations constructives des articles soumis. Les critères d'évaluation doivent être clairement définis(avancé:ystème de notation?). 

Notifications et Communication : La plateforme doit prendre en charge la communication entre les auteurs, les pairs relecteurs et les éditeurs. Les notifications en temps opportun doivent être envoyées pour informer les auteurs des étapes du processus(avancé: système de notidation?).

Archivage des Articles : Les articles acceptés doivent être archivés de manière appropriée pour garantir leur pérennité et leur accessibilité à long terme.

Gestion des Contributions : Les auteurs devront payer des frais de contribution pour soutenir la plateforme. La gestion de ces paiements devra être transparente et sécurisée (avancé/stripe).

Mise en Place :

CRUD des articles : utilisation de symfony pour rapidement mettre en place le CRUD des articles, les roles utilisateurs et leurs espaces.

Validation des Articles; tout les articles ajoutés par des chercheurs seront en "ATTENTE" et donc non accessible aux lecteurs en libre accès, mais seulement aux pairs/éditeurs. Les éditeurs auront le choix de valider ou non les articles des chercheurs. Si l'article est validé, alors il sera visible en libre accès.

Élaboration des Critères d'Évaluation : Des critères d'évaluation précis et des directives pour les pairs relecteurs doivent être élaborés.

Système de Notification : .

Sécurité et Confidentialité : Sécuriser la BDD.
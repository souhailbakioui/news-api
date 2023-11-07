# API de News Laravel

## Aperçu

Ce projet Laravel vise à créer une API REST pour gérer des articles de presse, en offrant des fonctionnalités essentielles pour l'ajout, la mise à jour et la suppression de nouvelles. Il permet également de présenter une liste d'articles de presse dans l'ordre décroissant de leur date de publication, en excluant les nouvelles expirées.

## Instructions

### Étape 1 : Configuration de l'application Laravel

- Créez une nouvelle application Laravel 10 pour commencer.

### Étape 2 : Définition du Modèle de Données pour les News

- Configurez un modèle de données pour les articles de presse avec les champs suivants :
  - Titre
  - Contenu
  - Catégorie
  - Date de Début
  - Date d'Expiration

### Étape 3 : Modèle de Données pour les Catégories

- Créez un modèle de données pour une structure hiérarchique de catégories de nouvelles. Chaque catégorie doit avoir un nom et une relation parent/enfant, formant ainsi un arbre de catégories.

### Étape 4 : Contrôleur CRUD pour les News

- Créez un contrôleur pour gérer les opérations CRUD (création, lecture, mise à jour et suppression) des articles de presse.

### Étape 5 : Middleware d'Authentification Utilisateur

- Implémentez un middleware pour restreindre l'accès à l'API aux utilisateurs authentifiés. Appliquez ce middleware aux routes de l'API.

### Étape 6 : Définition des Routes de l'API

- Définissez les routes de l'API pour les opérations CRUD sur les articles de presse, en utilisant les méthodes HTTP (GET, POST, PUT, DELETE). Assurez-vous que l'API renvoie les données au format JSON.

### Étape 7 : Liste des Articles de Presse

- Créez une route dédiée pour afficher les articles de presse dans l'ordre décroissant de leur date de publication, en excluant les nouvelles expirées.

### Étape 8 : Recherche Récursive des Catégories

- Mettez en œuvre un algorithme de recherche récursive qui parcourt la hiérarchie des catégories pour trouver la catégorie demandée et récupérer tous les articles associés à cette catégorie et à ses sous-catégories.

### Étape 9 : Recherche par Nom de Catégorie

- Développez une nouvelle route API pour rechercher une catégorie spécifique dans la hiérarchie, en fonction de son nom, et renvoyer tous les articles associés à cette catégorie, y compris ceux des sous-catégories. Affichez uniquement les articles de presse non expirés dans les résultats.

### Étape 10 : Codes d'État HTTP

- Assurez-vous que l'API renvoie les codes d'état HTTP appropriés pour chaque opération, par exemple, 200 pour le succès, 201 pour la création, 204 pour la suppression, 400 pour les erreurs de demande, etc.

## Critères d'Évaluation

Votre travail sera évalué selon les critères suivants :

1. Configuration correcte de l'application Laravel.
2. Création du modèle de données pour les articles de presse.
3. Création d'un contrôleur CRUD pour les articles de presse.
4. Mise en œuvre du middleware d'authentification utilisateur.
5. Définition des routes de l'API pour les opérations CRUD.
6. Affichage correct de la liste des articles de presse conformément aux exigences spécifiées.
7. Réponses appropriées de l'API avec les codes d'état HTTP corrects.

## Annexe : Remplissage de l'Arbre des Catégories via Seeder

- Pour configurer l'arborescence des catégories pour l'application, utilisez le seeder fourni pour peupler les catégories et leur hiérarchie. Exécutez le seeder pour initialiser les catégories et leurs relations.


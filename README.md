![](https://www.mydigitalschool.com/themes/custom/mds/img/logo.png?20220829)

# Epreuve de Programmation Orientée Objet
> **MyDigitalHorse**

![](https://badgen.net/badge/PHP/version%20≥%207.4/red?icon=php&label)
![](https://badgen.net/badge/Composer/optionnel/blue)
![](https://badgen.net/badge/SOLID/conseillé/orange)
![](https://badgen.net/badge/SOLID/possible/cyan?icon=docker&label)

- [Epreuve de Programmation Orientée Objet](#epreuve-de-programmation-orientée-objet)
  - [Installation](#installation)
    - [Avec Docker](#avec-docker)
    - [Sans Docker](#sans-docker)
  - [Cahier des charges](#cahier-des-charges)
    - [Class Stable (Écurie)](#class-stable-écurie)
      - [Données membres](#données-membres)
      - [Méthodes](#méthodes)
        - [\_\_toString(): string](#__tostring-string)
    - [Abstract Class Human](#abstract-class-human)
      - [Données membres](#données-membres-1)
      - [Méthodes](#méthodes-1)
        - [\_\_toString(): string](#__tostring-string-1)
    - [Class Manager](#class-manager)
      - [Données membres](#données-membres-2)
      - [Méthodes](#méthodes-2)
        - [\_\_toString(): string](#__tostring-string-2)
    - [Class Rider](#class-rider)
      - [Données membres](#données-membres-3)
      - [Méthodes](#méthodes-3)
      - [setGameType(): self](#setgametype-self)
        - [\_\_toString(): string](#__tostring-string-3)
    - [Abstract Class Animal](#abstract-class-animal)
      - [Données membres](#données-membres-4)
      - [Méthodes](#méthodes-4)
        - [\_\_toString(): string](#__tostring-string-4)
    - [Abstract Class Equine (Équidé)](#abstract-class-equine-équidé)
      - [Données membres](#données-membres-5)
      - [Méthodes](#méthodes-5)
      - [setCategory(): self](#setcategory-self)
      - [setRider(): self](#setrider-self)
        - [\_\_toString(): string](#__tostring-string-5)
    - [Class Capabilitie](#class-capabilitie)
      - [Données membres](#données-membres-6)
      - [Méthodes](#méthodes-6)
        - [\_\_toString(): string](#__tostring-string-6)
    - [Abstract Class Event](#abstract-class-event)
      - [Données membres](#données-membres-7)
      - [Méthodes](#méthodes-7)
        - [subscribeHorse(): self](#subscribehorse-self)
        - [\_\_toString(): string](#__tostring-string-7)
  - [Travail à effectuer](#travail-à-effectuer)


## Installation

Afin de bénéficier des `Namespace` ainsi que du `var_dumper`

### Avec Docker

Dans votre terminal à la racine du projet, exécutez la commande suivante :
```bash
docker-compose up -d
docker exec -it poo_mds composer install 
```
Application accessible sur https://localhost
Pensez à accepter les certificats auto-signés.

possible également de lancer vos tests ainsi :
```bash
docker exec -it poo_mds php -f public/index.php
```

### Sans Docker

Dans votre terminal à la racine du projet, exécutez la commande suivante :
```bash
composer install 
```

Pour lancer vos tests :
```bash
php -f public/index.php
```

## Cahier des charges

On souhaite représenter une écurie de compétition sous forme objet.
<br />
Nous allons donc définir chacune des classes nécessaires.
<br />
Il est possible en fonction de votre réflexion d'en créer d'autres (et probablement conseillé 😉).

---

### Class Stable (Écurie)

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
| Nom      | `false` | string |
| Address      | `false`       |   string |
| Street | `false`        |    string |
| PostCode | `false`        |    string |
| City | `false`        |    string |
| Manager | `true`        |    Manager |

#### Méthodes

##### __toString(): string
Affiche des informations pertinentes sur l'écurie sélectionnée

---

### Abstract Class Human

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
| Nom      | `false` | string |
| Address      | `false`       |   string |
| Street | `false`        |    string |
| PostCode | `false`        |    string |
| City | `false`        |    string |
| Categorie | `true`        |    Categorie |

#### Méthodes

##### __toString(): string
Affiche des informations pertinentes sur l'humain sélectionné

---

### Class Manager

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
A définir

#### Méthodes

##### __toString(): string
Affiche des informations pertinentes sur le Manager sélectionné

---

### Class Rider

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
A définir

#### Méthodes

#### setGameType(): self
Affecte à un Cavalier le type de jeu qu'il peut pratiquer

##### __toString(): string
Affiche des informations pertinentes sur le Cavalier sélectionné

---

### Abstract Class Animal

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
A définir

#### Méthodes

##### __toString(): string
Affiche des informations pertinentes sur l'animal sélectionné

---

### Abstract Class Equine (Équidé)

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
| id | `false`| string |
| color | `false`| string |
| water | `false` | int |
| Rider | `true` | Rider |

#### Méthodes
⚠ L'identifiant doit être généré suivant le pattern : `000-n-C-N`
<br />
Où `n` est la première lettre du nom
<br />
`C` est la première lettre de la couleur
<br />
Et `N`est le nombre d'équidés créés au moment de la création de celui-ci.

Les couleurs possibles sont `['Alzan', 'Bai', 'Pie', 'Grey', 'White']`

#### setCategory(): self
Affecte la catégory d'équidé seulement 3 choix possible `['Sheitland', 'Poney', 'Horse']`

#### setRider(): self
Affecte un Cavalier au cheval, nous limiterons la possibilités pour un Cavalier d'avoir uniquement 5 Equidés
<br />
`(Penser aux différentes interactions)`

##### __toString(): string
Affiche des informations pertinentes sur l'équidé sélectionné

---

### Class Capabilitie

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
A définir

#### Méthodes

4 capacités possibles `['Saut', 'Dressage', 'Cross', 'PoneyGames']`
Attention les `chevaux` ne peuvent pas participer aux `PoneyGames`

##### __toString(): string
Affiche des informations pertinentes sur la capacité sélectionnée

---

### Abstract Class Event

#### Données membres

| Propriété  | Optionnel  | Type |
| :------------ |:---------------:| -----:|
| MaxCommitments | `false`| int |
| MaxWater | `false`| int |
A définir

#### Méthodes

Il n'est pas possible d'inscrire deux fois un même cheval pour un événement donné.

##### subscribeHorse(): self
Permet d'inscrire un équidé à l'évènement.
<br />
⚠ Suite aux restrictions écologiques l'évènement est limité dans sa capacité d'eau. Pensez bien à vérifier ce que chaque équidé consomme.

##### __toString(): string
Affiche des informations pertinentes sur l'événement sélectionné

---

## Travail à effectuer

- [ ] Dans le fichier qui vous semble le plus pertinent décrivez votre jeu de test avec les réponses attendues en commentaires.
  > Il doit être possible pour le correcteur en lançant votre application de vérifier en un coup d'oeil que tout a été prévu 😈
- [ ] Vous devez créer :
  - Une écurie
  - Un manager
  - Des Cavaliers
  - Des Chevaux, Poney, Sheitland
  - Des Evenements et y inscrire un maximum de participants
- [ ] Utiliser et contrôler toutes les méthodes créées.
- [ ] Tous les contrôles passeront par des exceptions.
- [ ] Respecter les principes SOLID.
- [ ] Respecter les bonnes pratiques GIT.
- [ ] Livrer l'adresse du Repository.
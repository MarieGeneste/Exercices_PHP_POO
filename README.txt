Pratiquez la POO en PHP !!!



Exercice 1 (Déclaration d'une classe et création d'un objet)

Créez une classe appelé Personne. Définissez un attribut où votre nom est stocké. Puis définissez deux méthodes, une qui charge le nom et une autre qui l’imprime.



Exercice 2 (Attributs d'une classe.)

Implémentez une classe qui affiche une liste de liens hypertexte horizontalement (essentiellement un menu d'options)



Exercice 3 ( Méthode constructeur d'une classe (__construct))

Faire une classe HeaderPage qui vous permet d'afficher un titre, indiquez si vous voulez qu'il apparaisse centré, à droite ou à gauche. Utilisez un constructeur pour initialiser les deux attributs.



Exercice 4 (Visibilité (public - privé))

Créez une classe Table qui vous permet d'indiquer dans le constructeur le nombre de lignes et de colonnes. Définissez une autre méthode qui consiste à charger une donnée dans une ligne et une colonne données. Enfin, vous devez afficher les données dans un tableau HTML.
Définissez la visibilité (privé et public) pour les propriétés et les méthodes.



Exercice 5 (Paramètres de type objet)

Créez une classe Option et une autre classe Menu. La classe Option définira comme propriétés le titre, le lien, et la couleur d'arrière-plan, les méthodes à implémenter seront le constructeur et le graphe(méthode). D'autre part, la classe Menu gérera un tableau d'objets de la classe Option et implémentera une méthode pour insérer les objets de la classe Menu et une autre pour les représenter graphiquement.
Pour le constructeur de la classe Menu, indiquez si nous voulons que le menu soit «horizontal» ou «vertical».



Exercice 6 (Paramètres optionnels)

Encodez l'en-tête de la page qui montre un titre aligné avec une certaine police et une couleur d'arrière-plan.
Définissez des paramètres facultatifs dans le constructeur pour les couleurs d'alignement de police, d'arrière-plan et de titre.



Exercice 7 (Classe abstract)

Créez une classe abstraite appelée Operation qui définit comme propriétés
    • $value1,
    • $value2,
    • $result
et définissez comme méthodes
    • load1 (initialise la propriété $value1),
    • load2 (initialise la propriété $value2)
    • et enfin une méthode affichant le contenu de $résult

Définissez ensuite deux sous-classes de la classe Operation.
La première sous-classe ‘Sum’ qui vise à
    • charger deux valeurs,
    • à les sommer
    • et à afficher le résultat.
La deuxième sous-classe,’ Soustraction’, vise à
    • charger deux valeurs,
    • à les soustraire
    • et à afficher le résultat de la différence.



Exercice 8 (Méthodes statiques d'une classe)

Créez une classe String contenant un ensemble de méthodes statiques pour
    • calculer le nombre de caractères,
    • convertir en majuscules,
    • convertir en minuscules, etc.





BONUS

Exercice 1( Collaboration d'objets)
Créer une classe Page contenant en tant que propriétés des objets des classes Header, Body et Foot. Les classes Header et Footer doivent avoir une propriété pour stocker le texte à afficher. La classe Body doit avoir une propriété de type vectoriel où tous les paragraphes sont stockés.



Exercice 2_Surcharge des méthodes.

Créez une classe appelée Operation qui définit comme propriétés $value1, $value2, $result et définissez comme méthodes load1 (initialise l'attribut $value1), load2 (initialise l'attribut $value2) et enfin une méthode affichant le contenu de $result(méthode à surcharger dans les class enfants) .
Définissez ensuite deux sous-classes de la classe Operation. Le premier sous-class ‘Sum’ qui vise à charger deux valeurs, à les sommer et à afficher le résultat . Le deuxième sous-class, ‘Soustraction’, vise à charger deux valeurs, à les soustraire et à afficher le résultat de la différence .



Exercice 3 Surcharge du constructeur

Implémentez la classe Operation. Le constructeur reçoit et initialise les propriétés $valeur1 et $valeur2. La sous-classe ‘Suma’ ajoute une propriété $title. Le constructeur de la classe ‘Suma’ reçoit les deux valeurs à ajouter (surcharge du constructeur) et le titre.

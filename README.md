FormConfigManager (Storage manager):
 ============

    Qui nous donne accès aux stockages des fichiers de configuration de formulaire.
Ce dossier comprend une interface et les classes associées à l'interface qui correspondent aux différents types de stockage.


DynamicFormService
============

    C'est le service qui permet d'instancier les DynamicForm.

DynamicForm
============

Il s'agit de l'objet retourner par le DynamicFormService via la fonction get("name"), il peut s'éditer et éffectuer une validation de donnée.


Le DynamicFormController et le dossier "view" ne sont là que pour faire des tests.
Bonjour à tous, voici le projet à me rendre pour le cours de Symfony. 
Vous devrez faire une application de gestion d’étudiants dont voici les détails :
- Un étudiant  peut être lié à zéro, un ou plusieurs projets
- Un projet est défini par un nom, une nombre maximum d’étudiants lié à ce projet, une note et est lié à une matière.
- Un étudiant est définis par un nom, un prénom, un age 
- Une matière est défini par un nom et un intervenant
- Un intervenant est définis par un nom, un prénom, un age et est lié à des matières
- Un intervenant ne peut pas avoir plus de 2 matières
- Un étudiant ne peut pas avoir plus de 4 projets
- Lorsque je vais sur le detail d’un étudiant je dois voir la moyenne des notes des projets sur lesquels il est lié.
- Je dois pouvoir assigner à un projet uniquement les étudiants qui n’ont pas encore 4 projets et qui ne sont pas déjà lié a ce projet
- Lorsque je vais sur le détail d’une matière, je dois voir la moyenne des notes des projets lié à cette matière
- Lorsque je veux assigner un intervenant à un matière. La liste doit contenir uniquement les matières qui n’ont pas encore d’intervenant
- N'oubliez pas de valider les formulaires (par exemple : une note ne peut pas être supérieur à 20 et inférieur à 0)

Le projet doit être rendu sur un repo GitHub ou GitLab au plus tard le 15 janvier 2020 via Discord ou par mail : romain.desajardim@gmail.com. Il doit être fait sur Symfony et doit tourner sous docker. Faites en sorte que l’application soit agréable à l’oeil, par exemple en utilisant Bootstrap.
Le projet est à faire seul. 
N’hésitez pas a me ping si vous avez des questions sur le sujet ou des problèmes sur Symfony (dans la limite du raisonnable).
Vous pouvez vous aider entre vous, mais faites en sorte de comprendre ce que vous faites et pas juste recopier le camarade.
Bon courage à tous :wink:
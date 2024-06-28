Dans un bash, aller à l'endroit du dossier /multilang_site -
windows: py -m venv myworld | linux: python -m venv myworld -
démarrer l'environnement virtuel -> windows: source env/Scripts/activate | linux: env/bin/activate -
verifier que vous avez bien django d'installer, sinon -> pip install django -
installer les différentes dépendances -
démarrer le serveur local -> python manage.py runserver -
dans votre navigateur, aller à l'adresse suivante http://127.0.0.1:8000/ -
http://127.0.0.1:8000/admin | logs -> user: admin / mdp: multilang_site

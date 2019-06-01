Bonjour,
Voici le projet de gestions risques client.
Afin de pouvoir lancer le projet sur votre machine, suivez les étapes suivantes (@php7.1 or later necessary):
1: npm install à l'intérieur dossier global du projet (terminal)
2: composer install à l'intérieur du dossier api du projet (terminal)v
3: Changer le .env selon votre serveur phpmyadmin et selon votre adresse mail (dans le swiftmailer)
4: Modifier API/config/packages/knp_snappy.yaml : 
    Pour Mac:
    binary:     "/usr/local/bin/wkhtmltopdf"
    binary:     "/usr/local/bin/wkhtmltoimage"
    Pour Windows:
    binary:     %kernel.root_dir%/../vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf.exe
    binary:     %kernel.root_dir%/../vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf.exe
    
5: ng serve à l'intérieur du dossier global du projet (terminal)
6: php -S 127.0.0.1:8001 -t public à l'intérieur du dossier api du projet (terminal)

Le projet est prêt à être lancé au port 4200.

symfony2-codeship-digital-ocean2
================================

A Symfony project created on April 20, 2015, 4:51 pm.

```
symfony new symfony2-codeship-digital-ocean

composer require jms/serializer-bundle @stable
composer require friendsofsymfony/rest-bundle @stable

app/console generate:bundle
  -Washimimizuku/Bundle/APIBundle
app/console doctrine:generate:entity
  -WashimimizukuAPIBundle:User
```

symfony2-codeship-digital-ocean2
================================

[ ![Codeship Status for washimimizuku/symfony2-codeship-digital-ocean](https://codeship.com/projects/e9ef0a40-cb1a-0132-c1b3-466a8264ab3c/status?branch=master)](https://codeship.com/projects/75655)

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

# Contributing
We are VERY open and appreciate contributions.  Please try to follow our existing architecture, but we are always grateful for PRs, even if they just give us a possible solution to a problem.
# Reporting bugs
Please do, although bugs with bug fix PRs are appreciated more.
# Examples
## Just show me how to use it
There are two parts, first you need to get an OAuth access_token then you can use the REST client and model.
### REST client and model
(This assumes you already have the access_token)
```
use NovakSolutions\Infusionsoft\Model\Contact;
Registry::init();
#contact = new Contact();
$contact->given_name = 'Joey';
$contact->save();
```
### OAuth2

(New stuff will go here...)

# Architecture
The SDK is designed using PHP traits.  This allows for quick creation of new services and models with extremely DRY code.

There are three main seperations of the API.

* REST Client and Model
* OAuth code
* Registry

The REST client and model allows you to work exclusively with objects and be ignorant of the REST api itself.  This allows you to focus on what you need to do and not how the API works.  

The SDK is designed to be pluggable, and easily integrated with your project.  Most people already have a system for OAuth in their app, by seperating the OAuth code from the REST Client and Model you can easily inject your own auth_token provider to integrate with your existing OAuth code.  

The "Registry" is how we maintain IOC, it is a very simple implementation.  You call init() it structures everything, and then you can replace things as needed.  We wanted to keep it as simple to use as possible so IoC purists may balk and complain but it is simple, and does what we need with zero learning curve.  
# API Gotchas

# <span style="color:#17a6ed">SendInBlue API Reference</span>

```
Host: https://api.groupeonepoint.com/sendinblue
Header: X-App-Token-Onepoint: ***
```
<br>
Request the key from the developer


## <span style="color:#17a6ed">Creation</span>
### Create a contact 

`POST /contacts`

| Params              | Descriptions                  | Types  | Required |
|---------------------|-------------------------------|--------|----------|
| email               | Collaborator's email address  | string | required |
| smsBlacklisted      | Blacklisted email address     | string | optional |
| modifiedAt          | Date of last modification     | string | optional |
| listIds             | List of contacts              | array  | required |
| [attributes](#attr) | The attributes of the contact | object | required |


<span id="attr"></span> 
<br><br>

| Params             | Descriptions                                               | Types  | Required |
|--------------------|------------------------------------------------------------|--------|----------|
| PRENOM             | Collaborator's first name                                  | string | required |
| NOM                | Collaborator's lastname                                    | string | required |
| MONTANT_PRIME      | Amount of the premium.                                     | float  | optional |
| SMS                | Collaborator's phone number.                               | string | optional |
| CIVILITE           | Mister or miss                                             | string | optional |
| ENFANTS            | The number of children of the collaborator.                | int    | optional |
| PSEUDO             | the pseudonym of the collaborator                          | string | optional |
| COM_REGION         | The region community to which the collaborator is assigned | string | optional |
| DATE_EMBAUCHE      | Hiring date.                                               | Date   | optional |
| NOM_COMPLET        | Full name of the collaborator                              | string | optional |
| DOUBLE_OPT-IN      |                                                            | object | optional |
| DATE_SORTIE        | Release date                                               | Date   | optional |
| EMAIL_PRO          | Professional address of the collaborator.                  | string | optional |
| EMAIL_PERSO        | Personal address of the collaborator.                      | string | optional |
| ENTREPRISE         | Company Name                                               | string | optional |
| HUBSPOT_ID         |                                                            | string | optional |
| ENTREE             |                                                            | string | optional |
| STATUT_PARTICIPANT |                                                            | string | optional |
| POSTE              | Position held within the company                           | string | optional |
| MATRICULE          | The employee number.                                       | string | optional |
| FORMULE_APPEL      |                                                            | string | optional |



```

BODY: {
            "email": "groupeonepoint@onepoint.fr",
            "smsBlacklisted": false,
            "modifiedAt": "2019-01-29T18:45:16.387+01:00",
            "listIds": [
                14 
            ],
            "attributes": {
                "PRENOM": "Onepoint",
                "NOM": "Onepoint",
                "MONTANT_PRIME":"80.50",
                "SMS":"0756549824",
                "CIVILITE":"H",
                "ENFANTS":"2",
                "PSEUDO":"onepoint",
                "COM_REGION":"Paris",
                "DATE_EMBAUCHE":"2019-01-29",
                "NOM_COMPLET":"Groupeonepoint",
                "DOUBLE_OPT-IN":" onepoint",
                "DATE_SORTIE":"2019-01-29",
                "EMAIL_PERSO":"groupeonepoint@onepoint.fr",
                "ENTREPRISE":"ONEPOINT",
                "HUBSPOT_ID":"13449785",
                "ENTREE":"XXXX",
                "STATUT_PARTICIPANT":"OK",
                "POSTE":"Entreprise",
                "MATRICULE":"24486272",
                "FORMULE_APPEL":"XXXX"
                
            }
  }

```


### Create multiple contacts

`POST /contacts/multiple`

```

BODY: [{contactObject1}, {contactObject2}, {contactObject3}, ..., {contactObjectNid}]

```



## <span style="color:#17a6ed">Reading</span>

### List of SendInBlue contacts

`GET /contacts`

| Code | Description          |
|------|----------------------|
| 200  | succès de la requête |

```

Response: [ 
    {
            "email": "groupeonepoint@onepoint.fr",
            "id": 76321,
            "emailBlacklisted": false,
            "smsBlacklisted": false,
            "modifiedAt": "2019-01-29T18:45:16.387+01:00",
            "listIds": [
                14 
            ],
            "attributes": {
                "PRENOM": "Onepoint",
                "NOM": "Onepoint",
                "MONTANT_PRIME":"80.50",
                "SMS":"0756549824",
                "CIVILITE":"H",
                "ENFANTS":"2",
                "PSEUDO":"onepoint",
                "COM_REGION":"Paris",
                "DATE_EMBAUCHE":"2019-01-29",
                "NOM_COMPLET":"Groupeonepoint",
                "DOUBLE_OPT-IN":" onepoint",
                "DATE_SORTIE":"2019-01-29",
                "EMAIL_PERSO":"groupeonepoint@onepoint.fr",
                "ENTREPRISE":"ONEPOINT",
                "HUBSPOT_ID":"13449785",
                "ENTREE":"XXXX",
                "STATUT_PARTICIPANT":"OK",
                "POSTE":"Entreprise",
                "MATRICULE":"24486272",
                "FORMULE_APPEL":"XXXX"
                
            }
  },
  {
            "email": "groupeonepoint@onepoint2.fr",
            "id": 76322,
            "emailBlacklisted": false,
            "smsBlacklisted": false,
            "modifiedAt": "2019-01-29T18:45:16.387+01:00",
            "listIds": [
                14 
            ],
            "attributes": {
                "PRENOM": "Onepoint2",
                "NOM": "Onepoint2",
                "MONTANT_PRIME":"80.50",
                "SMS":"0756549824",
                "CIVILITE":"H",
                "ENFANTS":"2",
                "PSEUDO":"onepoint",
                "COM_REGION":"Paris",
                "DATE_EMBAUCHE":"2019-01-29",
                "NOM_COMPLET":"Groupeonepoint2",
                "DOUBLE_OPT-IN":" onepoint",
                "DATE_SORTIE":"2019-01-29",
                "EMAIL_PERSO":"groupeonepoint@onepoint2.fr",
                "ENTREPRISE":"ONEPOINT2",
                "HUBSPOT_ID":"13449785",
                "ENTREE":"XXXX",
                "STATUT_PARTICIPANT":"OK",
                "POSTE":"Entreprise",
                "MATRICULE":"24486272",
                "FORMULE_APPEL":"XXXX"
                
            }
  }
]

```




## <span style="color:#17a6ed"> Update </span>
### Update a contact 

`PUT /contacts/{email}`

```

BODY: {
            "email": "groupeonepoint@onepoint.fr",
            "id": 76321,
            "emailBlacklisted": false,
            "smsBlacklisted": false,
            "modifiedAt": "2019-01-29T18:45:16.387+01:00",
            "listIds": [
                14 
            ],
            "attributes": {
                "PRENOM": "Onepoint",
                "NOM": "Onepoint",
                "MONTANT_PRIME":"80.50",
                "SMS":"0756549824",
                "CIVILITE":"H",
                "ENFANTS":"2",
                "PSEUDO":"onepoint",
                "COM_REGION":"Paris",
                "DATE_EMBAUCHE":"2019-01-29",
                "NOM_COMPLET":"Groupeonepoint",
                "DOUBLE_OPT-IN":" onepoint",
                "DATE_SORTIE":"2019-01-29",
                "EMAIL_PERSO":"groupeonepoint@onepoint.fr",
                "ENTREPRISE":"ONEPOINT",
                "HUBSPOT_ID":"13449785",
                "ENTREE":"XXXX",
                "STATUT_PARTICIPANT":"OK",
                "POSTE":"Entreprise",
                "MATRICULE":"24486272",
                "FORMULE_APPEL":"XXXX"
                
            }
  }

```


### Update multiple contacts 


`PUT /contacts/multiple`

```

BODY: [{contactObject1}, {contactObject2}, {contactObject3}, ..., {contactObjectNid}]

```




## <span style="color:#17a6ed"> Deleting</span>
### Delete a contact 

`DELETE /contacts/{email}`


### Delete multiple contacts 


`DELETE /contacts/multiple`

```

BODY: [email_1, {email_2}, {email_3}, ..., {email_Nid}]

```


<br><br><br>

# <span style="color:#17a6ed"> Lumen PHP Framework</span>

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)



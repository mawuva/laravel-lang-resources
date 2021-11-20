<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Common actions performed on resources.
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various / commons actions that
    | can be performed on resources.
    |
    */

    'actions'       => [
        'on_entity'                 => ':Action :Entity',

        'new'                       => 'Nouveau|Nouvel|Nouvelle',
        'create'                    => 'Créer',
        'create_a_new'              => 'Créer un Nouveau|Créer un Nouvel|Créer une Nouvelle',
        'create_new'                => 'Créer Nouveau|Créer Nouvel|Créer Nouvelle',
        'save'                      => 'Enregistrer',
        'register'                  => 'Enregistrer',

        'read'                      => 'Lire',

        'show'                      => 'Afficher',
        'show_infos'                => 'Afficher Infos',
        'show_details'              => 'Voir Détails',
        'show_deleted'              => 'Voir supprimé(e)|Voir supprimé(e)s',
        'show_entity_infos'         => 'Voir :Entity Infos',
        'show_entity_details'       => 'Voir :Entity Détails',
        'show_deleted_entity'       => 'Voir :Entity supprimé(e)|Voir :Entity supprimé(e)s',
        
        'edit'                      => 'Editer',
        'update'                    => 'Mettre à jour',
        'delete'                    => 'Supprimer',
        'delete_permanently'        => 'Supprimer définitivement',
        'restore'                   => 'Restaurer',
        'back'                      => 'Retour',
        'back_to'                   => 'Retour à :Destination',
    ],

    /*
    |--------------------------------------------------------------------------
    | Common messages that can be displayed to users.
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various / commons messages that
    | can be dispalyed to users.
    |
    */

    'messages'      => [
        'successfully' => [
            'created'   => [
                'entity'    => ':Entity a été créé(e) avec succès.',
            ],

            'saved'     => [
                'entity'    => ':Entity a été enregistré(e) avec succès.',
            ],
            
            'retrieved'  => [
                'entity'    => ':Entity a été trouvé(e) avec succès.',
                'records'   => 'Enregistrements récupérés avec succès.',
                'searched'  => 'Les enregistrements recherchés ont été récupérés avec succès.',
                'deleted'   => 'Récupération des enregistrements supprimés avec succès.',
            ],

            'updated'   => [
                'entity'    => ':Entity a été mis à jour avec succès.',
            ],

            'deleted'   => [
                'entity'                => ':Entity a été supprimé(e) avec succès.',
                'entity_permanently'    => ':Entity a été supprimé(e) définitivement avec succès.',
            ],

            'restored'  => [
                'entity'    => ':Entity a été restauré(e) avec succès.',
            ],

            'login'      => [
                'title'     => 'Connexion effectuée avec succès.',
                'message'   => 'Bienvenue, bonne navigation !',
            ],

            'logout'      => [
                'title'    => 'Déconnexion effectuée avec succès.',
                'message'  => 'Merci pour votre visite ! À très bientôt !',
            ],
        ],

        'records'   => [
            'not_available'             => 'Aucun enregistrement disponible pour le moment.',
            'not_found'                 => 'Aucun enregistrement trouvé pour cette demande.',
            'not_found_trashed'         => 'Aucun enregistrement disponible dans la corbeille.',
        ],

        'resource'  => [
            'not_found'                 => 'La ressource demandée n\'a pas été trouvée.',
            'already_exists'            => 'La ressource que vous essayez de créer existe déjà.',   
            'attribute_already_exists'  => 'Cet :attribute existe déjà.',
        ],

        'not_matching' => [
            'credentials'           => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
             'email'                => 'L\' adresse email fournie ne correspond pas à nos enregistrements.',
             'password'             => 'Le mot de passe fourni ne correspond pas à nos enregistrements.',
        ],

        'invalid' => [
            'attribute'     => ':Attribute invalide',
            'identifiant'   => 'Identifiant invalide',
            'email'         => 'Adresse email invalide',
            'phone_number'  => 'Numéro de téléphone invalide',
            'password'      => 'Mot de passe incorrect',
        ],
        
        'entity'            => [
            'created'               => ':Entity a été créé(e) avec succès.',
            'saved'                 => ':Entity a été enregistré(e) avec succès.',
            'list'                  => 'Liste des :Entity.',
            'list_with_deleted'     => 'Liste des :Entity avec données supprimées inclus.',
            'search_results'        => 'Résultats de la recherche des :Entity.',
            'deleted_list'          => 'Liste des :Entity supprimé(e)s.',
            'resource'              => 'Données :Entity.',
            'updated'               => ':Entity a été mis(e) à jour avec succès.',
            'changed'               => ':Entity a été changé(e) avec succès.',
            'deleted'               => ':Entity a été supprimé(e) avec succès.',
            'restored'              => ':Entity a été restauré(e) avec succès.',
            'deleted_permanently'   => ':Entity a été définitivement supprimé(e) avec succès.',
            'removed'               => ':Entity a été définitivement supprimé(e) avec succès.',
        ],
        
        'completed'           => [
            'creation'              => 'Création effectuée avec succès',
            'update'                => 'Mise à jour effectuée avec succès',
            'deletion'              => 'Suppression effectuée avec succès',
            'restoration'           => 'Restauration effectuée avec succès',
            'permanent_deletion'    => 'Suppression permanente effectuée avec succès',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes'    => [
        'avatar'                => 'Avatar',
        'cover_picture'         => 'Photo de courverture',
        'background_picture'    => 'Photo d\'arrière plan',
        'slug'                  => 'Slug',
        'model'                 => 'Modele',
        'address'               => 'Adresse',
        'age'                   => 'Age',
        'available'             => 'Disponible',
        'city'                  => 'Ville',
        'content'               => 'Contenu',
        'country'               => 'Pays',
        'current_password'      => 'Mot de passe actuel',
        'date'                  => 'Date',
        'day'                   => 'Jour',
        'description'           => 'Description',
        'email'                 => 'Adresse email',
        'excerpt'               => 'Extrait',
        'first_name'            => 'Prénom',
        'gender'                => 'Genre',
        'hour'                  => 'Heure',
        'last_name'             => 'Nom',
        'minute'                => 'Minute',
        'mobile'                => 'Portable',
        'month'                 => 'Mois',
        'name'                  => 'Nom',
        'password'              => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'confirm_password'      => 'Confirmer le mot de passe',
        'old_password'          => 'Ancien mot de passe',
        'new_password'          => 'Nouveau mot de passe',
        'confirm_new_password'  => 'Confirmation du nouveau mot de passe',
        'phone'                 => 'Téléphone',
        'phone_number'          => 'Numéro de téléphone',
        'second'                => 'Seconde',
        'sex'                   => 'Sexe',
        'size'                  => 'Taille',
        'time'                  => 'Heure',
        'title'                 => 'Titre',
        'username'              => 'Nom d\'utilisateur',
        'year'                  => 'Année',
        'code'                  => 'Code',
        'created_at'            => 'Créé(e) à',
        'creation_date'         => 'Date de création',
        'updated_at'            => 'Modifié(e) à',
        'update_date'           => 'Date de mise à jour',
        'modification_date'     => 'Date de modification',
        'user_profile'          => 'Profil utilisateur',
        'profile'               => 'Profil',
        'identifiants'          => [
            'all'               => 'Identifiant (Adresse Email, Téléphone ou Pseudo)',
            'only'              => [
                'email_or_phone'    => 'Identifiant (Adresse Email ou Téléphone)',
                'email_or_username' => 'Identifiant (Adresse Email ou Pseudo)',
                'phone_or_username' => 'Identifiant (Téléphone ou Pseudo)',
            ],
        ],
    ],
    
];

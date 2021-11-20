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

        'new'                       => 'New|New|New',
        'create'                    => 'Create',
        'create_a_new'              => 'Create New|Create New|Create New',
        'create_new'                => 'Create New|Create New|Create New',
        'save'                      => 'Save',
        'register'                  => 'Register',

        'read'                      => 'Read',

        'show'                      => 'Show',
        'show_infos'                => 'Show Infos',
        'show_details'              => 'Show Details',
        'show_deleted'              => 'Show Deleted|Show Deleted',
        'show_entity_infos'         => 'Show :Entity Infos',
        'show_entity_details'       => 'Show :Entity Details',
        'show_deleted_entity'       => 'Show :Entity Deleted|Show :Entity Deleted',
        
        'edit'                      => 'Edit',
        'update'                    => 'Update',
        'delete'                    => 'Delete',
        'delete_permanently'        => 'Delete Permanently',
        'restore'                   => 'Restore',
        'back'                      => 'Back',
        'back_to'                   => 'Back to :Destination',
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
        'successfully'      => [
            'created'       => [
                'entity'    => ':Entity has been created successfully.',
            ],

            'saved'         => [
                'entity'    => ':Entity has been saved successfully.',
            ],
            
            'retrieved'     => [
                'entity'    => 'Retrieved :Entity successfully.',
                'records'   => 'Retrieved records successfully.',
                'searched'  => 'Retrieved searched records successfully.',
                'deleted'   => 'Retrieved deleted records successfully.',
            ],

            'updated'       => [
                'entity'    => ':Entity has been updated successfully.',
            ],

            'deleted'       => [
                'entity'                => ':Entity has been deleted successfully.',
                'entity_permanently'    => ':Entity has been permanently deleted successfully.',
            ],

            'restored'      => [
                'entity'    => ':Entity has been restored successfully.',
            ],

            'login'      => [
                'title'     => 'Login successfully.',
                'message'   => 'Welcome, have a good session !',
            ],

            'logout'      => [
                'title'    => 'Logout successfully.',
                'message'  => 'Thanks for your session ! See you soon !',
            ],
        ],

        'records'           => [
            'not_available'     => 'No records available yet.',
            'not_found'         => 'No records found for this request.',
            'not_found_trashed' => 'No trashed records available.',
        ],

        'resource'          => [
            'not_found'                     => 'The requested resource was not found.',
            'already_exists'                => 'The resource you are trying to create already exists.',
            'attribute_already_exists'      => 'This :attribute already exists.',
        ],

        'not_matching'      => [
            'data'          => 'The provided data does not match our records.',
            'attribute'     => 'The provided :attribute does not match our records.',
            'identifiant'   => 'The provided identifiants does not match our records.',
            'credentials'   => 'The provided credentials does not match our records.',
            'email'         => 'The provided email does not match our records.',
            'password'      => 'The provided password does not match our records.',
        ],

        'invalid'           => [
            'attribute'     => 'Invalid :attribute',
            'identifiant'   => 'Invalid identifiant',
            'email'         => 'Invalid email address',
            'phone_number'  => 'Invalid phone number',
            'password'      => 'Invalid password',
        ],
        
        'entity'            => [
            'created'               => ':Entity has been created successfully.',
            'saved'                 => ':Entity has been saved successfully.',
            'list'                  => 'Get :Entity list.',
            'list_with_deleted'     => 'Get :Entity list with trashed data included.',
            'search_results'        => 'Get :Entity search results.',
            'deleted_list'          => 'Get deleted :Entity list.',
            'resource'              => 'Get :Entity resource.',
            'updated'               => ':Entity has been updated successfully.',
            'changed'               => ':Entity has been changed successfully.',
            'deleted'               => ':Entity has been deleted successfully.',
            'restored'              => ':Entity has been restored successfully.',
            'deleted_permanently'   => ':Entity has been deleted permanently successfully.',
            'removed'               => ':Entity has been deleted permanently successfully.',
        ],
        
        'completed'           => [
            'creation'              => 'Creation successfully completed',
            'update'                => 'Update successfully completed',
            'deletion'              => 'Deletion successfully completed',
            'restoration'           => 'Restoration successfully completed',
            'permanent_deletion'    => 'Permanent deletion successfully completed',
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
        'cover_picture'         => 'Cover Picture',
        'background_picture'    => 'Background Picture',
        'slug'                  => 'Slug',
        'model'                 => 'Model',
        'address'               => 'Address',
        'age'                   => 'Age',
        'available'             => 'Available',
        'city'                  => 'City',
        'content'               => 'Content',
        'country'               => 'Country',
        'current_password'      => 'Current password',
        'date'                  => 'Date',
        'day'                   => 'Day',
        'description'           => 'Description',
        'email'                 => 'Email Address',
        'excerpt'               => 'Excerpt',
        'first_name'            => 'First name',
        'gender'                => 'Gender',
        'hour'                  => 'Hour',
        'last_name'             => 'Last name',
        'minute'                => 'Minute',
        'mobile'                => 'Mobile',
        'month'                 => 'Month',
        'name'                  => 'Name',
        'password'              => 'Password',
        'password_confirmation' => 'Password confirmation',
        'confirm_password'      => 'Confirm Password',
        'old_password'          => 'Old Password',
        'new_password'          => 'New Password',
        'confirm_new_password'  => 'Confirm New Password',
        'phone'                 => 'Phone',
        'phone_number'          => 'Phone number',
        'second'                => 'Second',
        'sex'                   => 'Sex',
        'size'                  => 'Size',
        'time'                  => 'Time',
        'title'                 => 'Title',
        'username'              => 'Username',
        'year'                  => 'Year',
        'code'                  => 'Code',
        'created_at'            => 'Created at',
        'creation_date'         => 'Creation date',
        'updated_at'            => 'Updated at',
        'update_date'           => 'Update date',
        'modification_date'     => 'Modification date',
        'user_profile'          => 'User Profile',
        'profile'               => 'Profile',
        'location'              => 'Location',
        'bio'                   => 'Bio',
        'identifiants'          => [
            'all'               => 'Identifiant (Email, Phone Number or Username)',
            'only'              => [
                'email_or_phone'    => 'Identifiant (Email or Phone Number)',
                'email_or_username' => 'Identifiant (Email or Username)',
                'phone_or_username' => 'Identifiant (Phone Number or Username)',
            ],
        ],
    ],

];

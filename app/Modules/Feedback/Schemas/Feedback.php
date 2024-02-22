<?php
namespace App\Modules\Feedback\Schemas;

use OpenApi\Attributes as OAT;

#[OAT\Schema(schema: 'feedback',
             required: [
                 'lastname',
                 'firstname',
                 'email',
                 'theme',
                 'message'
             ])]
class Feedback
{
    #[OAT\Property(type: 'string')]
    public string $lastname;

    #[OAT\Property(type: 'string')]
    public string $firstname;

    #[OAT\Property(type: 'string')]
    public string $email;

    #[OAT\Property(type: 'string')]
    public string $mobile;

    #[OAT\Property(type: 'integer')]
    public string $city_id;

    #[OAT\Property(type: 'string')]
    public string $theme;

    #[OAT\Property(type: 'string')]
    public string $message;

    #[OAT\Property(type: 'string', format: 'binary')]
    public string $userfile;
}

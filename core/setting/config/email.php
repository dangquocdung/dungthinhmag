<?php
/**
 * Array mail config
 */
return [
    'email' => [
        'name' => __('Mail config'),
        'settings' => [
            [
                'label' => __('Mail driver'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_driver',
                    'value' => config('mail.driver'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Mail driver'),
                    ],
                ],
            ],

            [
                'label' => __('Port'),
                'type' => 'number',
                'attributes' => [
                    'name' => 'email_port',
                    'value' => config('mail.port'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Port of mail server'),
                    ],
                ],
            ],

            [
                'label' => __('Host'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_host',
                    'value' => config('mail.host'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Host send mail'),
                    ],
                ],
            ],

            [
                'label' => __('Username'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_username',
                    'value' => config('mail.username'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Username to login to mail server'),
                    ],
                ],
            ],

            [
                'label' => __('Password'),
                'type' => 'password',
                'attributes' => [
                    'name' => 'email_password',
                    'value' => config('mail.password'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Password to login to mail server'),
                    ],
                ],
            ],
            [
                'label' => __('Encryption'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_encryption',
                    'value' => config('mail.encryption'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Encryption'),
                    ],
                ],
            ],
            [
                'label' => __('From email address'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_from_address',
                    'value' => config('mail.from.address'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('From email address'),
                    ],
                ],
            ],
            [
                'label' => __('From name'),
                'type' => 'text',
                'attributes' => [
                    'name' => 'email_from_name',
                    'value' => config('mail.from.name'),
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('From name'),
                    ],
                ],
            ],
        ],
    ],
];
<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionLikesCreateLikesFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionLikesCreateLikesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $stream = [
        'entry'      => 'anomaly.field_type.polymorphic',
        'ip_address' => 'anomaly.field_type.text',
        'user'       => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\UsersModule\User\UserModel',
                'mode'    => 'lookup',
            ]
        ],
    ];

}

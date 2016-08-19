<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionLikesCreateLikesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionLikesCreateLikesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'likes',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'entry'      => [
            'required' => true
        ],
        'ip_address' => [
            'required' => true
        ],
        'user',
    ];

}

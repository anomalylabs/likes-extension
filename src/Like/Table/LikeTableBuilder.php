<?php namespace Anomaly\LikesExtension\Like\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class LikeTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\LikesExtension\Like\Table
 */
class LikeTableBuilder extends TableBuilder
{

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];
}

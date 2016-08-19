<?php namespace Anomaly\LikesExtension\Like;

use Anomaly\LikesExtension\Like\Contract\LikeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class LikeRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\LikesExtension\Like
 */
class LikeRepository extends EntryRepository implements LikeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LikeModel
     */
    protected $model;

    /**
     * Create a new LikeRepository instance.
     *
     * @param LikeModel $model
     */
    public function __construct(LikeModel $model)
    {
        $this->model = $model;
    }
}

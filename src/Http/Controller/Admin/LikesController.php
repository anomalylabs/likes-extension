<?php namespace Anomaly\LikesExtension\Http\Controller\Admin;

use Anomaly\LikesExtension\Like\Form\LikeFormBuilder;
use Anomaly\LikesExtension\Like\Table\LikeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LikesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LikeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LikeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LikeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LikeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LikeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LikeFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

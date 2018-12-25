<?php
namespace kouosl\portal-oylama\controllers\backend;


/**
 * Default controller for the `portal-oylama` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}

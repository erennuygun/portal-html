<?php
namespace kouosl\html\controllers\frontend;



use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


use kouosl\html\models\Konular;
use kouosl\html\models\KonularSearch;
/**
 * Default controller for the `html` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new Konular();
		$searchModel = new KonularSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query-> Where(1);
		//$dataProvider->query-> SELECT * FROM 'Konular' ;
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Konular::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    public function actionKonuoku($id){
	
	//	return $this->render('haberoku');
		return $this->render('konuoku', [
            'model' => $this->findModel($id),
        ]);
	}
	
    
}

<?
namespace common\widgets;

use app\models\StudentCardSearch;
use \yii\base\Widget;
use Yii;

class StudentCardSearchWidget extends Widget
{
    public function run() {
        $model = new StudentCardSearch();
        $model->load(Yii::$app->request->post());
        return $this->render('/student-card/_search', ['model' => $model]);
    }
}
<?php
 
namespace console\controllers;
 
use yii\console\Controller;
use common\models\Stock;
use common\models\Daily_stock_on_hand;
use yii\db\Expression;
 
/**
 * Test controller
 */
class StockController extends Controller {
 
    public function actionIndex() {
        echo "cron service runnning";
    }

    public function actionInit_daily_stockonhand(){
        //$stock = Stock::find()->all();

        // Start date
        $date = '2013-01-01';
        // End date
        $end_date = '2013-02-01';

        while (strtotime($date) <= strtotime($end_date)) {
            echo "$date\n";
            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
        }

        /*foreach($stock as $rowStock){

        }*/
    }
 
    public function actionSave_daily_stockonhand(){

        $model = Stock::find()->all();

        foreach($model as $row){
            if(!Daily_stock_on_hand::findBySql('select * from daily_stock_on_hand where ProductID=:ProductID and Date=current_date',[':ProductID'=>$row->ProductID])->exists()){

                $model_dailyStockOnHand = new Daily_stock_on_hand();
                $model_dailyStockOnHand->ProductID = $row->ProductID;
                $model_dailyStockOnHand->OnHand = $row->Onhandbal;
                $model_dailyStockOnHand->Date = new Expression('current_date');
                $model_dailyStockOnHand->Cost = $row['Cost'];
                $model_dailyStockOnHand->save();
            }else{
                echo "record already added";
            }



        }
    }

}
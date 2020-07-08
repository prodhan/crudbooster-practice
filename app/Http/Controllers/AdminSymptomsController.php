<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminSymptomsController extends CBController {


    public function cbInit()
    {
        $this->setTable("symptoms");
        $this->setPermalink("symptoms");
        $this->setPageTitle("Symptoms");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Parent","parent_id",["table"=>"symptoms","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		

    }
}

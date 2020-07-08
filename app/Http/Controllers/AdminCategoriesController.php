<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminCategoriesController extends CBController {


    public function cbInit()
    {
        $this->setTable("categories");
        $this->setPermalink("categories");
        $this->setPageTitle("Categories");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Parent","parent_id",["table"=>"categories","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addWysiwyg("Description","description")->strLimit(150);
		

    }
}

<?php

//Create Inventory Class
//There should be add item method which can add the new item and qty into the list property
//There should be a sale method which will reduce the qty of the item
class inventory{
    private $item_list = [];
    
    function additem(string $item,int $qty)
    {
        $new_item = $this->builditem($item,$qty); // ['name'=>$item,'qyt'=>$qty]
        array_push($this->item_list,$new_item); //$this->item_list = [$new_item,$new_item]
        var_dump($this->item_list);
    }
    private function builditem(string $item,int $qty){
        return ['name'=>$item,'qty'=>$qty];
    }
    function sale_item(string $item,int $qty){
     $arraycolumn=array_column($this->item_list,'name'); //$arraycolumn = ['name']
     $arraysearch_index=array_search($item,$arraycolumn);//$arraysearch_index = int(1)
     $this->item_list[1]['qty'] -=$qty;
     var_dump($arraysearch_index);
     var_dump($this->item_list);
    }

    
}
$inventory=new inventory();
$inventory->additem('orange',30);
$inventory->additem('apple',40);
$inventory->sale_item('apple',10);
<?php

$trans_data = DB::table("translation_mgmt")->where('id','1')->get()->first();
  
return [
  
    'Home' => $trans_data->Menu1,
    'Rent' => $trans_data->Menu2
  
];
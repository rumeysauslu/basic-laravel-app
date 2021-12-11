<?php
  $books = \App\Models\User::find(1)->books;
  foreach ($books as $key=>$value){
    echo $value['name']."</br>";
  }


<?php
  $books = \App\Models\Book::all();
  foreach ($books as $key => $value)
  {
    echo $value['name']."-".$value['page_count']."<br/>";
  }

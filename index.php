<? php
$ array = [
    'Red' => 1 ,
    'Yellow' => 2 ,
    'Green' => 3 ,
    'Blu' => 4 ,
    'Orange' => 5 ,
    'Purple' => 6 ,
    'Lilac' => 7 ,
    'Fuchsia' => 8 ,
    'Pink' => 9 ,
    'Emerald' => 10 ,
    'Cherry' => 11 ,
    'Burgundy' => 12 ,
    'Mint' => 13 ,
    'Peach' => 14 
]
?>
<! doctype html >
< html  lang = " ru " >
< голова >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "
          content = " width = device-width, user-scaleable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0 " >
    < meta  http-Equiv = " X-UA-Compatible " content = " ie = edge " >
    < title > Документ </ title >
</ голова >
< тело >
     <? php  foreach ( $ array  as  $ key => $ value ) {
        эхо ( $ ключ ). "" ;
        эхо ( значение $ ). PHP_EOL ;
     }
     ?>
</ body >
</ html >

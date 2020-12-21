

@include('header');
<div class="container mt-5">
 



 <?php    $json = json_decode($books);
    // print_r($json);
   // print_r($json);
   for($i=0; $i<5;$i++){
       echo $json->response->docs[$i]->id.'<br/>';
    }
    
  
    ?>
    




</div>
@include('footer')
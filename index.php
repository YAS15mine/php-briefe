<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
      
     
<main  class="d-flex   ">
<form method="post" action="">
    <table class="table    table-striped table custom-table  ">
      <thead>
        <tr>
          <th scope="col">23 NOV 11:00H</th>
          <th scope="col" class="text-center">FINALIZADO</th>
          <th scope="col">PARTIDO 9</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="equipes/morroco.jpg" alt="" width="50" height="50"></td>
          <td>
            <div class="input-group  mx-auto ">
               <input type="number" class="form-control" id="" placeholder="score" value="2"  name="moroccofirstmatch">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="saudiafirstmatch"> 
            </div>
          </td>
          <td><img src="equipes/cr7.png" alt="" width="50" height="50">
</td>
        </tr>
        <tr>
          <td>23 NOV 20:00H</td>
          <td class="text-center">FINALIZADO</td>
          <td>PARTIDO 12</td>
        </tr>
        <tr>
          <td><img src="equipes/neymar.png" alt="" width="50" height="50"></td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="brezilefirstmatch"
                >
              <span class="input-group-text">:</span>
 <input type="number" class="form-control" id="" placeholder="score" value="2" name="realfirstmatch"> 

            </div>
          </td>
          <td><img src="equipes/real.png" alt="" width="50" height="50"></td>
        </tr>
        <tr>
          <td>27 NOV 14:00H</td>
          <td class="text-center">FINALIZADO</td>
          <td>PARTIDO 26</td>
        </tr>
        <tr>
          <td>  <img src="equipes/neymar.png" alt="" width="50" height="50"></td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="$brezilesecondematch"
                >
              <span class="input-group-text">:</span>
               <input type="number" class="form-control" id="" placeholder="score" value="2"  name="moroccosecondematch">
            </div>
          </td>
          <td><img src="equipes/morroco.jpg" alt="" width="50" height="50"></td>
        </tr>
        <tr>
          <td>27 NOV 17:00H</td>
          <td class="text-center">FINALIZADO</td>
          <td>PARTIDO 27</td>
        </tr>
        <tr>
          <td> <img src="equipes/cr7.png" alt="" width="50" height="50">
</td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="saudiasecondematch"> 
              <span class="input-group-text">:</span>
                              <input type="number" class="form-control" id="" placeholder="score" value="2" name="realsecondematch"> 

            </div>
          </td>
          <td><img src="equipes/real.png" alt="" width="50" height="50"></td>
        </tr>
        <tr>
          <td>01 Dec 1:00H</td>
          <td class="text-center">FINALIZADO</td>
          <td>PARTIDO 41</td>
        </tr>
        <tr>
          <td>                <img src="equipes/cr7.png" alt="" width="50" height="50">
</td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="saudia3rdmatch"> 
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" id="" placeholder="score" value="2" name="brezile3rdmatch"
                >
            </div>
          </td>
          <td>                
            <img src="equipes/neymar.png" alt="" width="50" height="50"></td>
        </tr>
        <tr>
          <td>01 Dec 16:00H</td>
          <td class="text-center">FINALIZADO</td>
          <td>PARTIDO 42</td>
        </tr>
        <tr>
          <td><img src="equipes/real.png" alt="" width="50" height="50"></td>
          <td>
            <div class="input-group  mx-auto">
                              <input type="number" class="form-control" id="" placeholder="score" value="2" name="real3rdmatch"> 

              <span class="input-group-text">:</span>
               <input type="number" class="form-control" id="" placeholder="score"  value="2" name="morocco3rdmatch">
            </div>
          </td>
          <td><img src="equipes/morroco.jpg" alt="" width="50" height="50"></td>
        </tr>
      </tbody>
    </table>

              <input  class=" bg-dark  text-white  mt-3 " type="submit" value="stimulat" name ="stimuler">
        </div>
  

      </form>
      <?php 

// if (isset($_POST['stimuler'])){
//     $input_values = array();
//     foreach ($_POST as $key => $value) {
//         if($value != null){
//             $input_values[$key] = $value;
//           }
//     }
//           var_dump($input_values);
//       }

         
     
      function standing($moroccofirstmatch, $moroccosecondematch, $morocco3rdmatch, $saudiafirstmatch, $saudiasecondematch, $saudia3rdmatch, $brezilefirstmatch, $brezilesecondematch, $brezile3rdmatch, $realfirstmatch, $realsecondematch, $real3rdmatch) {
        $teams = array("morocco", "saudia", "brezile", "real");
        // $match_results = array(
        //     "Morocco" => array($moroccofirstmatch, $moroccosecondematch, $morocco3rdmatch),
        //     "Saudia" => array($saudiafirstmatch, $saudiasecondematch, $saudia3rdmatch),
        //     "Brezile" => array($brezilefirstmatch, $brezilesecondematch, $brezile3rdmatch),
        //     "Real" => array($realfirstmatch, $realsecondematch, $real3rdmatch)
        // );
    
        foreach ($teams as $team) {
            ${$team . "_points"} = 0;
            ${$team . "_goals"} = 0;
            ${$team . "_goals_in"} = 0;
            ${$team . "_wins"} = 0;
            ${$team . "_loses"} = 0;
            ${$team . "_draw"} = 0;
        }

    
        $goals_in = 0;
    
        //  match 1 morroco vs saudia 
        if ($moroccofirstmatch>$saudiafirstmatch){
             
            $morocco_points += 3;
            $morocco_goals+= $moroccofirstmatch;
            $morocco_wins+= 1 ;
            $morocco_goals_in+=$saudiafirstmatch;

            $saudia_goals+=$saudiafirstmatch;
            $saudia_loses+=1;
            $saudia_goals_in+=$moroccofirstmatch;
        }elseif($moroccofirstmatch<$saudiafirstmatch ){
            $saudia_points += 3;
            $morocco_goals+= $moroccofirstmatch;
            $saudia_wins+= 1 ;
            $morocco_goals_in+=$saudiafirstmatch;

            $saudia_goals+=$saudiafirstmatch;
            $morocco_loses+=1;
            $saudia_goals_in+=$moroccofirstmatch;  
        }else{
            $morocco_points += 1;
            $morocco_goals+= $moroccofirstmatch;
            $morocco_draw+= 1 ;
            $morocco__goals_in+=$saudiafirstmatch;
            $saudia_points += 1;
            $saudia_draw+= 1 ;
            $saudia_goals+=$saudiafirstmatch;
            $saudia_goals_in+=$moroccofirstmatch;
        }
       
  //        //  match 2 berezile vs real
         
  //        if ($brezilefirstmatch>$realfirstmatch){
             
  //           $brezile_points += 3;
  //           $brezile_goals+= $brezilefirstmatch;
  //           $brezile_wins+= 1 ;
  //           $brezile__goals_in+=$realfirstmatch;

  //           $real_goals+=$saudiafirstmatch;
  //           $real_loses+=1;
  //           $brezile_goals_in+=$realfirstmatch;
  //       }elseif($brezilefirstmatch<$realfirstmatch ){
  //           $real_points += 3;
  //           $real_goals+= $realfirstmatch;
  //           $real_wins+= 1 ;
  //           $real_goals_in+=$brezilefirstmatch;

  //           $brezile_goals+=$brezilefirstmatch;
  //           $brezile_loses+=1;
  //           $brezile_goals_in+=$realfirstmatch;  
  //       }else{
  //           $real_points += 1;
  //           $real_goals+= $realfirstmatch;
  //           $real_draw+= 1 ;
  //           $real_goals_in+=$brezilefirstmatch;
  //           $brezile_points += 1;
  //           $brezile_draw+= 1 ;
  //           $brezile_goals+=$brezilefirstmatch;
  //           $brezile_goals_in+=$realfirstmatch;
  //       }



  //       // match 3 morroco vs brzile (second match for both of them  )
        
  //       if ( $moroccosecondematch>$brezilesecondematch){
  //           $morocco_points += 3;
  //           $morocco_goals+= $moroccosecondematch;
  //           $morocco_wins+= 1 ;
  //           $morocco_goals_in+=$brezilesecondematch;

  //           $brezile_goals+=$brezilesecondematch;
  //           $brezile_loses+=1;
  //           $brezile_goals_in+=$moroccosecondematch;
  //       }elseif($moroccosecondematch<$brezilesecondematch ){
  //           $brezile_points += 3;
  //           $morocco_goals+=$moroccosecondematch;
  //           $brezile_wins+= 1 ;
  //           $morocco_goals_in+=$brezilesecondematch;

  //           $brezile_goals+=$brezilesecondematch;
  //           $morocco_loses+=1;
  //           $brezile_goals_in+=$moroccosecondematch;  
  //       }else{
  //           $morocco_points += 1;
  //           $morocco_goals+=$moroccosecondematch;
  //           $morocco_draw+= 1 ;
  //           $morocco_goals_in+=$brezilesecondematch;
  //           $brezile_points += 1;
  //           $brezile_draw+= 1 ;
  //           $brezile_goals+=$brezilesecondematch;
  //           $brezile_goals_in+=$moroccofirstmatch;
  //       }

  //   //  match 4 saudia vs real (second match for both)
  //   if ( $saudiasecondematch>$realsecondematch){
  //     $saudia_points += 3;
  //     $saudia_goals+= $saudiasecondematch;
  //     $saudia_wins+= 1 ;
  //     $saudia_goals_in+=$realsecondematch;

  //     $real_goals+=$realsecondematch;
  //     $real_loses+=1;
  //     $real_goals_in+=$saudiasecondematch;
  // }elseif($saudiasecondematch<$realsecondematch ){
  //     $real_points += 3;
  //     $saudia_goals+=$saudiasecondematch;
  //     $real_wins+= 1 ;
  //     $saudia_goals_in+=$realsecondematch;

  //     $real_goals+=$realsecondematch;
  //     $saudia_loses+=1;
  //     $real_goals_in+=$saudiasecondematch;
  // }else{
  //     $saudia_points += 1;
  //     $audia_goals+=$saudiasecondematch;
  //     $saudia_draw+= 1 ;
  //     $saudia_goals_in+=$realsecondematch;
  //     $real_points += 1;
  //     $real_draw+= 1 ;
  //     $real_goals+=$realsecondematch;
  //     $real_goals_in+=$saudiasecondematch;
  // }
  //     //  match 5 saudia vs brezile (3RD match for both)

  //     if ( $saudia3rdmatch>$brezile3rdmatch){
  //       $saudia_points += 3;
  //       $saudia_goals+= $saudia3rdmatch;
  //       $saudia_wins+= 1 ;
  //       $saudia_goals_in+=$brezile3rdmatch;
  
  //       $brezile_goals+=$brezile3rdmatch;
  //       $brezile_loses+=1;
  //       $brezile_goals_in+=$saudia3rdmatch;
  //   }elseif($saudia3rdmatch<$brezile3rdmatch ){
  //       $brezile_points += 3;
  //       $saudia_goals+=$saudia3rdmatch;
  //       $brezile_wins+= 1 ;
  //       $saudia_goals_in+=$brezile3rdmatch;
  
  //       $brezile_goals+=$brezile3rdmatch;
  //       $saudia_loses+=1;
  //       $brezile_goals_in+=$saudia3rdmatch;
  //   }else{
  //       $saudia_points += 1;
  //       $audia_goals+=$saudia3rdmatch;
  //       $saudia_draw+= 1 ;
  //       $saudia_goals_in+=$brezile3rdmatch;
  //       $brezile_points += 1;
  //       $brezile_draw+= 1 ;
  //       $brezile_goals+=$brezile3rdmatch;
  //       $brezile_goals_in+=$saudia3rdmatch;
  //   }
  //          //  match 6 real vs morocco (3RD match for both)
          
  //          if ( $morocco3rdmatch>$real3rdmatch){
  //           $morocco_points += 3;
  //           $morocco_goals+= $morocco3rdmatch;
  //           $morocco_wins+= 1 ;
  //           $morocco_goals_in+=$real3rdmatch;

  //           $real_goals+=$brezilesecondematch;
  //           $real_loses+=1;
  //           $real_goals_in+=$morocco3rdmatch;
  //       }elseif($morocco3rdmatch<$real3rdmatch ){
  //           $real_points += 3;
  //           $morocco_goals+=$morocco3rdmatch;
  //           $real_wins+= 1 ;
  //           $morocco_goals_in+=$real3rdmatch;

  //           $real_goals+=$real3rdmatch;
  //           $morocco_loses+=1;
  //           $real_goals_in+=$morocco3rdmatch;  
  //       }else{
  //           $morocco_points += 1;
  //           $morocco_goals+=$morocco3rdmatch;
  //           $morocco_draw+= 1 ;
  //           $morocco_goals_in+=$real3rdmatch;
  //           $real_points += 1;
  //           $real_draw+= 1 ;
  //           $real_goals+=$real3rdmatch;
  //           $real_goals_in+=$morocco3rdmatch;
  //       }

        $morocco = array("name" => "Morocco", "points" =>  $morocco_points, "match" =>  $morocco_draw +  $morocco_loses +  $morocco_wins, "wins" =>  $morocco_wins, "draws" => $morocco_draw, "loses" =>  $morocco_loses, "goals" => $morocco_goals, "goals_in" =>  $morocco_goals_in, "+/-" =>  $morocco_goals -  $morocco_goals_in);
        //  result
        // $saudia = array("name" => "Saudia", "points" =>  $saudia_points, "match" =>  $saudia_draw + $saudia_loses + $saudia_wins, "wins" =>  $saudia_wins, "draws" => $saudia_draw, "loses" => $saudia_loses, "goals" =>  $saudia_goals, "goals_in" => $saudia_goals_in, "+/-" =>  $saudia_goals -  $saudia_goals_in);
        //  result
        // $brezile = array("name" => "Brezile", "points" =>$brezile_points, "match" => $brezile_draw + $brezile_loses +$brezile_wins, "wins" => $brezile_wins, "draws" =>$brezile_draw, "loses" => $brezile_loses, "goals" =>$brezile_goals, "goals_in" => $goals_in, "+/-" => $brezile_goals - $goals_in);
        //  result
        // $real = array("name" => "Real", "points" =>  $real_points, "match" =>  $real_draw+  $real_loses + $real_wins, "wins" => $real_wins, "draws" => $real_draw, "loses" => $real_loses, "goals" => $real_goals, "goals_in" => $real_goals_in, "+/-" => $real_goals - $real_goals_in);
        //  array
        $standings = array();
        array_push($standings, $morocco);
        // array_push($standings,  $saudia);
        // array_push($standings,   $brezile);
        // array_push($standings, $real);
        // print_r($standings) ;
    


        // return result
    }
     standing($_POST["moroccofirstmatch"],$_POST["moroccosecondematch"],$_POST["morocco3rdmatch"],$_POST["saudiafirstmatch"],$_POST["saudiasecondematch"],$_POST["saudia3rdmatch"],$_POST["brezilefirstmatch"],$_POST["brezilesecondematch"],$_POST["brezile3rdmatch"],$_POST["realfirstmatch"],$_POST["realsecondematch"],$_POST["real3rdmatch"]);


      



?>

<table class="table table-striped d-flex  w-50  ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TEAMS</th>
                <th scope="col">Pts</th>
                <th scope="col">MP</th>
                <th scope="col">W</th>
                <th scope="col">D</th>
                <th scope="col">L</th>
                <th scope="col">GF</th>
                <th scope="col">GA</th>
                <th scope="col">+/-</th>
            </tr>
        </thead>
    </table>
</main>




</body>
</html>
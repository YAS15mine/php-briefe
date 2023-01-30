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
               <input type="number" class="form-control" id="" placeholder="score"  name="moroccofirstmatch">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" id="" placeholder="score" name="saudiafirstmatch"> 
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
              <input type="number" class="form-control" id="" placeholder="score" name="brezilefirstmatch"
                >
              <span class="input-group-text">:</span>
 <input type="number" class="form-control" id="" placeholder="score" name="realfirstmatch"> 

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
          <td>                <img src="equipes/neymar.png" alt="" width="50" height="50"></td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" name="brezilefirstmatch"
                >
              <span class="input-group-text">:</span>
               <input type="number" class="form-control" id="" placeholder="score"  name="moroccofirstmatch">
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
          <td>                <img src="equipes/cr7.png" alt="" width="50" height="50">
</td>
          <td>
            <div class="input-group  mx-auto">
              <input type="number" class="form-control" id="" placeholder="score" name="saudiafirstmatch"> 
              <span class="input-group-text">:</span>
                              <input type="number" class="form-control" id="" placeholder="score" name="realfirstmatch"> 

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
              <input type="number" class="form-control" id="" placeholder="score" name="saudiafirstmatch"> 
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" id="" placeholder="score" name="brezilefirstmatch"
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
                              <input type="number" class="form-control" id="" placeholder="score" name="realfirstmatch"> 

              <span class="input-group-text">:</span>
               <input type="number" class="form-control" id="" placeholder="score"  name="moroccofirstmatch">
            </div>
          </td>
          <td><img src="equipes/morroco.jpg" alt="" width="50" height="50"></td>
        </tr>
      </tbody>
    </table>

              <input  class=" bg-dark  text-white  mt-3 "    type="submit" value="stimulat" name ="stimuler">
        </div>
  

      </form>
      <?php 

if (isset($_POST['stimuler'])){
    $input_values = array();
    foreach ($_POST as $key => $value) {
        if($value != null){
            $input_values[$key] = $value;
          }
    }
          var_dump($input_values);
      }

         
     
      function standing($moroccofirstmatch, $moroccosecondematch, $morocco3rdmatch, $saudiafirstmatch, $saudiasecondematch, $saudia3rdmatch, $brezilefirstmatch, $brezilesecondematch, $brezile3rdmatch, $realfirstmatch, $realsecondematch, $real3rdmatch) {
        $teams = array("morocco", "saudia", "brezile", "real");
        $match_results = array(
            "Morocco" => array($moroccofirstmatch, $moroccosecondematch, $morocco3rdmatch),
            "Saudia" => array($saudiafirstmatch, $saudiasecondematch, $saudia3rdmatch),
            "Brezile" => array($brezilefirstmatch, $brezilesecondematch, $brezile3rdmatch),
            "Real" => array($realfirstmatch, $realsecondematch, $real3rdmatch)
        );
    
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
            $morocco__goals_in+=$saudiafirstmatch;

            $saudia_goals+=$saudiafirstmatch;
            $saudia_loses+=1;
            $saudia_goals_in+=$moroccofirstmatch;
        }elseif($moroccofirstmatch<$saudiafirstmatch ){
            $saudia_points += 3;
            $morocco_goals+= $moroccofirstmatch;
            $saudia_wins+= 1 ;
            $morocco__goals_in+=$saudiafirstmatch;

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
       
         //  match 2 berezile vs real
         
         if ($brezilesecondematch>$realfirstmatch){
             
            $brezile_points += 3;
            $brezile_goals+= $brezilesecondematch;
            $brezile_wins+= 1 ;
            $brezile__goals_in+=$realfirstmatch;

            $real_goals+=$saudiafirstmatch;
            $real_loses+=1;
            $brezile_goals_in+=$realfirstmatch;
        }elseif($brezilesecondematch<$realfirstmatch ){
            $real_points += 3;
            $real_goals+= $realfirstmatch;
            $real_wins+= 1 ;
            $real__goals_in+=$brezilesecondematch;

            $brezile_goals+=$brezilesecondematch;
            $brezile_loses+=1;
            $brezile_goals_in+=$realfirstmatch;  
        }else{
            $real_points += 1;
            $real_goals+= $realfirstmatch;
            $real_draw+= 1 ;
            $real_goals_in+=$brezilesecondematch;
            $brezile_points += 1;
            $brezile_draw+= 1 ;
            $brezile_goals+=$brezilesecondematch;
            $brezile_goals_in+=$realfirstmatch;
        }



        // match 3 morroco vs real (second match for both of them  )
        
        if ( $moroccosecondematch>$realsecondmatch){
            $morocco_points += 3;
            $morocco_goals+= $moroccosecondmatch;
            $morocco_wins+= 1 ;
            $morocco__goals_in+=$realsecondmatch;

            $real_goals+=$realsecondmatch;
            $real_loses+=1;
            $real_goals_in+=$moroccosecondematch;
        }elseif($moroccosecondematch<$realsecondmatch ){
            $real_points += 3;
            $morocco_goals+=$moroccosecondematch;
            $real_wins+= 1 ;
            $morocco_goals_in+=$realsecondmatch;

            $real_goals+=$realsecondmatch;
            $morocco_loses+=1;
            $real_goals_in+=$moroccosecondematch;  
        }else{
            $morocco_points += 1;
            $morocco_goals+=$moroccosecondematch;
            $morocco_draw+= 1 ;
            $morocco__goals_in+=$saudiafirstmatch;
            $saudia_points += 1;
            $saudia_draw+= 1 ;
            $saudia_goals+=$saudiafirstmatch;
            $saudia_goals_in+=$moroccofirstmatch;
        }







        // return result
        return $result;
    }

      



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
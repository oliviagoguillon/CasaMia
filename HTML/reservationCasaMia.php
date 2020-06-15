<?php
function build_calendar($month, $year) {
    $daysOfWeek = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers
     
    $datetoday = date('Y-m-d');

    $calendar = "<table class='table table-bordered'>";
    $calendar.= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Mois précèdent</a> ";
    
    $calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Mois actuel</a> ";
    
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Mois suivant</a></center><br>";
    
    $calendar.= "<tr>";

    foreach($daysOfWeek as $day) {
        $calendar.= "<th  class='header'>$day</th>";
   } 
   $calendar.= "</tr><tr>";
   $currentDay = 1;
   if ($dayOfWeek > 0) { 
    for($k=0;$k<$dayOfWeek;$k++){
           $calendar.= "<td class='empty'></td>"; 
    }
}


$month = str_pad($month, 2, "0", STR_PAD_LEFT);
     while ($currentDay <= $numberDays) {

        if($dayOfWeek == 7){
            $dayOfWeek=0;
            $calendar.="</tr><tr>";
        }

        $currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
        $date="$year-$month-$currentDayRel";
        $dayName=strtolower(date("l",strtotime($date)));
        $eventNum=0;
        $today = $date==date('Y-m-d')? "today" : "";
        if($date<date('Y-m-d')){
            $calendar.="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>Non disponible</button>";
        }else{
            $calendar.="<td class='$today'><h4>$currentDay</h4><a href='formreservation.php?date=".$date."' class='btn btn-success btn-xs'>Disponible</a>";
        }
       
        $calendar.="</td>";
        $currentDay++;
        $dayOfWeek++;
     }
 
     if ($dayOfWeek != 7) {
        $remainingDays=7-$dayOfWeek;
        for($i=0;$i<$remainingDays;$i++){
            $calendar.="<td></td>";
        }
   }

   $calendar.="</tr>";
   $calendar.="</table>";
   echo $calendar;
}
?>
        
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/reservation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php 
             
             $dateComponents = getdate();
             if(isset($_GET['month']) && isset($_GET['year'])){
                 $month = $_GET['month']; 			     
                 $year = $_GET['year'];
             }else{
                 $month = $dateComponents['mon']; 			     
                 $year = $dateComponents['year'];
             }
            echo build_calendar($month,$year);

?>


    

    
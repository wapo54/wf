<?php


//function getAllMondaysOfMonth($day, $year){
//    $day = new Datetime ("l d");
//    $year = new Datetime ("m Y");
//}
//
//
//$getAllMondaysOfMonth =[$day.$year]{
//    echo ($getAllMondaysOfMonth);
//}


//function getAllMondaysOfMonth ($month, $year) {
//    $month = date('l d');
//    $year = date('m Y');
//    if (date('N', $month.$year)== 1) {
//        return date(getAllMondaysOfMonth);
//    }



//function getAllMondaysOfMonth($month, $year){
//    $dateString = "$month.$year";
//    if (!strtotime($dateString)){
//        throw new \Exception('"'.$dateString.'" is not a valid strtotime');
//    }
//    $startDay = new \DateTime($dateString);
//
//    if ($startDay->format('j') > $daysError) {
//        $startDay->modify('- 7 days');
//    }
//
//    $days = array();
//
//    while ($startDay->format('Y-m') <= $year.'-'.str_pad($month, 2, 0, STR_PAD_LEFT)) {
//        $days[] = clone($startDay);
//        $startDay->modify('+ 7 days');
//    }
//
//    return getAllMondaysOfMonth();
//}
//
////$days = getAllMondaysOfMonth();
////
////foreach ($days as $day) {
////    echo $day->format('d l, m Y').'<br />';
////}
///


    //corrections
function getAllMondaysOfMonth($year, $month){
    $mondays =[];

    $date = DateTime::createFromFormat('Yn', $year.$month);
    $date = new DateTime ('first day of'.$date->format('F Y'));

    $interval = DateInterval::createFromDateString('next monday');

    if ($date->format('N') !=01){
        $date->add($interval);
    }
    while($date->format('m')==$month){
    $mondays[] = $date->format('l j, M Y');
    $date->add($interval);
    }
    return $mondays;
}


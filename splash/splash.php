<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?PHP
$refresh = 300;
$hour = date('H');
$month = date('m');
if ($hour> 21){
	$refresh = 7200;
} elseif ($hour < 10){
	$refresh = 7200;
}

echo '<!-- Hour ='. $hour . ' -->';
echo '<meta http-equiv="refresh" content="'. $refresh . '" >';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name=robots content='noindex,nofollow'>
<title>Trojans Splash Screen</title>
</head>

<?PHP
echo '<body background="assets/images/'.$month.'.jpg"> ';
?>

<!-- facebook page plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>

<script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
//nhour+=1;
// comment above line for GMT

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<style type="text/css">
.court_name_color {
	background-color:#CC071E;
	color:#ffffff;
	text-align: center;
}

.slot {
	color: Maroon;
	background-color: Gold;
	text-align: right;
}

.slot-font{
	text-align: center;
}

.openbg {}

.league {
	background-color: #bbbbbb; 
}

</style>

<?php

    function after ($thistxt, $inthat)
    {
        if (!is_bool(strpos($inthat, $thistxt)))
        return substr($inthat, strpos($inthat,$thistxt)+strlen($thistxt));
    };

    function before ($thistxt, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $thistxt));
    };

    function between ($thistxt, $that, $inthat)
    {
        return before ($that, after($thistxt, $inthat));
    };

?>

<?PHP
require_once 'simple_html_dom.php';
$src = file_get_html('http://www.peoriadesignweb.com/cgi-bin/scheduling/trojans_new/schedule.cgi', false, null, 0);

$newSrc = between ('> </tr>', '</table>', $src);

#$newSrc = str_replace('&nbsp','',$newSrc);
$newSrc = str_replace('<td >','',$newSrc);
$newSrc = str_replace('</td>','',$newSrc);
$newSrc = str_replace('a class=openbg','td class=openbg',$newSrc);
$newSrc = str_replace('</a>','</td>',$newSrc);
$newSrc = str_replace('<i>X</i>','',$newSrc);
$newSrc = str_replace('Reserve','Available',$newSrc);
$newSrc = str_replace('<p class=slot_font>','',$newSrc);
$newSrc = str_replace('</p>','',$newSrc);
$newSrc = str_replace('<p class=name_color>','',$newSrc);
$newSrc = str_replace('class=openbg','',$newSrc);
$newSrc = str_replace('<a class=whitebg >','',$newSrc);
$newSrc = str_replace('<th >','<th class="align-middle">',$newSrc);
$newSrc = preg_replace('/bgcolor=\'(.*?)\'/', '', $newSrc);
$newSrc = preg_replace('/href=\'(.*?)\'/', '', $newSrc);
?>

<CENTRE>
<hr/>
<div class="container-fluid">
 <div class="row">
  <div class="col-md-8">
   <div class="row">
    <div class="col-md-12">
     <div id="carouselTrojans " class="carousel slide" data-ride="carousel" data-interval="35000">
      <div class="carousel-inner">
       <div class="carousel-item active"> 
         <TABLE class="table table-striped table-sm "  style="background:#dddddd;">
          <tbody>

<?PHP
echo $newSrc;
?>
           <tr> <th class=slot><i>Time</i></th> <th class=court_name_color> <i>Court 3</i></th> <th class=court_name_color> <i>Court 4</i></th><th class=court_name_color> <i>Court 5</i></th> <th class=court_name_color> <i>Court 6</i></th><th class=slot><i>Time</i></th></tr>
          </tbody>
         </TABLE>
       </div>
       <div class="carousel-item"> 
         <img src="assets/images/hampshire_psa_2020.png" height="900" border="5"/> </li>
       </div>
      </div>
     </div>

    </div>
    
   </div>
   <div class="row">
    <div class="col-md-4">
     <div> <img src="assets/images/Decathlon-logo.jpg" height="75" border="0"/></div>
    </div>

    <div class="col-md-4">
     <div id="clockbox" style="background: #F7F6F5; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center;font:30pt Arial Bold; color:#cc071e;"></div>
    </div>

    <div class="col-md-4">
     <div> Boxes powered by squashlevels.com <img src="assets/images/squashlevels_nw.png" height="75" border="0"/></div>
    </div>
   </div>
  </div>
  <div class="col-md-4">
   <!-- carosel -->
   <div id="carouselTrojans " class="carousel slide" data-ride="carousel" data-interval="20000">
    <div class="carousel-inner">
     <div class="carousel-item active"> 
      <div class="fb-page" data-href="https://www.facebook.com/trojansquash" data-tabs="timeline" data-width="850" data-height="1080" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/trojansquash" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trojansquash">Trojans Squash Club</a></blockquote></div>
     </div>

     <div class="carousel-item " style="margin: 00px; border-style: solid; border-radius: 5px; background: #F7F6F5; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font:20pt Arial Bold; color:#cc071e;">
      <h1>Trojans monthly squash boxes</h1>
      <ul>
       <li> To join the Trojans squash boxes email: james@jammyweb.org.uk</li>
       <li> <img src="assets/images/qrcode-boxes.png" height="75" border="0"/> </li>
      </ul>
      <h1> Simple Rules</h1>
      <ul>
       <li> Boxes start first Monday of each month</li>
       <li> Arrange your own matches. Play anytime.</li>
       <li> Play best of 5 games.</li>
       <li> Agree on scoring system 
        <ul>
         <li>ideally use PAR to 11</li>
        </ul>
       </li>
       <li> Enter scores online.</li>
       <li> Get ranked alongside the country's best!</li>
      </ul>
	 <p/>
	 <p/>
	 <p/>
     </div>
     <div class="carousel-item"><embed src="https://es.squashlevels.com/boxes.php?clubid=1344&embed&boxes_only&no_nav&SL-client=trojan"  width="850" height="1280" style="transform: scale(0.74); transform-origin: 0% -15%;" ></embed></div>
<!--
     <div class="carousel-item">
      <p> <img height="850" border="0" src="assets/images/psatrojans2019.jpg"/> </p>
     </div>
     <div class="carousel-item "> 
      <a class="twitter-timeline" data-lang="en" data-theme="dark" href="https://twitter.com/TrojansSquash?ref_src=twsrc%5Etfw">Tweets by TrojansSquash</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     </div>
-->

    </div>
   </div>
   <!-- carosel end -->
  </div>
 </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>

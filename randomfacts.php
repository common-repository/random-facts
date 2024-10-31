<?php

/*
Plugin Name: Random fact
Plugin URI: http://zvoid.com/blog3/
Description: news in real time . most pupular news widget in the world.
Author: Akram Artoul
Version: 2
Author URI: http://zvoid.com/
*/


if($_POST['wx']||$_POST['hx']||$_POST['bacx']||$_POST['tcx']||$_POST['rcx']||$_POST['bcx']){


//////////////////////////////////////////
if($_POST['wx']){
add_option('outwx', '200', '', 'no');
update_option('outwx', $_POST['wx']);
}
//////////////////////////////////////////
if($_POST['hx']){
add_option('outhx', '200', '', 'no');
update_option('outhx', $_POST['hx']);
}
//////////////////////////////////////////
if($_POST['bacx']){
add_option('outbacx', 'white', '', 'no');
update_option('outbacx', $_POST['bacx']);
}
//////////////////////////////////////////
if($_POST['tcx']){
add_option('outtcx', 'black', '', 'no');
update_option('outtcx', $_POST['tcx']);
}
//////////////////////////////////////////
if($_POST['rcx']){
add_option('outrcx', 'red', '', 'no');
update_option('outrcx', $_POST['rcx']);
}
//////////////////////////////////////////
if($_POST['bcx']){
add_option('outbcx', 'white', '', 'no');
update_option('outbcx', $_POST['bcx']);
}

}



$outw = get_option('outwx');
if(!$outw)
$outw='200';
//////////////////////////////////////
$outh = get_option('outhx');
if(!$outh)
$outh='200';
//////////////////////////////////////
$outbac = get_option('outbacx');
if(!$outbac)
$outbac='white';
//////////////////////////////////////
$outtc = get_option('outtcx');
if(!$outtc)
$outtc='black';
//////////////////////////////////////
$outrc = get_option('outrcx');
if(!$outrc)
$outrc='red';
//////////////////////////////////////
$outbc = get_option('outbcx');
if(!$outbc)
$outbc='white';
//////////////////////////////////////


$optionsArrays=array(

"outwx"=>$outw,

"outhx"=>$outh,

"outbacx"=>$outbac,

"outtcx"=>$outtc,

"outrcx"=>$outrc,

"outbcx"=>$outbc

);

$prefix="snlx_";




function widget_randomfacts($args) {

	global $optionsArrays;
	global $prefix;
	
	
	


        echo($args["before_widget"].$args["before_title"].$args["widget_name"].$args["after_title"]);

	$params="bac=".$optionsArrays["outbacx"]."&bc=".$optionsArrays["outbcx"]."&tc=".$optionsArrays["outtcx"]."&rc=".$optionsArrays["outrcx"]."&w=".$optionsArrays["outwx"]."&h=".$optionsArrays["outhx"];
	

?>

	<div>

	<iframe src="http://zvoid.com/fact/index.php?<?php echo($params); ?>" id="randomfacts" style="width:<?php echo($optionsArrays["outwx"]); ?>;height:<?php echo($optionsArrays["outhx"]); ?>;" frameborder="no" scrolling="no" width="<?php echo($optionsArrays["outwx"]); ?>" height="<?php echo($optionsArrays["outhx"]); ?>"></iframe>
	
	</div>

<?

	echo($args["after_widget"]);

}





function widget_randomfacts_control() {
global $optionsArrays;

if($_SERVER["REQUEST_METHOD"]=="POST") {

?>
Width <input type="text" name="wx" size="4" value="<?php echo $optionsArrays["outwx"];?>"><br/>
Height <input type="text" name="hx" size="4" value="<?php echo $optionsArrays["outhx"];?>"><br/>
Background Color <input type="text" name="bacx" size="6" value="<?php echo $optionsArrays["outbacx"];?>"><br/>
fact Color <input type="text" name="tcx" size="6" value="<?php echo $optionsArrays["outtcx"];?>"><br/>
Random color <input type="text" name="rcx" size="6" value="<?php echo $optionsArrays["outrcx"];?>"><br/>
border color <input type="text" name="bcx" size="6" value="<?php echo $optionsArrays["outbcx"];?>"><br/>
<?php ad(); ?><br />
<?php

exit();

}

?>
Width <input type="text" name="wx" size="4" value="<?php echo $optionsArrays["outwx"];?>"><br/>
Height <input type="text" name="hx" size="4" value="<?php echo $optionsArrays["outhx"];?>"><br/>
Background Color <input type="text" name="bacx" size="6" value="<?php echo $optionsArrays["outbacx"];?>"><br/>
fact Color <input type="text" name="tcx" size="6" value="<?php echo $optionsArrays["outtcx"];?>"><br/>
Random color <input type="text" name="rcx" size="6" value="<?php echo $optionsArrays["outrcx"];?>"><br/>
border color <input type="text" name="bcx" size="6" value="<?php echo $optionsArrays["outbcx"];?>"><br/>
<?php ad(); ?><br />
<?

}


function ad()
{


	$rand = rand(1,5);

	if($rand == 1)
		{
		echo '<a href="https://www.e-junkie.com/ecom/gb.php?ii=205617&c=ib&aff=89950&cl=22794" target="ejejcsingle"><img  src="http://www.gabfirethemes.com/wp-content/uploads/2008/07/125-03.jpg" border="0" /></a>';
		
		}
	
	
	if($rand == 2)
		{
		echo '<a title="Clicky Web Analytics" href="http://getclicky.com/140944"><img alt="Clicky Web Analytics" src="http://getclicky.com/media/links/clicky-125-2.gif"		 border="0" /></a>';
		
		}
		
			if($rand == 3)
		{
		echo '<a href="https://www.e-junkie.com/ecom/gb.php?ii=229724&c=ib&aff=89950&cl=15848" title="Premium Wordpress Themes" target="_blank"><img src="http://stylewp.com/assets/banners/125_125c.gif" alt="Premium Wordpress Themes" style="border=0;" /></a>';
		
		}
		
			if($rand == 4)
		{
		echo '<a href="https://www.e-junkie.com/ecom/gb.php?ii=229724&c=ib&aff=89950&cl=15848" title="Premium Wordpress Themes" target="_blank"><img src="http://stylewp.com/assets/banners/125_125b.gif" alt="Premium Wordpress Themes" style="border=0;" /></a>';
		
		}
		
			if($rand == 5)
		{
		echo '<a href="https://www.e-junkie.com/ecom/gb.php?ii=229724&c=ib&aff=89950&cl=15848" title="Premium Wordpress Themes" target="_blank"><img src="http://stylewp.com/assets/banners/300_250.png" alt="Premium Wordpress Themes" style="border=0;" /></a>';
		
		}
		

}


function widget_randomfacts_init() {


	global $optionsArrays, $prefix;

	foreach($optionsArrays AS $ok=>$ov) {

		if (!get_option($prefix.$ok)) {

			update_option($prefix.$ok, $ov);

		}

	}

	register_sidebar_widget("random facts", "widget_randomfacts");

	register_widget_control("random facts", "widget_randomfacts_control");

}



add_action("plugins_loaded", "widget_randomfacts_init");



?>
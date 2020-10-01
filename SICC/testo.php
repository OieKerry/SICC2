
<?php
       // select car value
$select_cars = array (
  array("name"=>"Volvo","value"=>1),
  array("name"=>"BMW","value"=>2)
);

       // car detail
        $cars_detail = array (
array("name"=>"Volvo","value"=>1),
array("name"=>"BMW","value"=>2),
array("name"=>"Saab","value"=>3),
array("name"=>"Land Rover","value"=>4)
);

$string="";
foreach ($select_cars as  $key => $val) {
$string .= ',' .$val['value'];
}
$string = substr($string,1);
$string = explode(',',$string);

foreach ($cars_detail as $ld)
        {
if(in_array($ld['value'],$string))
{
?>
    <div class="form-group" style="margin-bottom: 0px;">
    <input type="checkbox" name="cars[]" checked value="<?php echo $ld['value']; ?>">
        <label><?php echo $ld['name']; ?></label>
     </div>
<?php
} else
{
?>
   <div class="form-group" style="margin-bottom: 0px;">
       <input type="checkbox" name="cars[]" value="<?php echo $ld['value']; ?>">
       <label><?php echo $ld['name']; ?></label>
    </div>
<?php
}
}
?>

<div class="main03">
<!--banner start-->
<div class="banner03">
    <div class="logo">
        <div class="logo-icon">
            <a href="/view/front/index.php" title="Ê±ÉÑ¼¾" alt=""><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T2NcbaXghaXXXXXXXX_!!898384566.gif"/></a>
        </div>
    </div>
    <div class="navigation">
        <div class="navi-list-top"></div>
		
		<?php
	
	require_once("products.php");
	
	$firstNum = (int)$_GET['first'];
	$secondNum = (int)$_GET['second'];
	
	foreach($products as $key=>$value){
?>
                    <div class="navi-list">
                        <div class="navi-icon">
                            <img src="<?php echo $value['imageUrl']?>"/>
                        </div>
                        <div class="shop-class">
                            <a href="<?php echo $value['link']?>"><span><?php echo $value['title']?></span></a>
                        </div>
<?php
	if (count($value['items']) > 1){
?>
						<div class="shop-list">
							<div class="left-box">
								<div class="left-line"></div>
							</div>
							<div class="right-box">
								<ul>
							
<?php
		foreach($value['items'] as $child_key=>$child_value){
?>
									<li><a  href="<?php echo $child_value['link']?>"><?php echo $child_value['title']?></a></li>

<?php
		}
?>
								</ul>
							</div>
						</div>
<?php
		}
?>
					</div>
<?php
	}
?>
    </div>
</div> 
    <!--banner end-->
    <!--shop show-->
    <div class="shop-show03">
		<?php

	$count  =  count($products[$firstNum]['items'][$secondNum]);
//		for  ($i=1;  $i<=$count;  $i++) {
//		    $item_count = count($products[1]['items'][$i]);
//			echo $products[1]['items'][$i]['title'];

//		}
		$items = $products[$firstNum]['items'][$secondNum]['items'];
	    $count  =  count($items);
?>
		<div class="left-img-zone">
<?php
		for  ($i=1;  $i<=$count;  $i++) {
			if ($i%3 == 1) {
?>
			<div class="style-img box-radius">
				<a target="_blank" title="<?php echo $items[$i][1] ?>" href="<?php echo $items[$i][0]?>">
				<img src="<?php echo $items[$i][2]?>"/></a>
			</div>
<?php
			}
		}
?>
		</div>
		<div class="middle-img-zone">
<?php

		for  ($i=1;  $i<=$count;  $i++) {
			if ($i%3 == 0) {
?>

			<div class="style-img box-radius">
				<a target="_blank" title="<?php echo $items[$i][1] ?>" href="<?php echo $items[$i][0]?>">
				<img src="<?php echo $items[$i][2]?>"/></a>
			</div>
<?php
			} 
		}
?>
		</div>
		<div class="right-img-zone">
<?php
		for  ($i=1;  $i<=$count;  $i++) {
			if ($i%3 == 2) {
?>
			<div class="style-img box-radius">
				<a target="_blank" title="<?php echo $items[$i][1] ?>" href="<?php echo $items[$i][0]?>">
				<img src="<?php echo $items[$i][2]?>"/></a>
			</div>
<?php
			}
		}
	
?>
		</div>
			
			
          
    <!--shop show --end-->
</div>
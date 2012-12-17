<link href="/assets/stylesheets/default.css" type="text/css" rel="stylesheet">
<?php
require_once("products.php");
?>
<div class="main01">
                        <!--banner start-->
            <div class="banner01">
                <div class="logo">
                    <div class="logo-icon">
                        <a href="/view/front/index.php" title="时裳季" alt=""><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T2NcbaXghaXXXXXXXX_!!898384566.gif"/></a>
                    </div>
                </div>
                <div class="navigation">
                    <div class="navi-list-top"></div>
<?php
	foreach($products as $key=>$value){
?>
                    <div class="navi-list">
                        <div class="navi-icon">
                            <img src="<?php echo $value['imageUrl']?>"/>
                        </div>
                        <div class="shop-class">
                            <a href="<?php echo $value['link']?>"><span><?php echo $value['title']?></span></a>
                        </div>
                    </div>
<?php
	}
?>
                </div>
            </div> 
            <!--banner end-->
            <div class="scroll01">
                <div class="pic">
                    <img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2xlFgXXdOXXXXXXXX_!!898384566.jpg"/>
                </div>
            </div>
            <div class="clear"></div>
            <!--Start shop show list-->
            <div class="shop-show01">
                <table class="img-table" border="0" cellpadding="0" cellspacing="15">
                    <tbody>
                        <!--first floor-->
                        <tr>
                            <td><a href="/view/front/child.php?first=1&second=2" target="_blank" title="短款羽绒服"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2houIXd4cXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=1&second=4" target="_blank" title="毛衣"><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T206diXoRNXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="" target="_blank" title=""><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2h4RSXo8dXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=1&second=2" target="_blank" title="短款羽绒服"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T20UnaXgpaXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <!--second floor-->
                        <tr>
                            <td colspan="2" rowspan="2"><a href="/view/front/child.php?first=1&second=1" target="_blank" title="长款羽绒服"><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T2kFd_XiRcXXXXXXXX_!!898384566.jpg"></td>
                            <td><a href="/view/front/child.php?first=1&second=3" target="_blank" title="大衣"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2196bXbFXXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=1&second=3" target="_blank" title="大衣"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2fbSUXgVXXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="/view/front/child.php?first=1&second=3" title="大衣"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T28pjbXehaXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <!--third floor-->
                        <tr>
                            <td><a href="/view/front/child.php?first=2&second=3" target="_blank" title="毛呢短裤"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T28mOPXfNbXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="" target="_blank" title=""><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2h4RSXo8dXXXXXXXX_!!898384566.jpg"></a></td>
                            <td colspan="2"><a href="" title="" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2AWRlXd8OXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <tr>
                            <td><a href="/view/front/child.php?first=2&second=2" title="牛仔裤" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2hhu6Xd4bXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=2&second=2" target="_blank" title="牛仔裤"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2Jz_bXcxXXXXXXXXX_!!898384566.jpg"></a></td>
                            <td colspan="2"><a href="" title=""><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T29YbbXi4aXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <!--forth floor-->
                        <tr>
                            <td colspan="2"><a href="" title="" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2ZKfbXjhXXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=1&second=3" title="大衣外套" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T28gHbXXxaXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=2&second=1" title="毛呢裙" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2eRmsXbtcXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <!--fifth floor-->
                        <tr>
                            <td><a href="/view/front/child.php?first=3&second=1" title="女鞋" target="_blank"><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T2erzbXd0aXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=3&second=1" title="女鞋" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2ifYbXnRXXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=3&second=1" title="女鞋" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2fPxWXipdXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=3&second=1" title="女鞋" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2h4RSXo8dXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <!--sixth floor-->
                        <tr>
                            <td rowspan="2"><a href="/view/front/child.php?first=4&second=1" title="饰品" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2m.J1XitdXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=4&second=1" title="饰品" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2iNW_XbFbXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=4&second=1" title="饰品" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2zlTbXcFXXXXXXXXX_!!898384566.jpg"></a></td>
                            <td rowspan="2"><a href="" title="" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2YuLbXk0XXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <tr>
                            <td><a href="/view/front/child.php?first=4&second=1" title="饰品" target="_blank"><img src="http://img01.taobaocdn.com/imgextra/i1/898384566/T2IdPbXX8aXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=4&second=1" title="饰品" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2a.LaXiJaXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        
                        <!--seventh floor-->
                        <tr>
                            <td colspan="2" rowspan="2"><a href="/view/front/child.php?first=5&second=1" title="女包" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T2JtnbXfFaXXXXXXXX_!!898384566.jpg"></td>
                            <td><a href="/view/front/child.php?first=5&second=1" title="女包" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/898384566/T2h4RSXo8dXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=5&second=1" title="女包" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T23MDaXXdaXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                        <tr>
                            <td><a href="/view/front/child.php?first=5&second=1" title="女包" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/898384566/T2JXuyXdhcXXXXXXXX_!!898384566.jpg"></a></td>
                            <td><a href="/view/front/child.php?first=5&second=1" title="女包" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/898384566/T28ZXZXkNdXXXXXXXX_!!898384566.jpg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--End shop show list -->
        </div>
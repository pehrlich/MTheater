<?php
$title = 'Photo Gallery';
include('header.php');
?>


<script type="text/javascript">
    function page2() {
        document.getElementById('mainDiv').innerHTML = '<div style="float:left; margin-left:7px; margin-right: -37px;"><img onMouseOver="document.getElementById(\'arrowL\').src = \'asetts/arrowLS.gif\';" onMouseOut="document.getElementById(\'arrowL\').src = \'asetts/arrowLU.gif\';"  onclick="page1()" id="arrowL" src="asetts/arrowLU.gif"></div><a class="borderit"><img onclick="setImage2(\'mintha04\');" style="margin: 10px;" src="asetts/mintha04th.jpg" height="230"></a><a class="borderit"><img style="margin: 10px;" onclick="setImage2(\'mintha02\');" src="asetts/mintha02th.jpg" height="230"></a><a class="borderit"><img onclick="setImage2(\'mintha01\');" style="margin: 10px;" src="asetts/mintha01th.jpg" height="230"></a><a class="borderit"><img onclick="setImage2(\'mintha03\');" style="margin: 10px;" src="asetts/mintha03th.jpg" height="230"></a><br><span style="color: #999;">(four photos this page, courtesy Hans Hendriksen, hanshendriksen.net)</span><div style="clear: both;"></div>';
    }

    function page1() {
        document.getElementById('mainDiv').innerHTML = '<div style="float:right; margin-right:7px; margin-left: -37px;"><img valign="center" id="arrowR" onMouseOver="document.getElementById(\'arrowR\').src = \'asetts/arrowRS.gif\';" onMouseOut="document.getElementById(\'arrowR\').src = \'asetts/arrowRU.gif\';" onClick="page2()" src="asetts/arrowRU.gif"></div><a class="borderit"><img onclick="setImage1(101);" src="asetts/101th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(102);" src="asetts/102th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(103);" src="asetts/103th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(104);" src="asetts/104th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(105);" src="asetts/105th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(106);" src="asetts/106th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(107);" src="asetts/107th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(108);" src="asetts/108th.jpg" width="230" height="153"></a><a class="borderit"><img onclick="setImage1(109);" src="asetts/109th.jpg" width="230" height="153"></a><div style="clear: both;"></div>';
    }

    function setImage1(img) {
        var innerhtml = "<img onclick=\"page1()\" src=\"asetts/" + img + ".jpg\">";
        document.getElementById('mainDiv').innerHTML = innerhtml;
    }
    function setImage2(img) {
        var innerhtml = "<img onclick=\"page2()\" src=\"asetts/" + img + ".jpg\">";
        document.getElementById('mainDiv').innerHTML = innerhtml;
    }
</script>

<div align="center" id="mainDiv"
     style="width: 800px; padding: 2em 0px;">

    <!--1    <div style="float:right; margin-right:7px; margin-left: -37px;">
        <img valign="center" id="arrowR"
             onMouseOver="document.getElementById('arrowR').src = 'asetts/arrowRS.gif';"
             onMouseOut="document.getElementById('arrowR').src = 'asetts/arrowRU.gif';"
             onClick="page2()" src="asetts/arrowRU.gif">
    </div>-->

    <a class="borderit"><img onclick="setImage1(101);" src="asetts/101th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(102);" src="asetts/102th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(103);" src="asetts/103th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(104);" src="asetts/104th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(105);" src="asetts/105th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(106);" src="asetts/106th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(107);" src="asetts/107th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(108);" src="asetts/108th.jpg" width="230" height="153"></a>
    <a class="borderit"><img onclick="setImage1(109);" src="asetts/109th.jpg" width="230" height="153"></a>

    <div style="clear: both;"></div>
</div>


<?php
    include('footer.php');
?>


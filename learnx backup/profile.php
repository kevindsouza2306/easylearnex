<?php
include "imports/header.php";

?>
 <div class="menu">
      <h2>Categories</h2>
      <div class="nav">
        <ul>
          <li><a href="science.php">Science & technolgy</a></li>
          <li><a href="politics.php">Political</a></li>
          <li><a href="edu.php">Education</a></li>
		  <li><a href="ent.php">Entertainment</a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
      <h2>Search</h2>
      <form action="search.php" >
        <div class="search">
          <input type="text" placeholder="Search" name="search" class="text" />
          <input type="submit" value="Go" name="submit" class="searchbutton" />
          <br />
        </div>
      </form>
      <br />
      <h2>News</h2>
      <script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://zeenews.india.com/rss/world-news.xml|http://zeenews.india.com/rss/india-national-news.xml",rssmikle_frame_width: "175",rssmikle_frame_height: "500",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#FF0000",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:175px;"></div>
      <div class="ads">  </div>
      <br />
    </div>
  </div>
  <div class="lside">
    <div class="topmenu"> &nbsp;<a href="index.php">Home</a> | <a href="myques.php">My Question</a> | <a href="followed.php">Followed Question</a> | <a href="liked.php">Liked Answers</a> | </div>
    <div class="header">
      <div class="padding">
        <div class="citation"></div>
          <h1>Learnex</h1>
		     An Interactive crowdsourcing based website...
      </div>
    </div>
     <div class="main">
     	<?php
     	$querypr ="select u.* from userdetails u where  u.user_id = '".$_SESSION['u_id']."' ";
	$result=mysqli_query($con,$querypr);
	 if($row = @mysqli_fetch_assoc($result))
		 {
?>
     	<table style="font-size:24px; height:40">
<tr style="height:40px"><td><b>First Name : </td><td style="text-transform: uppercase;"> <?php echo $row['first_name']?></td></tr>
<tr style="height:40px"><td ><b>Last Name : </td><td style="text-transform: uppercase;"><?php echo $row['last_name']?></td></tr>
<tr style="height:40px"><td ><b>Occupation : </td><td ><?php echo $row['address']?></td></tr>
<tr style="height:40px"><td><b>User Name : </td><td><?php echo $row['email_id']?></td></tr>
<tr style="height:40px"><td><b>Date of Account Creation: </td><td><?php echo $row['insert_date']?></td></tr>
<tr style="height:40px"><td><b>Last Login Date : </td><td><?php echo $row['last_login']?></td></tr>
     	</table>

	
    <?php
}
include "imports/footer.php";
	  ?>

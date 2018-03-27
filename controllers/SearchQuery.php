<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mostly Fluid - Pattern</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\css\constant-styles.css">
    <script src="..\js\libs.js"></script>
    <style type="text/css">
      /*
      These are the default styles. No need to change these.
      */
      @import url(https://fonts.googleapis.com/css?family=Roboto);
      html, body {
        margin: 0;
        padding: 0;
      }

      body {
        font-family: 'Roboto', sans-serif;
				background-color: #e9ebee;
      }

      .title {
        font-size: 2.5em;
        text-align: center;
      }

      .box {
        min-height: 150px;
      }

      .header {
				background-color: #4266b3;
        color: #efefef;
      }

      .light_blue {
        background-color: #099DD9;
      }

      .green {
				background-color: #f6f7f9;
      }

      .lime {
        background-color: rgb(179, 210, 52);
      }

      .seafoam {
        background-color: rgb(77, 190, 161);
      }

      .orange {
        //background-color: #F79420;
				//background-color: #e9ebee;
      }
			.no_underline {
				text-decoration: none;
			}
			.post {
				background-color: #fff;
				margin-top: 2px;
				margin-right: 20px;
				margin-left: 20px;
				padding: 20px;
			}

			.time_location{
				font-size: 12px;
				font-weight: normal;
			}

			.post_img{
				width: 7cm;
				height: 5cm;
				background-color: #e9ebee;
			}
    </style>
    <style type="text/css">
      /*
      These are the responsive styles. Throw some breakpoints in here!
      */
      .container {
        display: flex;
        flex-wrap: wrap;
      }

      .box {
        width: 100%;
      }

      @media screen and (min-width: 350px) {
        .sponsor_logo {
					width: 50%;
				}
				.search_box{
          width: 50%;
				}

				.navigation {
					width: 100%;
					text-align: right;
				}

        .leftside_menu{
          width: 100%;
					height: 5cm;
        }
        .timeline{
          width: 100%;
        }
        .bottom{
          width: 100%;
					height: 2cm;
        }
      }
      @media screen and (min-width: 550px) {
				.sponsor_logo {
					width: 23%;
					padding-left: 2%;
				}
				.search_box{
          width: 23%;
					padding-left: 2%;
				}

				.navigation {
					width: 48%;
					text-align: right;
					padding-right: 2%;
				}

				.header{
					padding-top: 10px;
					padding-bottom: 10px;
				}

				.leftside_menu{
          width: 23%;
					height: 5cm;
					padding-left: 2%;
        }
        .timeline {
          width: 75%;
        }
        .bottom {
          width: 100%;
					height: 2cm;
        }
      }
      @media screen and (min-width: 800px) {
        .container {
          width: 1000px;
          margin-left: auto;
          margin-right: auto;
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
			<!--Sponsor logo-->
			<div class="sponsor_logo header">
				Sponsor LOGO
			</div>
      <div class="search_box header">
				<div class="search_box">
          <input type="text" placeholder="TODO: Search.." name="search">
        </div>
			</div>
      <div class="navigation header">
				<span>Home</span> | <span><a class="white" href="../index.php">Logout</a></span>
			</div>
      <div class="leftside_menu green">
				<p>News Feed</p>
				<p>Most sold books</p>
			</div>
      <div class="timeline">
        <form action="SearchQuery.php" method="get">
  				<div style="padding:20px;">
  					<b><a href="UserProfile.php">Timeline</a> <span style="margin-left: 10px;">See posts only</span></b>
            <!--
              TODO: Implement|make functional through radio button
              <input type="radio" name="all" value="all"> All
    					<input type="radio" name="rent" value="rent"> Rent
    					<input type="radio" name="buy" value="buy"> Buy
    					<input type="radio" name="sell" value="sell"> Sell
            -->
  					<input type="submit" name="Rent" value="Rent">
  					<input type="submit" name="Sell" value="Sell">
  				 </div>
          </form>
          <form action="Post.php" method="post" enctype="multipart/form-data">
            <div class="post">
              <p style="width:100px;font-weight:bold;">Make post</p>
              <textarea id="description" name="description" type="text" rows="4" cols="60" placeholder="Describe your book..." autofocus required></textarea><span id="description_required" style="color:red;"></span>
              <div style="position: relative;">
                <!-- TODO: make userfriendly: upload image
                <div style="width:90px; background-color: #e9ebee; border-radius: 25px; padding: 10px; font-weight:bold;font-size:14px;">Upload image</div>
                -->
                <div style="position: relative; left: 0px; top:8px;">
                  <input required type="radio" name="purpose" value="rent"> Rent
                  <input required type="radio" name="purpose" value="sell"> Sell
                  <!-- number   supported by HTML5: https://www.w3schools.com/html/html_form_input_types.asp-->
                  <input required type="number" name="price" placeholder="price" style="width: 50px; margin-left: 30px;">
                  <input required type="text" name="location" placeholder="location" style="width: 60px; margin-left: 5px;">

                  <input type="file" name="image" required style="margin-left: 20px;">
                </div>

                <button type="submit" name="Submit" style="position: absolute; bottom: 8px; right:16px; font-size: 14px; color:blue; padding: 5px;"><span>POST</span></button>
              </div>
            </div>
          </form>
  				<br>

      <?php
        if(isset($_GET['Rent'])) {
            rentFunc();
        }
        if(isset($_GET['Sell'])) {
            sellFunc();
        }

        function sellFunc(){
          // DEBUG: echo "sellFunc()";
          include("../config/db/DBConnect.php");

          $query = "SELECT * FROM post where purpose='sell' order by postTime desc";
          $result = mysqli_query($connection, $query);

          if(! ($result) ){
            echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
          } else {
            if( mysqli_num_rows( $result )==0 ){
              noPostFound();
            } else {
              while( $row = mysqli_fetch_array($result) ){
                showResult($row);
              }
            }
          }
        }

        function rentFunc(){
            // DEBUG: echo "rentFunc()";
            include("../config/db/DBConnect.php");

            $query = "SELECT * FROM post where purpose='rent' order by postTime desc";
            $result = mysqli_query($connection, $query);

            if(! ($result) ){
              echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
            } else {
              if( mysqli_num_rows( $result )==0 ){
                noPostFound();
              } else {
                while( $row = mysqli_fetch_array($result) ){
                  showResult($row);
                }
              }
            }
          }

          function showResult ($row){

            // DEBUG: timestamp
            // $mysqltime = $row['postTime'];
            // echo "$mysqltime...";
            // $time_elapsed = timeAgo($row['postTime']); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.
            // echo "post time: $time_elapsed" . "<br><br>";
            // echo time_elapsed_string($row['postTime']);

            // echo time_elapsed_string('2013-05-01 00:22:35') . '<br>';
            // echo time_elapsed_string('@1367367755') . '<br>'; # timestamp input
            // echo time_elapsed_string('2013-05-01 00:22:35', true) . '<br><br>';

            // $time_ago = "2018-03-22 10:50:35";
            // $time_elapsed = timeAgo($time_ago); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.
            // echo "$time_elapsed" . "<br><br>";

            echo '<div>';
              echo '<div class="post">';
                echo '<p>Purpose: '. '<span class="bold uppercase">' . "{$row['purpose']}" . '</span>, Price: <span class="bold">' . "{$row['price']}" . ' tk<p>';
                echo '<p class="time_location"><span>' . timeAgo($row['postTime']) . '<span>, <span class="uppercase">' . "{$row['location']}" . '</span><p>';
                echo '<br>';
                echo "{$row['description']}";
                echo "<div class='post_img'>";
                    echo "<img src='images/".$row['image']."' alt='Book image' width='290' height='190'>";
                echo "</div>";
                echo "<br>";
                echo '<hr>';
                echo '<p style="background-color: #e9ebee; border-radius: 25px; padding: 10px; width:40px;font-weight:bold;">CALL</p>';
              echo '</div>';
            echo '</div><br>';
          }
          function noPostFound () {
            echo '<div>';
                echo '<div class="post">';
                  echo '<p class="bold">No post found!<p>';
                echo '</div>';
            echo '</div>';
          }

          // Understanding: unix timestamp + php libs

          // UNIX time: https://www.sitepoint.com/working-with-dates-and-times/
          // https://stackoverflow.com/questions/2215354/php-date-format-when-inserting-into-datetime-in-mysql
          // http://www.richardlord.net/blog/php/dates-in-php-and-mysql.html

          // src: https://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago
          function time_elapsed_string($datetime, $full = false) {
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
          }

          //Function definition
          function timeAgo($time_ago) {
              $time_ago = strtotime($time_ago);
              $cur_time   = time();
              //echo "<br><br> $cur_time <br><br>";
              $time_elapsed   = $cur_time - $time_ago;
              $seconds    = $time_elapsed ;
              $minutes    = round($time_elapsed / 60 );
              $hours      = round($time_elapsed / 3600);
              $days       = round($time_elapsed / 86400 );
              $weeks      = round($time_elapsed / 604800);
              $months     = round($time_elapsed / 2600640 );
              $years      = round($time_elapsed / 31207680 );
              // Seconds
              if($seconds <= 60){
                  return "just now";
              }
              //Minutes
              else if($minutes <=60){
                  if($minutes==1){
                      return "one minute ago";
                  }
                  else{
                      return "$minutes minutes ago";
                  }
              }
              //Hours
              else if($hours <=24){
                  if($hours==1){
                      return "an hour ago";
                  }else{
                      return "$hours hrs ago";
                  }
              }
              //Days
              else if($days <= 7){
                  if($days==1){
                      return "yesterday";
                  }else{
                      return "$days days ago";
                  }
              }
              //Weeks
              else if($weeks <= 4.3){
                  if($weeks==1){
                      return "a week ago";
                  }else{
                      return "$weeks weeks ago";
                  }
              }
              //Months
              else if($months <=12){
                  if($months==1){
                      return "a month ago";
                  }else{
                      return "$months months ago";
                  }
              }
              //Years
              else{
                  if($years==1){
                      return "one year ago";
                  }else{
                      return "$years years ago";
                  }
              }
          }
        ?>
    </div>
    <div class="bottom">
      <div style="text-align: left; float:left; padding:10px;"><a class="no_underline" href="#">Advertising</a> <a class="no_underline" href="https://github.com/sakib-rahman-bangladesh/bookbucket/blob/master/business.md">Business</a></div>
      <div style="text-align: right; padding:10px;"><a class="no_underline" href="https://github.com/sakib-rahman-bangladesh/bookbucket/blob/master/privacy_policy.md">Privacy</a> <a class="no_underline" href="#">Terms</a> <a class="no_underline" href="#">Settings</a></div>
      <div align="center" style="padding-bottom:20px;"><span><b>Playlagom © 2018</b><span></div>
    </div>
  </div>
  </body>
</html>

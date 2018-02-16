<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mostly Fluid - Pattern</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        //background-color: #0C8542;
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

			.purpose_price {
				font-weight: bold;
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

      @media screen and (min-width: 450px) {
        .light_blue, .green{
          width: 50%;
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
        .timeline{
          width: 75%;
        }
        .bottom{
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
				<div class="search_box"><input type="text" placeholder="Search.." name="search"></div>
			</div>
      <div class="navigation header">
				<span>Home</span> | <span>Logout</span>
			</div>
      <div class="leftside_menu green">
				<p>News Feed</p>
				<p>Most sold books</p>
			</div>
      <div class="timeline">
				<div style="padding:20px;">
					Timeline view:
					<input type="radio" name="gender" value="male"> All
					<input type="radio" name="gender" value="female"> Rent
					<input type="radio" name="gender" value="other"> Buy
					<input type="radio" name="gender" value="other"> Sell
				</div>
				<div class="post">
					<p style="width:100px;font-weight:bold;">Make post</p>
					<textarea rows="4" cols="50" placeholder="Describe your book..."></textarea>
					<div style="background-color: #e9ebee; border-radius: 25px; padding: 10px; width:90px;font-weight:bold;font-size:14px;">Upload image</div>
				</div>
				<br>
				<div class="post">
					<p class="purpose_price"><span>Purpose: Sell<span>, <span>Price: 280 tk</span><p>
					<p class="time_location"><span>1 hr ago<span>, <span>Aftabnagar</span><p>
					<br>
					Book description from user...
					<div class="post_img"></div>
					<hr>
					<p style="background-color: #e9ebee; border-radius: 25px; padding: 10px; width:40px;font-weight:bold;">CALL</p>
				</div>
			</div>
      <div class="bottom">
				<div style="text-align: left; float:left; padding:10px;"><a class="no_underline" href="#">Advertising</a> <a class="no_underline" href="#">Business</a></div>
				<div style="text-align: right; padding:10px;"><a class="no_underline" href="https://github.com/sakib-rahman-bangladesh/bookbucket/blob/master/privacy_policy.md">Privacy</a> <a class="no_underline" href="#">Terms</a> <a class="no_underline" href="#">Settings</a></div>
				<div align="center" style="padding-bottom:20px;"><span>Playlagom © 2018<span></div>
			</div>
    </div>

		<?php
			if($_POST){
				header("Location:../index.php");
			}
		?>
  </body>
</html>

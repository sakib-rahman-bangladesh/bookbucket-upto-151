<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mostly Fluid - Quiz</title>
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

      .dark_blue {
        background-color: #2A457A;
        color: #efefef;
      }

      .light_blue {
        background-color: #099DD9;
      }

      .green {
        background-color: #0C8542;
      }

      .lime {
        background-color: rgb(179, 210, 52);
      }

      .seafoam {
        background-color: rgb(77, 190, 161);
      }

      .red {
        background-color: #EC1D3B;
      }

      .orange {
        background-color: #F79420;
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
				// Search and Navigation
				.dark_blue {
          width: 100%;


				.search_box {
					width: 60%;
				}

				//
        .light_blue{
          width: 25%;
        }
				.green{
          width: 75%;
        }
        .red{
          width: 33%;
        }
        .orange{
          width: 67%;
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
		<div style="text-align:center;">
			<h1>Updating Soon</h1>
			<form action="" method="post">
				<button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 20px;background: #dddddd;"><b>Logout</b></button>
			</form>
			<br><br>
		</div>

    <div class="container">
      <div class="box dark_blue">
				<div class="search_box">Search box</div>
				<div class="nav_options">Navigation Options</div>
			</div>
      <div class="box light_blue"></div>
      <div class="box green"></div>
      <div class="box red"></div>
      <div class="box orange"></div>
    </div>

		<?php
			if($_POST){
				header("Location:../index.php");
			}
		?>
  </body>
</html>

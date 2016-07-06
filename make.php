<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
   
  </head>

  <body>
<?php	
	$url = "localhost";
	$user = "root";
	$pass = "root";
	$db = "boys";
	
	// MySQLへ接続する
	$link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");

	// データベースを選択する
	$sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");

	mysql_query("set names utf8");
			
	$sql = "SELECT * FROM article where article_id = 1";
	$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました1。<br />SQL:".$sql);
	
	//結果セットの行数を取得する
	$row = mysql_fetch_assoc($result);	
	//結果保持用メモリを開放する
	mysql_free_result($result);
	
	
	print_r($row);
?>
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Boys Channel</h1>
        </div>
        <h2>トピックを投稿する</h2>
        <div class="bs-docs-example">
            <form id="form1" method="post" action="" enctype="multipart/form-data">
<ul>
<li>
<label for="title" class="tbold">タイトル</label>
<input type="text" name="title" id="title" placeholder="必須入力" value="" class="f_text">
</li>
<li>
<label for="name" class="tbold">名前（空白でも可）</label>
<input type="text" name="name" id="name" placeholder="空白でもOK" value="" class="f_text">
</li>
<li>
<label for="text" class="tbold">本文</label>
<textarea name="text" id="text" placeholder="必須入力" class="f_txtarea"></textarea>
</li>
<li>
<label for="add_pic" class="tbold">画像アップロード（1MBまで可）</label>
<input type="file" name="add_pic" id="add_pic">
</li>
<li class="mt20">
<input type="checkbox" name="id_show_flag" id="id_show_flag" value="1" class="f_checkbox"><label for="id_show_flag" id="id_show_flag_label">IDを表示する（なりすましが防止できます）</label>
</li>
</ul>
<input type="hidden" name="is_next" value="0">
<input type="hidden" name="is_post" value="1">

<p style="color:#FF6371;margin:20px 0 20px;font-size:13px;"><span style="font-weight: bold;">※トピック画像の添付をお願いします</span><br>
トピックを投稿いただく際には、トピック内容に合った画像をアップロードいただくか、画像のURLを本文に入力してくださいませ。その画像がトピックのトップ画像（サムネイル）として表示されます。</p>
<input type="submit" value="トピックを投稿する">
</form>
        
        
      </div>
    	  
    </div>
    
    
    
    
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
  </body>
</html>






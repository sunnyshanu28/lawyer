<!-- <!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Reading rss feeds using PHP</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
    <?php

        $url = "https://caselaw.in/feed/";
        

        $invalidurl = false;
        if(@simplexml_load_file($url)){
            $feeds = simplexml_load_file($url);
        }else{
            $invalidurl = true;
            echo "<h2>Invalid RSS feed URL.</h2>";
        }


        $i=0;
        if(!empty($feeds)){


            $site = $feeds->channel->title;
            $sitelink = $feeds->channel->link;

            echo "<h1>".$site."</h1>";
            foreach ($feeds->channel->item as $item) {

                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $postDate = $item->pubDate;
                $pubDate = date('D, d M Y',strtotime($postDate));


                if($i>=5) break;
        ?>
                <div class="post">
                    <div class="post-head">
                        <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <span><?php echo $pubDate; ?></span>
                    </div>
                    <div class="post-content">
                        <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Read more</a>
                    </div>
                </div>

                <?php
                $i++;
            }
        }else{
            if(!$invalidurl){
                echo "<h2>No item found</h2>";
            }
        }
    ?>
        </div>
    </body>
</html>

 -->
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://caselaw.in/feed/");//XML page URL
 
 $content = $domOBJ- >getElementsByTagName("item");
 
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   echo "$title :: $link";
 }
?>
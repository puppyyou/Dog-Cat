<head>
<title>A dog day</title>
<link href="style.css" rel="stylesheet" type="text/css">

<style type='text/css'>

</style>

</head>

<body>

    <div id='words'>You love watching TV;<br />
        So do I, so do I.
        <HR size="1" width="96%" color="#888888">    
        </div>
        
        <div id ='menu'>
            <ul>
           <li class='section-title'>
            </br></br></br>
                W O O F !</br>
                 W O O F !</br>
                 W O O F !
             </br >
           </li>
          <!--  <li><a href='http://www.smashingmagazine.com/'> I  </a></li>
           <li><a href='http://www.smashingmagazine.com/' onclick="do_click();"> II </a></li> -->
           </ul>
          </div> 
        
        <!-- close menu -->

            <div id="icon">
                <a href="http://leslieslin.com/web_final/index_1.php">
                <img src="http://leslieslin.com/web_final/icon.png"></a>
                
            </div>

    <div id='container'>
    <div class="insta-item"> 
<?php
    
    require_once 'instagram.class.php';

    $instagram = new Instagram(array(
      'apiKey'      => '266b285a2d05412fbeb7e767e65bd7b1',
      'apiSecret'   => 'ded724044f3a42e2b0691b1b6491f776',
      'apiCallback' => 'http://leslieslin.com'
    ));

    $tag = 'dogwatchingtv';
    // Get latest photos according to #hashtag keyword
    $media = $instagram->getTagMedia($tag);

    // Set number of photos to show
    $limit = 20;

    // Show results
    // Using for loop will cause error if there are less photos than the limit
    foreach(array_slice($media->data, 0, $limit) as $data)
    {
        #print('<pre>'); print_r($data); print('</pre>');
        ?>
        
        
            <a href="<?php echo $data->link; ?>" target="_blank" class="image">
            <img src="<?php echo $data->images->standard_resolution->url; ?>" height="250px" width="250px"alt="Pic" />
            </a>
        <?php } ?>
    </div>
    </div>
</body>

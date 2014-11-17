<head>
<title>A dog day</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type='text/css'>
#img-container { width: 14900px; }
#img-container #text { float: left; width: 325px; }
#img-container #text p { width: 250px; }
.image{float: left;}
.image img {}
</style>
</head>

<body>
    <div id='img-container'>
        <div id='text'><p>You love watching TV;<br />
        So do I, so do I.</div>
<?php
    
    require_once 'instagram.class.php';

    $instagram = new Instagram(array(
      'apiKey'      => '266b285a2d05412fbeb7e767e65bd7b1',
      'apiSecret'   => 'ded724044f3a42e2b0691b1b6491f776',
      'apiCallback' => 'http://leslieslin.com'
    ));

    $tag = 'westminsterdogshow';
    // Get latest photos according to #hashtag keyword
    $media = $instagram->getTagMedia($tag);

    // Set number of photos to show
    $limit = 10;

    // Show results
    // Using for loop will cause error if there are less photos than the limit
    foreach(array_slice($media->data, 0, $limit) as $data)
    {
        #print('<pre>'); print_r($data); print('</pre>');
        ?>
        
        <!-- <div class="insta-item"> -->
            <a href="<?php echo $data->link; ?>" target="_blank" class="image">
            <img src="<?php echo $data->images->standard_resolution->url; ?>" height="460px" width="460px" alt="Pic" />
            </a>
        <?php } ?>
    </div>
</body>

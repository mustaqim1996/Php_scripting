<?php
    $the_site = "https://www.amazon.com/ref=nav_logo"; //put the url of any website that containes images
    $the_tag = "a"; //a | div | span 
    $the_class = "a-link-normal aok-inline-block"; //the div class that contains the images

    $html = file_get_contents($the_site);
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    foreach ($xpath->query('//'.$the_tag.'[contains(@class,"'.$the_class.'")]/img') as $item) {

        $img_src =  $item->getAttribute('src');
        // print $img_src."\n"; ?>
		<img src="<?php echo $img_src ?>">
<?php
    }
?>



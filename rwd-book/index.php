<?php

include('list.php');

function where_are_we($location){
    global $list;
    echo $list[$location]['name'].' &middot; Teaching web at Manchester Metropolitan University';
    return $list[$location]['name'];
    
}

function output_list( $book,$location){
    global $list;
    // echo $book;
    // echo $location;
    
    $i=1;
        
    // if($book == 1){echo '<ul class="booking"><li>Book 1</li><li><a href="?book=2&amp;location=12">Book 2</a></li></ul>';}
    // if($book == 2){echo '<ul class="booking"><li><a href="?book=1&amp;location=0">Book 1</a></li><li>Book 2</a></li></ul>';
    // $i=13;}
    
    echo '<ol>';
    
    
    
    foreach($list as $l){
        if($l['book']==$book){
        if(($i-1)==$location){echo '<li class="current"><span class="number">'.$i.'</span><span>'.$l['name'].'</span></li>';}else{
        echo '<li><span class="number">'.$i.'</span><a href="index.php?book='.$l['book'].'&amp;location='.($i-1).'">'.$l['name'].'</a></li>';}
        
    $i++;
        }
    }
    echo '</ol>';
}

$book = 1;
if(isset($_GET['book'])&&$_GET['book']!==""){
    $book = $_GET['book'];
    $book = $book * 1;
}

$location = 0;
if(isset($_GET['location'])&&$_GET['location']!==""){
$location = $_GET['location'];
$location = $location*1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- https://developer.mozilla.org/en-US/docs/Web/Progressive_web_apps/Add_to_home_screen -->


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $locate = where_are_we($location); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,700;1,400&family=Inter:wght@100;400;700&family=Source+Serif+Pro:ital,wght@0,400;0,700;1,400;1,700&family=IBM+Plex+Mono:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../book-github-viewer/css/g.css?refresh=<?php echo time(); ?>" />
    
    <!-- Primary Meta Tags -->

<meta name="title" content="<?php echo $locate; ?>">
<meta name="description" content="A lesson provided by the iSchool team at Manchester Metropolitan University ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="<?php echo $locate; ?>">
<meta property="og:description" content="A lesson provided by the iSchool team at Manchester Metropolitan University ">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $locate; ?>">
<meta property="twitter:description" content="A lesson provided by the iSchool team at Manchester Metropolitan University ">
<meta property="twitter:image" content="">


</head>
<body>
<div class="jumpnav"><a href="#nav">menu</a></div>
   <nav class="index-nav" id="nav"><?php output_list($book, $location); ?></nav>
   
   
   <main class="content rwd-book" id="top"> 
<h2 class="book-location">Responsive Web Design<?php //echo $book; ?></h2>
<?php

include('../book-github-viewer/php/Parsedown.php');
include('../book-github-viewer/php/ParsedownExtra.php');



$content = implode('', file($list[$location]['url']));

//echo $content;

$Parsedown = new Parsedown();

//echo str_replace('<', '&lt;', $content);

$content = str_replace('src="/mmu-webdesign', 'src="https://raw.githubusercontent.com/mmu-webdesign', $content);

//src="media/01-heading.png"

//https://raw.githubusercontent.com/mmu-webdesign/Level4-web-term-1/master/HTML/html01/media/trent-walton.png

$content = str_replace('src="media/', 'src="https://raw.githubusercontent.com/mmu-webdesign/Level4-web-term-1/master/HTML/html0'.$book.'/media/', $content);

//https://github.com/mmu-webdesign/Level4-web-term-1/blob/master/HTML/media/01-no-structure.png

/* 
<!-- div class="exercise" -->
<!-- end div -->
*/

$content =  $Parsedown->text($content);

$content = str_replace('<!-- div class="exercise" -->', '<div class="exercise">', $content);
$content = str_replace('<!-- end div -->', '</div>', $content);

$content = preg_replace('/<h2>(Task [0-9])[- ]*/i', '<h2><span class="task">\1</span>', $content);

echo $content;


?>
<nav class="within-docs">
<ul><li><a href="index.php?location=<?php echo ($location-1); ?>">Previous</a></li>
<?php if($location<9){ ?>
<li><a href="index.php?location=<?php echo ($location+1); ?>">Next</a></li></ul>
<?php } ?>
</nav>
</main>
<footer class="page-footer">
<p><a href="https://github.com/mmu-webdesign/l4-IWD-web-block">View this content on GitHub</a> &middot; <a href="mailto:webteaching@mmu.ac.uk">webteaching@mmu.ac.uk</a> &middot; <a href="#top">Back to top</a></p>
</footer>
<script>
var tags = document.getElementsByTagName("h2");
for (var i=0, h2; h2 =  tags[i]; i++) {
    
    var modify_heading = h2.innerHTML;
    modify_heading = modify_heading.replace('<span class="task">', '');
    modify_heading = modify_heading.replace('</span>', ' - ');
    modify_heading = modify_heading.replaceAll(" ", "-");

    
  h2.id = modify_heading;
}
</script>
</body>
</html>
<?php

// Styles
// - Intro (Full width with text over image)
// - 50% with text over image
// - 50% with image and text split half
// - 25% with image and text split half
//

function add_tile( $obj ) {
  if(!$obj['style']) {
  	$elm = '<div class="'.$obj['class'].'">';
  	$elm .= '<div class="sec-details '.$obj['textClass'].'">';
  	$elm .= $obj['title'] ? ('<h3>'.$obj['title'].'</h3>') : '';
  	$elm .= $obj['content'] ? $obj['content'] : '';
  	$elm .= $obj['btnText'] ? '<div><a class="btn btn-primary-outline '.$obj['color'].'" href="'.$obj['href'].'">'.$obj['btnText'].'</a></div>' : '';
  	$elm .= '</div>';
  	$elm .= $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
  	$elm .= '</div>';

    echo $elm;
  }

  // Intro (fill-width)
  if($obj['style'] === 'full-width') {
    $elm = '<div class="container-fluid intro-container intro '.$obj['class'].'" >';
    $elm .= $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
    $elm .= $obj['content'] ? '<div class="intro-content intro-hed"><h1>'.$obj['content'].'</h1></div>' : '';
    $elm .= '</div>';

    echo $elm;
  }

  // half-width with text over image
  if($obj['style'] === 'sec-50') {
    $elmStart = '<div class="section-tile col-md-6 sec-50 '.$obj['class'].' '.$obj['color'].'" >';

    $content = '';
    if($obj['content'] || $obj['content'] !== '') {
      $content .= '<div class="sec-details '.$obj['textClass'].'">';
      $content .= $obj['title'] ? ('<h3>'.$obj['title'].'</h3>') : '';
      $content .= $obj['content'] ? $obj['content'] : '';
      $content .= $obj['btnText'] ? '<div class="sec-button"><a class="btn btn-primary-outline '.$obj['color'].'" href="'.$obj['href'].'">'.$obj['btnText'].'</a></div>' : '';
      $content .= '</div>';
    }

    $image = $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
    $elmEnd = '</div>';

    echo $elmStart.$content.$image.$elmEnd;
  }

  // half page width with further divided half with image and text.
  if($obj['style'] === 'sec-50-50') {
    $elm = '<div class="col-md-6 sec-50-50 '.$obj['class'].'" >';
    $elm .= '<div class="col-1 col-md-6">';
    $elm .= $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
    $elm .= '</div>';
    $elm .= '<div class="col-2 col-md-6">';
    $elm .= $obj['title'] ? ('<h3>'.$obj['title'].'</h3>') : '';
    $elm .= $obj['content'] ? $obj['content'] : '';
    $elm .= $obj['btnText'] ? '<div class="sec-button"><a class="btn btn-primary-outline '.$obj['color'].'" href="'.$obj['href'].'">'.$obj['btnText'].'</a></div>' : '';
    $elm .= '</div>';
    $elm .= '</div>';

    echo $elm;
  }

  // half page width with further divided half with image and text.
  if($obj['style'] === 'sec-25-50') {
    $elm = '<div class="sec-25-50 '.$obj['class'].' '.$obj['color'].'" >';
    $elm .= '<div class="col-1 col-md-6">';
    $elm .= $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
    $elm .= '</div>';
    $elm .= '<div class="col-2 sec-details col-md-6 '.$obj['textClass'].'">';
    $elm .= $obj['title'] ? ('<h3>'.$obj['title'].'</h3>') : '';
    $elm .= $obj['content'] ? $obj['content'] : '';
    $elm .= $obj['btnText'] ? '<div class="sec-button"><a class="btn btn-primary-outline '.$obj['color'].'" href="'.$obj['href'].'">'.$obj['btnText'].'</a></div>' : '';
    $elm .= '</div>';
    $elm .= '</div>';

    echo $elm;
  }
}

?>

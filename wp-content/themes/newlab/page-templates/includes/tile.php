<?php

function add_tile( $obj ) {
	$start = '<div class="'.$obj['class'].'">';
	$start .= '<div class="sec-details '.$obj['textClass'].'">';
	$header = $obj['title'] ? ('<h3>'.$obj['title'].'</h3>') : '';
	$content = $obj['content'] ? $obj['content'] : '';
	$button = $obj['btnText'] ? '<div><a class="btn btn-primary-outline '.$obj['color'].'" href="'.$obj['href'].'">'.$obj['btnText'].'</a></div>' : '';
	$end = '</div>';
	$end .= $obj['image'] ? '<img alt="" src="'.$obj['image'].'">' : '';
	$end .= '</div>';

	echo $start.$header.$content.$button.$end;

    // $title = get_the_archive_title();

    // if ( ! empty( $title ) ) {
    //     echo $before . $title . $after;
    // }
}

?>

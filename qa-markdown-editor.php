<?php
/*
	Question2Answer Markdown editor plugin, v1.0
	License: http://www.gnu.org/licenses/gpl.html
*/

class qa_markdown_editor
{
	var $urltoroot;

	function load_module($directory, $urltoroot)
	{
		$this->urltoroot = $urltoroot;
	}

	function calc_quality($content, $format)
	{
		if ($format=='markdown')
			return 1.0;
		else
			return 0.8;
	}

	function get_field(&$qa_content, $content, $format, $fieldname, $rows, $autofocus)
	{
		if ( $autofocus )
			$qa_content['script_onloads'][] = ' document.getElementById("wmd-input").focus(); ';

		$html = '';
		$html .= '<div id="wmd-button-bar"></div> ';
		$html .= '<textarea name="'.$fieldname.'" id="wmd-input">'.$content.'</textarea> ';
		$html .= '<div id="wmd-preview"></div> ';
		$html .= '<style>.wmd-button { background-image: url("'.$this->urltoroot.'wmd/wmd-buttons.png"); }</style>';

// 		$html .= '<script type="text/javascript" src="'.$this->urltoroot.'wmd/showdown.js"></script>';
//     	$html .= '<script type="text/javascript" src="'.$this->urltoroot.'wmd/wmd.js"></script>';

		// comment out this script and uncomment the above two lines to use the non-minified code
    	$html .= '<script type="text/javascript" src="'.$this->urltoroot.'wmd/markdown.min.js"></script>';

		return array( 'type'=>'custom', 'html'=>$html );
	}

	function read_post($fieldname)
	{
		$html=qa_post_text($fieldname);

		return array(
			'format' => 'markdown',
			'content' => $html
		);
	}

}


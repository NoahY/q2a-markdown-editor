<?php

	class qa_html_theme_layer extends qa_html_theme_base {

		function head_custom() {
			qa_html_theme_base::head_custom();
			$this->output('<style>');
			include(QA_HTML_THEME_LAYER_DIRECTORY.'pagedown/sample.css');
			$this->output('</style>');
			if(qa_opt('markdown_css_enable')) {
				$this->output('<style>');
				include(QA_HTML_THEME_LAYER_DIRECTORY.'css/'.qa_opt('markdown_css_style'));
				$this->output('</style>');
				$this->output('<script type="text/javascript">');
				include(QA_HTML_THEME_LAYER_DIRECTORY.'highlight.js');
				$this->output('</script>');
				$this->output('<script type="text/javascript">
				$("document").ready(function(){ 
					//hljs.selected_languages = hljs.LANGUAGES;
					$("textarea").each(function(){
						$(this).keypress(function(){
							window.clearTimeout(hljs.Timeout);
							hljs.Timeout = window.setTimeout(function() {
								hljs.initHighlighting.called = false;
								hljs.initHighlighting();
								
							},200);
						});
					});
					window.setTimeout(function() {
						hljs.initHighlighting.called = false;
						hljs.initHighlighting();
					},200);
				});
				</script>');
			}
		}
		
	}


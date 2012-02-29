<?php

/*
	Plugin Name: Markdown Editor
	Plugin URI:
	Plugin Description: Markdown plugin for simple text-based markup
	Plugin Version: 1.0
	Plugin Date: 2011-07-15
	Plugin Author: Scott Vivian, adapted by NoahY
	Plugin Author URI: http://www.codelair.co.uk/
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.3NY2

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
*/

qa_register_plugin_module('module', 'qa-markdown-admin.php', 'qa_markdown_admin', 'Markdown Admin');
qa_register_plugin_module('editor', 'qa-markdown-editor.php', 'qa_markdown_editor', 'Markdown Editor');
qa_register_plugin_module('viewer', 'qa-markdown-viewer.php', 'qa_markdown_viewer', 'Markdown Viewer');
qa_register_plugin_layer('qa-markdown-layer.php', 'Markdown Layer');	


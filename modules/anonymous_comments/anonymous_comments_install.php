<?php	
	$module_info['name'] = 'Anonymous Comments';
	$module_info['desc'] = 'Allows any user to submit a comment without registering an account.';
	$module_info['version'] = 0.1;
	$module_info['update_url'] = '';
	$module_info['homepage_url'] = 'https://www.plikli.com/mods/anonymous_comments.zip';
	$module_info['requires'][] = array('anonymous', 0.1, 'Anonymous Mode', '');
	//$module_info['requires'][] = array('hc', 1, 'Human Check', '');
	
	//$module_info['db_sql'][] = "INSERT INTO ".table_users." (user_login,user_level,user_modification,user_date,user_pass,user_email,user_lastlogin) VALUES ('anonymous','normal',NOW(),NOW(),'1e41c3f5a260b83dd316809b221f581cdbba8c1489e6d5896', 'anonymous@plikli.com',NOW())";
	$module_info['db_sql'][] = "ALTER TABLE ".table_comments." ADD `comment_anonymous_username` VARCHAR( 32 ) NOT NULL" ;
	$module_info['db_sql'][] = "ALTER TABLE ".table_comments." ADD `comment_anonymous_email` VARCHAR( 128 ) NOT NULL" ;
	$module_info['db_sql'][] = "ALTER TABLE ".table_comments." ADD `comment_anonymous_website` VARCHAR( 128 ) NOT NULL" ;

?>
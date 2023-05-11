//halaman htaccess default
<IfModule authz_core_module>
    Require all denied
</IfModule>
<IfModule !authz_core_module>
    Deny from all
</IfModule>

pengaturan default dan database

tampilan session dan datatime di controller login

'username' => $_username,
			'password' => MD5($_password),
			'email' => $_email,
			'created_at' => date_create('now')->format('Y-m-d H:i:s'),
			'last_login' => date_create('now')->format('Y-m-d H:i:s'),
			'status' => $_status,
			'role' => $_role

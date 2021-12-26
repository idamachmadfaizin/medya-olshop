<?php

class Middleware_model extends CI_Model
{
	function auth($isLoginRedirect = null)
	{
		if (empty($this->session->id_customer)) return redirect('login');
	}
	
	function auth_admin($isLoginRedirect = 'admin/dashboard')
	{
		if (empty($this->session->id_admin)) return redirect('admin/login');
	}
}

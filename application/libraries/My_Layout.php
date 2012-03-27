<?php

class MY_Layout {

    public $header = 'header';
    public $footer = 'footer';
    
    function __construct()
	{
		$this->ci =& get_instance();
		
	}

    public function content($views = '', $data = '')
    {
        // load header
        if ($this->header)
        {
            $this->ci->load->view($this->header, $data);
            $data = '';
        }

        // load content, can be more than one views
        if (is_array($views))
        {
            foreach ($views as $view)
            {
                $this->ci->load->view($view, $data);
                $data = '';
            }
        }
        else
        {
            $this->ci->load->view($views, $data);
        }

        // load footer
        if ($this->footer)
        {
            $this->ci->load->view($this->footer);
        }
    }
    
    public function dashboard_content($views = '', $data = '')
    {
        // load header
        if ($this->header)
        {
            $this->ci->load->view($this->header, $data);
            $data = '';
        }

        // load content, can be more than one views
        if (is_array($views))
        {
            foreach ($views as $view)
            {
                $this->ci->load->view($view, $data);
                $data = '';
            }
        }
        else
        {
            $this->ci->load->view($views, $data);
        }

        // load footer
        if ($this->footer)
        {
            $this->ci->load->view($this->footer);
        }
    }
    
}

?>
<!-- Footer -->
<footer class="main">
	&copy; 2018 - <?php echo date('Y'); ?><strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> | Version 5.5</strong>
    Visit Our Website
	<a href="https://daviruzsystems.com"
    	target="_blank">Da-viruz Systems</a>
</footer>

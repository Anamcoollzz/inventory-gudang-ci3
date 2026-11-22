<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pdf {

	public $param;
	public $pdf;

	public function __construct($param = array())
	{
		$defaultConfig = array(
			'mode'          => 'utf-8',
			'format'        => 'A5',
			'margin_left'   => 10,
			'margin_right'  => 10,
			'margin_top'    => 10,
			'margin_bottom' => 10,
			'margin_header' => 6,
			'margin_footer' => 3,
		);

		$config = is_array($param) ? array_merge($defaultConfig, $param) : $defaultConfig;
		$this->param = $config;
		$this->pdf = new \Mpdf\Mpdf($config);
	}
}

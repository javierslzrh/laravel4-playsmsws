<?php namespace Javierslzrh\Playsmsws;

class Playsmsws {

	private $operation;
	private $config;
	private $webservicesUrl;
	private $to;
	private $msg;
	private $schedule;
	private $response;
	public $data;
	public $error;
	public $errorMsg;
	public $status;
	

	public function __construct($config){
		$this->config = $config;
		$this->data = null;
	}

	public function scheduleSms($to, $msg, $schedule){
		$this->operation = 'pv';
		$this->to = $to;
		$this->msg = $msg;
		$this->schedule = $schedule;
		$this->fetch();
		return;
	}

	public function sendSms($to, $msg) {
		$this->operation = 'pv';
		$this->to = $to;
		$this->msg = $msg;
		$this->fetch();
		return;
	}

	private function buildWebservicesUrl() {

		$wsurl = $this->config['url'].'&format=json';

		if ($this->config['token']) {
			$wsurl .= '&h=' . $this->config['token'];
		}

		if ($this->config['username']) {
			$wsurl .= '&u=' . $this->config['username'];
		}

		if ($this->operation) {
			$wsurl .= '&op=' . $this->operation;
		}

		if ($this->to) {
			$wsurl .= '&to=' . urlencode($this->to);
		}

		if ($this->msg) {
			$wsurl .= '&msg=' . urlencode($this->msg);
		}

		if ($this->schedule) {
			$wsurl .= '&schedule=' . urlencode($this->schedule);
		}

		$this->webservicesUrl = $wsurl;
	}

	private function fetch() {
		$this->buildWebservicesUrl();
		$this->response = @file_get_contents($this->webservicesUrl);
	}
}

?>
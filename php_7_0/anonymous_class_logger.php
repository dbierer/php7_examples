<?php
// anonymous class: logger example

class Test
{
	protected $logger;
	protected $logFile;
	public function setLogFile($logFile)
	{
		$this->logFile = $logFile;
	}
	public function getLogger()
	{
		if (!$this->logger) {
			$this->logger = $this->buildLogger($this->logFile);
		}
		return $this->logger;
	}
	public function buildLogger($logFile)
	{
		return new class ($logFile) {
			protected $logFile;
			public function __construct($logFile)
			{
				$this->logFile = $logFile;
			}
			public function log($message)
			{
				file_put_contents($this->logFile, $message, FILE_APPEND);
			}
			public function readLog()
			{
				return file_get_contents($this->logFile);
			}
		};
	}
}

$test = new Test();
$test->setLogFile(__DIR__ . '/test.log');
$test->getLogger()->log('TEST1: ' . date('Y-m-d H:i:s'));

$logger = $test->getLogger();
$logger->log('TEST2: ' . date('Y-m-d H:i:s'));

echo $logger->readLog();

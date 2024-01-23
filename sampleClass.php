<?php
	class sampleClass
	{
		private int sampleAttribute;

		public function __construct (int $sampleAttribute)
		{
			$this->setSampleAttribute ($sampleAttribute);
		}

		public function getSampleAttribute (): int
		{
			return ($this->sampleAttribute);
		}

		public function setSampleAttribute (int $newSampleAttribute): void
		{
			$this->sampleAttribute=$newSampleAttribute;
		}
	}
?>
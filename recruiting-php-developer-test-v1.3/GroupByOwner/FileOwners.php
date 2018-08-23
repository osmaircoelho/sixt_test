<?php

class FileOwners {
	/**
	 * @param array $files
	 *
	 * @return array
	 */
	public static function groupByOwners( $files ) {
		$data = [];
		foreach ( $files as $key => $value ) {
			$data[ $value ][] = $key;
		}

		return $data;
	}
}

$files = array(
	"Input.txt"  => "Randy",
	"Code.py"    => "Stan",
	"Output.txt" => "Randy",
);

FileOwners::groupByOwners( $files );
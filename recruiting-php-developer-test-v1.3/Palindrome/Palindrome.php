<?php

class Palindrome {
	/**
	 * @param string $word
	 *
	 * @return bool
	 */
	public static function isPalindrome( $word ): String {

		$wordNoSpace = str_replace(' ', "", $word );

		$newWord = strtolower($wordNoSpace);

		$reverse = strrev(  $newWord );

		if ( $reverse === $newWord ) {
			$strPalindrome = ' This word is Palindrome = ' . $word;
		} else {
			$strPalindrome = ' This word is not Palindrome = ' . $word;
		}

		return (string) $strPalindrome;
	}

}

print Palindrome::isPalindrome('Deleveled');
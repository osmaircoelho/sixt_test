<?php
/*
@autor osmair.coelho@gmail.com
linkedin http://linkedin.com/in/osmaircoelho
*/

/**
 * leaf data structure
 */
class BinaryNode {

	/** @var mixed null */
	public $value = null;
	/** @var BinaryNode null */
	public $left = null;
	/** @var BinaryNode null */
	public $right = null;

	/**
	 * @param mixed $value
	 */
	public function __construct( $value ) {
		$this->value = $value;
	}
}

class BinaryTree {
	/**
	 * @param BinaryNode $root
	 *
	 * @return BinaryNode
	 */
	public static function invert( $root ): BinaryNode {

		if ( ! isset( $root ) ) {
			return $root;
		}

		$tempLeftNode = $root->left;

		$root->left  = $root->right;
		$root->right = $tempLeftNode;

		return $root;

	}
}

$root = new BinaryNode( 1 );

$root->left  = new BinaryNode( 2 );
$root->right = new BinaryNode( 3 );

$root->left->left  = new BinaryNode( 4 );
$root->left->right = new BinaryNode( 5 );

$root->right->left  = new BinaryNode( 6 );
$root->right->right = new BinaryNode( 7 );

print "============================================ \n";
print "Bynary Tree Before \n";
print "============================================ \n";
print_r($root);
print "============================================ \n";
print "Bynary Tree After \n";
print "============================================ \n";
print_r( BinaryTree::invert( $root ) );






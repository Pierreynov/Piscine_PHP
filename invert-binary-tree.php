<?php
function invertTree (BinaryNode $node): BinaryNode
{
    if (is_null($node->left) and is_null($node->right)){
        return $node;
    }
    if (is_null($node->left)){
        $node->left=invertTree($node->right); 
        $node->right=null;
    }elseif (is_null($node->right)){
        $node->right=invertTree($node->left);
        $node->left=null;
    }else{
        $temp = $node->right;
        $node->right=invertTree($node->left);
        $node->left=invertTree($temp);
    }
    return $node;
}
?>
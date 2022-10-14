<?php 
// function twoSum($nums, $target) {
//     for ($i=0; $i < count($nums); $i++) { 
//         for ($j=$i+1; $j < count($nums); $j++) { 
//             if($nums[$i] + $nums[$j] == $target) {
//                 return [$i,$j];
//             } 
//         }
//     }   
// }
// print_r(twoSum([0,7,11,0,3], 0));

// function addTwoNumbers($l1, $l2) {
        
        // $x = "";
        // $y = "";
        
        // for ($j = count($l2); $j >= 0 ; $j--) { 
        //     $y = $y.$l2[$j];
        // }
        // $z = strrev(intval(implode(',',$l1))) + strrev(intval(implode($l2)));
        // print_r(str_split(strrev($z)));
        // echo intval(implode('',$l1));
// }

// echo strrev(intval(implode($l1))) + strrev(intval(implode($l2)));
class ListNode {
    public $data;
    public $next;

    function __construct() {
        // $this->data = $data;
        $this->next = NULL;
    }

}

function addTwoNumbers($l1, $l2) {
    $remain = 0;
   $result = new ListNode(0);  // set as a dummy LinkedList
   $cur_node = $result;
   while($l1 != null || $l2 != null || $remain != 0) {
       
       $v1 = ($l1)? $l1->val : 0;
       $v2 = ($l2)? $l2->val : 0;
       
       $value = $v1 + $v2 + $remain;
       $remain = intval($value / 10);
       $value %= 10;

       $cur_node->next = new ListNode($value);
       $cur_node = $cur_node->next;

       // if this is a linkedlist, get next. if already a null, keep it null
       $l1 = ($l1 != null)? $l1->next : null;
       $l2 = ($l2 != null)? $l2->next : null;
       
   }
   
   return $result->next;
}
$l1 = [2,4,3];
$l2 = [5,6,4];
echo addTwoNumbers($l1, $l2);
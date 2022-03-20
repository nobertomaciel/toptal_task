This is a demo task.

Write a function:

    function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

        N is an integer within the range [1..100,000];
        each element of array A is an integer within the range [−1,000,000..1,000,000].



// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $a = $A;
    while(true){
        $vs = $a[0]+1;
        if(in_array($vs,$A)){
            array_shift($a);
        }
        else{
            if(count($a)>1){
                if($vs >= max($A)){
                    array_shift($a);
                }
                else{
                    break;
                }
            }
            else{
                break;
            }
        }
    }
    return ($vs > 0 ? $vs : 1);
}

<?php

namespace GroupUse1;
const CONST1 = "CONST1";
const CONST2 = "CONST2";

class C1 {
}
class C2 {
}
class C3 {
}
function test1() {
}
function test2() {
}

namespace GroupUse2;

use GroupUse1\{
    C1,
    C2,    C3
};
use function GroupUse1\{
    test1,
    test2
};
use const GroupUse1\{
    CONST1,
    /*FORMAT_START*/CONST2/*FORMAT_END*/
};

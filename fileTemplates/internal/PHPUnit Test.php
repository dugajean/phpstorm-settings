<?php

declare(strict_types=1);

#if (${NAMESPACE})
namespace ${NAMESPACE};

#end
class ${NAME} extends#if(${NAMESPACE}) \PHPUnit_Framework_TestCase #else PHPUnit_Framework_TestCase #end{

}

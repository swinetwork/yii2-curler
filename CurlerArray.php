<?php

namespace swinetwork\Curler;

class CurlerArray implements \ArrayAccess, \Countable, \Iterator
{

    private $data = array();
    private $keys = array();

}
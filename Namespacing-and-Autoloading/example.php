<?php

/*

In procedural php programming we do like below to include classes in our file.
but this method is kind of big pain because it takes time to get it setup
and to follow a not a good practice.
It will be good if all classes autoload :)
So here concept of Autoloading introduced.

Here comes the use of *composer* it auto loads the dependencies

require 'src/Business.php';
require 'src/Person.php';
require 'src/Staff.php';
*/

use Green\Users\Person;
use Green\Staff;
use Green\Business;

$navdeep = new Person('Navdeep Singh');

$staff = new Staff([$navdeep]);

$nswebstudio = new Business($staff);

$nswebstudio->hire(new Person('Sarabjit Kaur'));

var_dump($nswebstudio->getStaffMembers());

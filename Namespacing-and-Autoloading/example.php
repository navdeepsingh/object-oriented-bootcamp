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
require 'vendor/autoload.php';


$navdeep = new Green\Person('Navdeep Singh');

$staff = new Green\Staff([$navdeep]);

$nswebstudio = new Green\Business($staff);

$nswebstudio->hire(new Green\Person('Sarabjit Kaur'));

var_dump($nswebstudio->getStaffMembers());
?>
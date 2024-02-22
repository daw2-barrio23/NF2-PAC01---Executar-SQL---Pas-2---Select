<?php

        require("class.user.select.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO, 3);

        print "ID: " . $objUser->getID() . "<br />";
        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Password is " . $objUser->getPassword() . "<br />";
        print "Email Address is " . $objUser->getEmailAddress() . "<br/>";

        $objUser2 = new User($objPDO, 1);

        print "ID: " . $objUser2->getID() . "<br />";
        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Password is " . $objUser2->getPassword() . "<br />";
        print "Email Address is " . $objUser2->getEmailAddress() . "<br/>";

        $objUser3 = new User($objPDO, 4);

        print "ID: " . $objUser3->getID() . "<br />";
        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";
        print "Password is " . $objUser3->getPassword() . "<br />";
        print "Email Address is " . $objUser3->getEmailAddress() . "<br/>";


?>
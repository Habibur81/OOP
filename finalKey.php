<?php
    final class NotInheritance{

        public $str = "I not inheritance class because i have final key";

        final function NotInheriMethod()
        {
            echo "Child class not used me. because i have final key. child class only call me.";
        }
        
    } 
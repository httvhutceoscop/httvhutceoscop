<?php
class HelloWorld
{
    // This method prints a greeting.
    // It takes one argument: the language to use.
    // Default language is English.
    function sayHello($language = 'English')
    {
        // Put the greeting within P tags:
        echo '<p>';

        // Print a message specific to a language:
        switch ($language) {
            case 'Dutch':
                echo 'Hallo, wereld!';
                break;
            case 'French':
                echo 'Bonjour, monde!';
                break;
            case 'German':
                echo 'Hallo, Welt!';
                break;
            case 'Italian':
                echo 'Ciao, mondo!';
                break;
            case 'Spanish':
                echo '¡Hola, mundo!';
                break;
            case 'English':
            default:
                echo 'Hello, world!';
                break;
        } // End of switch.
    } // End of sayHello() method.
} // End of HelloWorld class.

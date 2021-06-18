<?php
class HelloWorld
{
    // This method prints a greeting.
    // It takes one argument: the language to use.
    // Default language is English.
    function sayHello(string $language = 'English')
    {
        // Print a message specific to a language:
        switch ($language) {
            case 'Vietnamese':
                echo 'Xin chào thế giới!';
                break;
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

    function sayName(string $name) {
        echo 'My name is '.$name;
    }
} // End of HelloWorld class.

$greeting = new HelloWorld();
$greeting->sayHello('Vietnamese');
echo "\n";
$greeting->sayName('Viet');

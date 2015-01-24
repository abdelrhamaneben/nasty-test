************************************ NASTY TEST **************************************


Description : petit helper permettant de réaliser des tests unitaires au sein du framework PHP Codeigniter.

Fonctions assertions:


AssertTrue(mixed $var [, String $message = "" ]) : Assert si $var vaut True

AssertFalse(mixed $var [, String $message = "" ]) : Assert si $var vaut False

AssertEquals(mixed $var1 , mixed $var2 [, String $message = "" ]) : Assert si $var1 vaut $var2

AssertNotEquals(mixed $var1 , mixed $var2 [, String $message = "" ]) : Assert si $var1 ne vaut pas $var2

AssertIdentical(mixed $var1 , mixed $var2 [, String $message = "" ]) : Assert si $var1 est identique à  $var2

AssertNull(mixed $var [, String $message = "" ]) : Assert si $var vaut null

AssertNotNull(mixed $var [, String $message = "" ]) : Assert si $var ne vaut pas null

AssertInArray(array $array , mixed $item [, String $message = "" ]) : Assert si $item est dans $array

AssertPattern(String $pattern, String $subject [, String $message = "" ]) : Assert si $subject contient $pattern

AssertNoPattern(String $pattern, String $subject [, String $message = "" ]) : Assert si $subject ne contient pas $pattern

Fonctions annexes:

fail( void [, String $message = "" ]) : crée un échec

nasty_go( void ) : exécute les functions du contrôleur commençant par test_

nasty_debug ( mixed $var ) : affiche le contenu de $var dans un formattage amélioré 
# Rrrrepeat Counter

#### Simple app allowing one to enter a word and a sentence containing that word (or not), and find out how many occurrences of that word there are in the sentence.

#### By _Nicole Freed_

## Description

Simple app allowing one to enter a word and a sentence containing that word (or not), and find out how many occurrences of that word there are in the sentence.

## Setup/Installation Requirements

* You'll need to have PHP installed on your computer. For install instructions, see https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-php.
* Clone the project directory from Terminal using <git clone https://github.com/gitasong/address-book-twig.git>.
* Install Composer on your computer following the install instructions at https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-composer-and-configuration-for-mac for Mac and https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-composer-and-configuration-for-windows for Windows.
* In Terminal, navigate to the main project directory and install the necessary dependencies (Silex and Twig) using <composer install>.
* In Terminal, navigate to the web folder inside the main project directory and start your PHP server using <php -S localhost:8000>.
* Type localhost:8000 in your browser URL window to start the app.

## Project Specifications

* The program correctly returns how frequently a single-letter word appears in a single-letter string.
    - Input: Word: "a", String: "a"
    - Output: 1
    - Reasoning: "a" is one of only two (or three, if you count the archaic "O") single-letter words in the English language.

* The program correctly returns how frequently a multi-letter word appears in a multi-letter/single-word string.
    - Input: Word: "the", String: "the"
    - Output: 1
    - Reasoning: Since "the" is one of the most common words in English, might as well use it. :)

* The program correctly returns how frequently a single-letter word appears in a multi-word string containing a single occurrence of that single-letter word.
    - Input: Word: "a", String: "polly want a cracker"
    - Output: 1
    - Reasoning: See the first spec, above.

* The program correctly returns how frequently a single-letter word appears in a multi-word string containing multiple occurrences of that single-letter word.
    - Input: Word: "I", String: "I want what I want"
    - Output: 2
    - Reasoning: I wanted to use a single-letter word other than "a" for some of the test cases. Using "I" also allows the program to either match or ignore case, as I choose (the projects specs are case-agnostic).

* The program correctly returns how frequently a multi-letter word appears in a multi-word string containing a single occurrence of that multi-letter word.
    - Input: Word: "crow", String: "the crow flies at dawn"
    - Output: 1
    - Reasoning: A fun sentence I stole from a LaunchCode project. It contains the unambiguous word "crow".

* The program correctly returns how frequently a multi-letter word appears in a multi-word string containing multiple occurrences of that multi-letter word.
    - Input: Word: "sea", String: "she sells sea shells by the sea shore"
    - Output: 2
    - Reasoning: Another fun sentence that contains multiple occurrences of a word (and is a tongue-twister, to boot :).

* The program correctly returns how frequently a multi-letter word appears in a multi-word string containing one or more occurrences of that word, plus one or more occurrences of that word embedded in another word (these should not be counted).
    - Input: Word: "con", String: "the con consistently conned his marks, but he couldn't con himself"
    - Output: 2
    - Reasoning: Ensures that the program returns whole words only, not partial words or words within other words.

## Known Bugs

Forms are not currently validated. Other than that, there are no known bugs.

## Support and contact details

You can contact me with any questions at gitasong@github.io.

## Technologies Used

* HMTL5
* CSS3
* PHP 5.6
* Silex 1.1 (managed using Composer)
* Twig 1.0 (managed using Composer)
* Composer (dependency manager)

### License

This app is licensed under the MIT license.

Copyright (c) 2016 Nicole Freed. All rights reserved.

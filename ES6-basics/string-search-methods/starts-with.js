'use strict';

let strToSearch = 'a-really-long-hyphenated-string';

console.log(/^a-really/.test(strToSearch)); // test string with regular expression

console.log(strToSearch.indexOf('a-really') === 0); // indexOf method

console.log(strToSearch.startsWith('a-really')); // startsWith
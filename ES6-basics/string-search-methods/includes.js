'use strict';

let strToSearch = 'a-really-long-hyphenated-string';

console.log(/long/.test(strToSearch)); // test string with regular expression

console.log(strToSearch.indexOf('long') > -1); // indexOf method

console.log(strToSearch.includes('long')); // startsWith
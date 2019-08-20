//string would be palindrome if unique characters are even in number, an odd length string 
//however, can accomodate one odd character/s in the middle of string, to make it palindrome.

function palindromeRearranging(inputString) {
  
  let countedEle = inputString.split('').reduce(function (a, v) {v in a ? a[v]++ : a[v] = 1; return a;}, {});
  let f = inputString.length%2 == 0?1:0;
  
  for(var k in countedEle){
  countedEle[k] % 2 != 0 ? f++ : 0;
  }
  
  return f < 2;
}
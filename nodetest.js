var fs = require('fs');
var buf = fs.readFileSync(process.argv[2]);
var str = buf.toString();
var ary = str.split('\n');
var num = ary.length;
console.log(num-1);

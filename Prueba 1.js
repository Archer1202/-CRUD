const num = [];


for ( i = 1 ; i < 1000 ; i++){
    num.push(i)
}
const multiplos3 = num.filter(n => n % 3 == 0);

const multiplos5 = num.filter(n => n % 5 == 0);


const sumares3 = multiplos3.reduce(function(acc,res) {
    return acc + res;
});

const sumares5 = multiplos5.reduce(function (acc,res) {
    return acc + res;
});


const sumatotal = sumares3 + sumares5;
//3,6,9,5
console.log(sumatotal, sumares3, sumares5);
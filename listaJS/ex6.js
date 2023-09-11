var temp = 1;

function Celsius(a) {
    return (a - 32) / 1.8;
}

function Fahrenheit(f) {
    return (f * 1.8) + 32;
}

console.log(Fahrenheit(temp));
var a = [1, 2, 8];
var b = [5, 'Hello', 11];

Array.prototype.double = function () {
    return this.map(function (item) {

        if (typeof item === 'number') {
            return Math.pow(item, 2);
        } else if (typeof item === 'string') {
            return item += item;
        }

    });
}

var newA = a.double();
var newB = b.double();
console.log(newA);
console.log(newB);
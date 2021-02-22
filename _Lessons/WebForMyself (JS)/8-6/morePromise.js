function sleep(ms) {
    return new Promise(function (resolve) {
        setTimeout(function () {
            resolve();
        }, ms);
    })
}

let p1 = sleep(1500).then(function () {
    return {
        name: 'Promise 1500'
    }
});

let p2 = sleep(3000).then(function () {
    return {
        name: 'Promise 3000'
    }
});

Promise.all([p1, p2]).then(function (data) {
    console.log('All', data);
});

Promise.race([p1, p2]).then(function (data) {
    console.log('Race', data);
});

// async function () {
//     let promiseAll = await Promise.all([p1, p2]);

//     let promiseRace = await Promise.race([p1, p2]);

//     console.log('promiseAll', promiseAll);
//     console.log('promiseRace', promiseRace);
// }
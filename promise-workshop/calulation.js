var calculatePromise = new Promise(function(resolve, reject){
    setTimeout(function(){
        resolve(1 + 1);
    }, 1000);
});

function addTwo(value) {
    return value + 2;
}

function printFinalValue(nextValue){
    console.log("the final answer is", nextValue)
}

calculatePromise
    .then(addTwo)
    .then(printFinalValue);


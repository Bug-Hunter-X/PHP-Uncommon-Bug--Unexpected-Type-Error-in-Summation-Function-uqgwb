function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] === 'number') {
      sum += numbers[i];
    } else {
      //Handle the error as per your application requirements
      console.error('Invalid input type at index: ' + i);
      return null; //Or throw an error
    }
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

//The improved function now handles non-numeric values gracefully
let numbers2 = [1, 2, "a", 4, 5];
let sum2 = calculateSum(numbers2); //The error is handled and sum2 is null
console.log("Sum:", sum2); // Output: Sum: null
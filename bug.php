function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

//Uncommon bug: Using the function with non-numeric values will cause an error.
let numbers2 = [1, 2, "a", 4, 5];
let sum2 = calculateSum(numbers2); // Throws an error because it cannot add string "a" to numbers
console.log("Sum:", sum2);
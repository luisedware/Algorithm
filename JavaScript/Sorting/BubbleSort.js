let temp = 0;
let array = [8, 100, 50, 22, 15, 6, 1, 1000, 999, 0];
let length = array.length;
let number = length - 1;

console.log('冒泡排序前：[' + array.join(', ') + ']');

for (let i = number; i >= 0; i--) {
	for (let j = number-i; j>=0; j--) {
		if (array[j] > array[j+1]) {
			temp = array[j+1];
			array[j+1] = array[j];
			array[j] = temp;
		}
	}
}

console.log('冒泡排序后：[' + array.join(', ') + ']');


